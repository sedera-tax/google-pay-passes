<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\FlightObject;

class FlightObjectAddMessageResponse extends Model
{
    protected $internal_gapi_mappings = [];
    protected $resourceType = FlightObject::class;
    protected $resourceDataType = '';
    /**
     * @var array|FlightObject|mixed|null
     */
    private $resource;


    public function setResource(FlightObject $resource)
    {
        $this->resource = $resource;
    }
    public function getResource()
    {
        return $this->resource;
    }
}