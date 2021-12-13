<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\GiftCardClass;

class GiftCardClassAddMessageResponse extends Model
{
    protected $internal_gapi_mappings = [];
    protected $resourceType = GiftCardClass::class;
    protected $resourceDataType = '';
    /**
     * @var array|GiftCardClass|mixed|null
     */
    private $resource;


    public function setResource(GiftCardClass $resource)
    {
        $this->resource = $resource;
    }
    public function getResource()
    {
        return $this->resource;
    }
}