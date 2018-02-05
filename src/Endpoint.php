<?php

namespace Vendus;

class Endpoint
{
    private $_apiKey   = null;
    private $_endpoint = null;
    private $_edge     = null;
    private $_api      = null;

    public function __construct($endpoint=null)
    {
        if (!empty($endpoint)) {
            $this->_endpoint = $endpoint;
        }
    }

    public function list()
    {
        return $this->_api->get();
    }

    public function get($id=null)
    {
        if(!$id) {
            return false;
        }

        if($this->_edge) {
            $this->_api->setEdgeId($id);
        } else {
            $this->_api->setId($id);
        }

        return $this->_api->get();
    }

    public function create($params)
    {
        return $this->_api->post($params);
    }

    public function update($id, $params)
    {
        if($this->_edge) {
            $this->_api->setEdgeId($id);
        } else {
            $this->_api->setId($id);
        }
        
        return $this->_api->patch($params);
    }

    public function __get($objectName)
    {
        $this->_edge = $objectName;
        $this->_api->setEdge($this->_edge);
        return $this;
    }

    public function setApiKey($apiKey)
    {
        $this->_apiKey = $apiKey;
    }

    public function init()
    {
        require_once 'Client.php';

        $this->_api = new Client();
        $this->_api->setEndpoint($this->_endpoint);
        $this->_api->setApiKey('abdebedabeab');

        return $this;
    }

    public function getErrors()
    {
        return $this->_api->getResponseErrors();
    }
}