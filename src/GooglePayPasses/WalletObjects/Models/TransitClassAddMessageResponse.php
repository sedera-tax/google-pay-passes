<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\TransitClass;

class TransitClassAddMessageResponse extends Model
{
    protected $internal_gapi_mappings = [];
    protected $resourceType = TransitClass::class;
    protected $resourceDataType = '';
    /**
     * @var array|TransitClass|mixed|null
     */
    private $resource;


    public function setResource(TransitClass $resource)
    {
        $this->resource = $resource;
    }
    public function getResource()
    {
        return $this->resource;
    }
}