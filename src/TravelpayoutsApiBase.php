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
        $rules = $this->getRules();
        $attributes = $this->getAttributes();
        $validator = new Validator($attributes);

        $validator->rules($rules);
        if (!$validator->validate()) {
            $this->_errors = $validator->errors();
            return false;
        }
        return true;
    }

    public function send($run_validation = true)
    {
        $attributes = $this->getAttributes();

        if ($run_validation) {
            if (!$this->validate()) {
                return false;
            }
        }

        $paramsString = http_build_query($attributes);
        $this->_request_url = "{$this->getApiUrl()}?{$paramsString}";
        return $this->sendQuery($this->_request_url);
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
            return isset($responseBody['data']) && count($responseBody['data']) > 0 ? $responseBody['data'] : false;
        }
        return false;
    }
}