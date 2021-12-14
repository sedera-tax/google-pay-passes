<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class JwtModel extends Model
{
    protected $internal_gapi_mappings = [];
    public $jwt;


    public function setJwt($jwt)
    {
        $this->jwt = $jwt;
    }
    public function getJwt()
    {
        return $this->jwt;
    }
}