<?php
/**
 * Created by: Andrey Polyakov (andrey@polyakov.im)
 */

namespace Glook\TravelPayouts;

use \Valitron\Validator;

abstract class TravelpayoutsApiBase
{
    public $token;

    private $_errors = array();
    private $_request_url;
    private $_attributes = array();

    public function __construct($attributes = false)
    {
        if ($attributes) {
            $this->setAttributes($attributes);
        }
    }

    public function getRules()
    {
        return array(
            'required' => array(
                array('token'),
            ),
            'length' => array(
                array('token', 32),
            ),
        );
    }

    public abstract function getApiUrl();

    public function get_request_url()
    {
        return $this->_request_url;
    }

    public function setAttributes($values)
    {
        if (!is_array($values))
            return;

        foreach ($values as $name => $value) {
            if (property_exists($this, $name)) {
                $this->$name = $value;
            }
        }
    }

    public function getAttributes()
    {
        if (empty($this->_attributes)) {
            $public_props = (new \ReflectionObject($this))->getProperties(\ReflectionProperty::IS_PUBLIC);
            $attributes = array();
            foreach ($public_props as $prop) {
                $attributes[] = $prop->getName();
            }
            $this->_attributes = $attributes;
        }

        return array_filter(get_object_vars($this), function ($prop_name) {
            return in_array($prop_name, $this->_attributes);
        }, ARRAY_FILTER_USE_KEY);
    }

    public function getErrors()
    {
        return $this->_errors;
    }

    public function validate()
    {
        $rules = $this->getFilteredRules();
        $attributes = $this->getAttributes();
        $validator = new Validator($attributes);
        $validator->rules($rules);
        if (!$validator->validate()) {
            $this->_errors = $validator->errors();
            return false;
        }
        return true;
    }

    public function getFilteredRules()
    {
        $rules = $this->getRules();
        $attributes = $this->getAttributes();
        $skippedAttributes = array_filter($attributes, function ($attribute) {
            return $attribute === TravelpayoutsApi::SKIP_VALUE;
        });

        return array_map(function ($ruleCategory) use ($skippedAttributes) {
            return array_filter($ruleCategory, function ($fields) use ($skippedAttributes) {
                if (isset($fields[0]))
                    return !array_key_exists($fields[0], $skippedAttributes);

                return false;
            });
        }, $rules);
    }

    public function send($run_validation = true)
    {
        $attributes = $this->getAttributes();

        if ($run_validation) {
            if (!$this->validate()) {
                return false;
            }
        }
        $params = $this->array_map_recursive(function ($param) {
            if ($param === TravelpayoutsApi::SKIP_VALUE) return null;
            return $param;
        }, $attributes);
        $paramsString = http_build_query($params);
        $this->_request_url = "{$this->getApiUrl()}?{$paramsString}";
        return $this->sendQuery($this->_request_url);
    }

    public function array_map_recursive($callback, $array)
    {
        $func = function ($item) use (&$func, &$callback) {
            return is_array($item) ? array_map($func, $item) : call_user_func($callback, $item);
        };

        return array_map($func, $array);
    }

    protected function sendQuery($requestUrl)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $requestUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        $response = curl_exec($ch);
        curl_close($ch);

        if ($responseBody = json_decode($response, true)) {
            if (isset($responseBody['data']) && count($responseBody['data']) > 0) {
                return $responseBody['data'];
            } else {
                if (isset($responseBody['error']))
                    $this->_errors[] = $responseBody['error'];
                return false;
            }
        }
        return false;
    }
}