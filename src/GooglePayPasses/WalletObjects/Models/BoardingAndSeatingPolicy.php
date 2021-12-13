<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class BoardingAndSeatingPolicy extends Model
{
    protected $internal_gapi_mappings = [];
    public $boardingPolicy;
    public $kind;
    public $seatClassPolicy;


    public function setBoardingPolicy($boardingPolicy)
    {
        $this->boardingPolicy = $boardingPolicy;
    }
    public function getBoardingPolicy()
    {
        return $this->boardingPolicy;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setSeatClassPolicy($seatClassPolicy)
    {
        $this->seatClassPolicy = $seatClassPolicy;
    }
    public function getSeatClassPolicy()
    {
        return $this->seatClassPolicy;
    }
}