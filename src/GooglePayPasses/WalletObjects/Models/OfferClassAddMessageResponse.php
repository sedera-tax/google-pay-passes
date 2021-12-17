<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\OfferClass;

class OfferClassAddMessageResponse extends Model
{
    protected $internal_gapi_mappings = [];
    protected $resourceType = OfferClass::class;
    protected $resourceDataType = '';
    /**
     * @var array|OfferClass|mixed|null
     */
    private $resource;


    public function setResource(OfferClass $resource)
    {
        $this->resource = $resource;
    }
    public function getResource()
    {
        return $this->resource;
    }
}