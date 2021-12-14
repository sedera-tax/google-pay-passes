<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;

class IssuerContactInfo extends Collection
{
    protected $collection_key = 'alertsEmails';
    protected $internal_gapi_mappings = [];
    public $alertsEmails;
    public $email;
    public $name;
    public $phone;


    public function setAlertsEmails($alertsEmails)
    {
        $this->alertsEmails = $alertsEmails;
    }
    public function getAlertsEmails()
    {
        return $this->alertsEmails;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setPhone($phone)
    {
        $this->phone = $phone;
    }
    public function getPhone()
    {
        return $this->phone;
    }
}