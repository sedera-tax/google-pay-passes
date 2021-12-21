<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\TransitObject;

class TransitObjectAddMessageResponse extends Model
{
    protected $internal_gapi_mappings = [];
    protected $resourceType = TransitObject::class;
    protected $resourceDataType = '';
    /**
     * @var array|TransitObject|mixed|null
     */
    private $resource;


    public function setResource(TransitObject $resource)
    {
        $this->resource = $resource;
    }
    public function getResource()
    {
        return $this->resource;
    }
}