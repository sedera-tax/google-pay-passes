<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LoyaltyClass;

class LoyaltyClassAddMessageResponse extends Model
{
    protected $internal_gapi_mappings = [];
    protected $resourceType = LoyaltyClass::class;
    protected $resourceDataType = '';
    /**
     * @var array|LoyaltyClass|mixed|null
     */
    private $resource;


    public function setResource(LoyaltyClass $resource)
    {
        $this->resource = $resource;
    }
    public function getResource()
    {
        return $this->resource;
    }
}