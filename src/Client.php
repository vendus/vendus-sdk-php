<?php

namespace Vendus;

class Client
{
    private $_curl       = null;
    private $_method     = null;
    private $_id         = null;
    private $_params     = null;
    private $_apiKey     = null;
    private $_host       = null;
    private $_endpoint   = null;
    private $_endpointId = null;
    private $_edgeId     = null;
    private $_baseUrl    = 'https://www.vendus.pt/ws/v1.1/';

    private $_response        = null;
    private $_responseHeaders = [];
    private $_responseBody    = null;
    private $_responseType    = null;
    private $_responseStatus  = null;

    public function __construct()
    {
    }

    public function get()
    {
        $this->_method = 'GET';
        return $this->_request();
    }

    public function post($params=null)
    {
        $this->_method = 'POST';
        return $this->_request($params);
    }

    public function delete()
    {
        $this->_method = 'DELETE';
        return $this->_request();
    }

    public function patch($params=null)
    {        
        $this->_method = 'PATCH';
        return $this->_request($params);
    }

    public function put($params=null)
    {
        $this->_method = 'PUT';
        return $this->_request($params);
    }

    public function setApiKey($apiKey)
    {
        $this->_apiKey = $apiKey;
        return $this;
    }

    public function setBaseUrl($url)
    {
        $this->_baseUrl = $url;
        return $this;
    }

    public function setEndpoint($endpoint)
    {
        $this->_endpoint = $endpoint;
        return $this;
    }

    public function setMethod($method)
    {
        $this->_method = $method;
        return $this;
    }

    public function setId($id)
    {
        $this->_id = $id;
        return $this;
    }

    public function setParams($params)
    {
        $this->_params = $params;
        return $this;
    }

    public function setParam($param, $value)
    {
        $this->_params[$param] = $value;
        return $this;
    }

    public function setEdge($edge)
    {
        $this->_edge = $edge;
        return $this;
    }
    
    public function setEdgeId($edgeId)
    {
        $this->_edgeId = $edgeId;
        return $this;
    }

    public function setHost($host)
    {
        $this->_host = $host;
    }

    private function _initUri()
    {
        $uriParts = [$this->_baseUrl . $this->_endpoint];

        if (!empty($this->_id)) {
            $uriParts[] = $this->_id . '/';
        }

        if (!empty($this->_edge)) {
            $uriParts[] = $this->_edge . '/';
        }

        if (!empty($this->_edgeId)) {
            $uriParts[] = $this->_edgeId . '/';
        }

        $uri = implode('/', $uriParts);

        if (!empty($this->_params)) {
            if ($this->_method!='POST' && $this->_method!='PATCH') {
                $uri .= '?' . http_build_query($this->_params);
            }
        }

        $this->_curl = curl_init($uri);
    }

    private function _initHeaders()
    {
        $headers = [];

        if (!empty($this->_params)) {
            if ($this->_method=='POST' || $this->_method=='PATCH') {
                
                $content = json_encode($this->_params);
                curl_setopt($this->_curl, CURLOPT_POSTFIELDS, $content);

                $headers[] = "Content-type: application/json";
                $headers[] = "Content-Length: " . strlen($content);
            }
        }

        if ($this->_host) {
            $headers[] = "Host: " . $this->_host;
        }

        return $headers;
    }

    private function _initCurl()
    {
        $headers = $this->_initHeaders();

        curl_setopt($this->_curl, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($this->_curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($this->_curl, CURLOPT_USERPWD, $this->_apiKey);
        curl_setopt($this->_curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->_curl, CURLOPT_CUSTOMREQUEST, $this->_method);
        curl_setopt(
            $this->_curl, 
            CURLOPT_HEADERFUNCTION,
            function($curl, $header) {
                
                $len    = strlen($header);
                $header = explode(':', $header, 2);
                
                if (count($header) < 2) {
                    return $len;
                }

                $name = strtolower(trim($header[0]));
                
                if (!array_key_exists($name, $this->_responseHeaders)) {
                    $this->_responseHeaders[$name]  = trim($header[1]);
                } else {
                    $this->_responseHeaders[$name] .= ', ' . trim($header[1]);
                }

                return $len;
            }
        );
    }

    private function _request($params=null)
    {
        if ($params) {
            $this->setParams($params);
        }

        $this->_initUri();
        $this->_initCurl();
        
        if (!$this->_execute()) {
            return false;
        }

        return $this->_data;
    }

    private function _execute()
    {
        $this->_response       = curl_exec($this->_curl);
        $this->_responseStatus = curl_getinfo($this->_curl, CURLINFO_HTTP_CODE);
        
        $this->_extractResponseParts();
        
        if ($curlErrorCode = curl_errno($this->_curl)) {
            throw new \Exception("Curl error: " . curl_error($this->_curl), $curlErrorCode);
        }

        curl_close($this->_curl);

        if ($this->_responseStatus!='200' && $this->_responseStatus!='201') {
            return false;
        }

        return true;
    }
    
    public function getResponse()
    {
        return $this->_response;
    }

    public function getResponseStatus() 
    {
        return $this->_responseStatus;
    }

    public function getResponseErrors() 
    {
        $body = $this->getResponseBody();

        if (is_array($body) && !empty($body['errors'])) {
            return $body['errors'];
        }

        return false;
    }

    public function getResponseBody()
    {
        $jd = json_decode($this->_responseBody, true);
        if (!empty($jd)) {
            return $jd;
        } else {
            return $this->_responseBody;
        }
    }

    public function getResponseHeaders() 
    {
        return $this->_responseHeaders;
    }

    private function _extractResponseParts()
    {
        $headers = $this->_responseHeaders;
        $this->_responseBody = $this->_response;
        $this->_responseType = !empty($headers['content-type']) ? $headers['content-type'] : 'text'; 

        if (strstr($this->_responseType, 'json')) {
            $this->_data = json_decode($this->_responseBody, true);
        } else {
            $this->_data = $this->_responseBody;
        }
    }
}
