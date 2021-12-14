<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class AuthenticationKey extends Model
{
    protected $internal_gapi_mappings = [];
    public $id;
    public $publicKeyPem;


    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setPublicKeyPem($publicKeyPem)
    {
        $this->publicKeyPem = $publicKeyPem;
    }
    public function getPublicKeyPem()
    {
        return $this->publicKeyPem;
    }
}