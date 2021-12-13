<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class LatLongPoint extends Model
{
    protected $internal_gapi_mappings = [];
    public $kind;
    public $latitude;
    public $longitude;


    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
    }
    public function getLatitude()
    {
        return $this->latitude;
    }
    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
    }
    public function getLongitude()
    {
        return $this->longitude;
    }
}