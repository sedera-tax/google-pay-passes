<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\OfferObject;

class OfferObjectAddMessageResponse extends Model
{
    protected $internal_gapi_mappings = [];
    protected $resourceType = OfferObject::class;
    protected $resourceDataType = '';
    /**
     * @var array|OfferObject|mixed|null
     */
    private $resource;


    public function setResource(OfferObject $resource)
    {
        $this->resource = $resource;
    }
    public function getResource()
    {
        return $this->resource;
    }
}