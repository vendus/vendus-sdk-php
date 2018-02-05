<?php

namespace Vendus;

class Api
{
    private $_apiKey = null;
    private $_client = null;

    public function __construct($apiKey=null)
    {
        if ($apiKey) {
            $this->_apiKey = $apiKey;
        }
    }

    public function setApiKey($apiKey)
    {
        $this->_apiKey = $apiKey;
    }

    public function __get($objectName)
    {
        require_once 'Endpoint.php';
        
        $this->_client = new Endpoint($objectName);
        $this->_client->setApiKey($this->_apiKey);
        return $this->_client->init();
    }

    public function getErrors()
    {
        return $this->_client->getErrors();
    }
}