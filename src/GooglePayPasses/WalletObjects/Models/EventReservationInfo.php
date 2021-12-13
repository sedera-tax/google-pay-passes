<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class EventReservationInfo extends Model
{
    protected $internal_gapi_mappings = [];
    public $confirmationCode;
    public $kind;


    public function setConfirmationCode($confirmationCode)
    {
        $this->confirmationCode = $confirmationCode;
    }
    public function getConfirmationCode()
    {
        return $this->confirmationCode;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
}