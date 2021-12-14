<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LoyaltyObject;

class LoyaltyObjectAddMessageResponse extends Model
{
    protected $internal_gapi_mappings = [];
    protected $resourceType = LoyaltyObject::class;
    protected $resourceDataType = '';
    /**
     * @var array|LoyaltyObject|mixed|null
     */
    private $resource;


    public function setResource(LoyaltyObject $resource)
    {
        $this->resource = $resource;
    }
    public function getResource()
    {
        return $this->resource;
    }
}