<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\EventTicketObject;

class EventTicketObjectAddMessageResponse extends Model
{
    protected $internal_gapi_mappings = [];
    protected $resourceType = EventTicketObject::class;
    protected $resourceDataType = '';
    /**
     * @var array|EventTicketObject|mixed|null
     */
    private $resource;


    public function setResource(EventTicketObject $resource)
    {
        $this->resource = $resource;
    }
    public function getResource()
    {
        return $this->resource;
    }
}