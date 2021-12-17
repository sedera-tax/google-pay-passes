<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class SignUpInfo extends Model
{
    protected $internal_gapi_mappings = [];
    public $classId;


    public function setClassId($classId)
    {
        $this->classId = $classId;
    }
    public function getClassId()
    {
        return $this->classId;
    }
}