<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class DateTime extends Model
{
    protected $internal_gapi_mappings = [];
    public $date;

    public function setDate($date)
    {
        $this->date = $date;
    }
    public function getDate()
    {
        return $this->date;
    }
}