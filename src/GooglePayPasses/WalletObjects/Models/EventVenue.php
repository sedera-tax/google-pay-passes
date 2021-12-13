<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class EventVenue extends Model
{
    protected $internal_gapi_mappings = [];
    protected $addressType = LocalizedString::class;
    protected $addressDataType = '';
    public $kind;
    protected $nameType = LocalizedString::class;
    protected $nameDataType = '';
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $address;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $name;


    public function setAddress(LocalizedString $address)
    {
        $this->address = $address;
    }
    public function getAddress()
    {
        return $this->address;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setName(LocalizedString $name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return $this->name;
    }
}