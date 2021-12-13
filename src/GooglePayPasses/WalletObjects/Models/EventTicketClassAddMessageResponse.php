<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\EventTicketClass;

class EventTicketClassAddMessageResponse extends Model
{
    protected $internal_gapi_mappings = [];
    protected $resourceType = EventTicketClass::class;
    protected $resourceDataType = '';
    /**
     * @var array|EventTicketClass|mixed|null
     */
    private $resource;


    public function setResource(EventTicketClass $resource)
    {
        $this->resource = $resource;
    }
    public function getResource()
    {
        return $this->resource;
    }
}