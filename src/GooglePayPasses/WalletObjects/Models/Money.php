<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class Money extends Model
{
    protected $internal_gapi_mappings = [];
    public $currencyCode;
    public $kind;
    public $micros;


    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
    }
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setMicros($micros)
    {
        $this->micros = $micros;
    }
    public function getMicros()
    {
        return $this->micros;
    }
}