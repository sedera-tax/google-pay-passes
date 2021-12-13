<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\FlightClass;

class FlightClassAddMessageResponse extends Model
{
    protected $internal_gapi_mappings = [];
    protected $resourceType = FlightClass::class;
    protected $resourceDataType = '';
    /**
     * @var array|FlightClass|mixed|null
     */
    private $resource;


    public function setResource(FlightClass $resource)
    {
        $this->resource = $resource;
    }
    public function getResource()
    {
        return $this->resource;
    }
}