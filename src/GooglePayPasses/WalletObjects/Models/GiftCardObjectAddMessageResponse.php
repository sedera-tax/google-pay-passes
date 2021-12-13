<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\GiftCardObject;

class GiftCardObjectAddMessageResponse extends Model
{
    protected $internal_gapi_mappings = [];
    protected $resourceType = GiftCardObject::class;
    protected $resourceDataType = '';
    /**
     * @var array|GiftCardObject|mixed|null
     */
    private $resource;


    public function setResource(GiftCardObject $resource)
    {
        $this->resource = $resource;
    }
    public function getResource()
    {
        return $this->resource;
    }
}