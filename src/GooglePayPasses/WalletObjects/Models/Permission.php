<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class Permission extends Model
{
    protected $internal_gapi_mappings = [];
    public $emailAddress;
    public $role;


    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }
    public function setRole($role)
    {
        $this->role = $role;
    }
    public function getRole()
    {
        return $this->role;
    }
}