<?php

namespace PedroLadeira\Eupago;

use SoapClient;
use SoapHeader;

class Eupago
{

    private static $_instance;

    private $_wsdl = 'https://seguro.eupago.pt/eupagov8.wsdl';
    private $_client = null;
    private $_apiKey = null;
    private $_currency = null;
    private $_transactionId = null;

    public static function getInstance()
    {
        if(!self::$_instance){
            self::$_instance = new Eupago;
        }
        return self::$_instance;
    }
    public function setApiKey($apikey)
    {
        $this->_apiKey = $apikey;
    }
    public function setTransactionId($transactionId)
    {
        $this->_transactionId = $transactionId;
    }
    private function getClient()
    {
        return $this->_client = new SoapClient($this->_wsdl, [
            'soap_version'   => SOAP_1_2,
            'style'    => SOAP_DOCUMENT,
            'use' => SOAP_LITERAL,
            'cache_wsdl' => WSDL_CACHE_NONE,
        ]);
    }
    public function generateReferenceMB($value)
    {
        $params = [
            'valor' => $value,
            'chave' => $this->_apiKey,
            'id'    => $this->_transactionId
        ];

        $response = $this->getClient()->gerarReferenciaMB($params);
        return $response;
    }
    public function informacaoReferencia($reference)
    {
        $params = [
            'chave'      => $this->_apiKey,
            'referencia' => $reference
        ];

        $response = $this->getClient()->gerarReferenciaMB($params);
        return $response;
    }
}
