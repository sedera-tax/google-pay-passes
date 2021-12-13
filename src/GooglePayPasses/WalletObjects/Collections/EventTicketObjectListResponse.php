<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\Pagination;

class EventTicketObjectListResponse extends Collection
{
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = [];
    protected $paginationType = Pagination::class;
    protected $paginationDataType = '';
    protected $resourcesType = EventTicketObject::class;
    protected $resourcesDataType = 'array';
    /**
     * @var array|Pagination|mixed|null
     */
    private $pagination;
    /**
     * @var array|EventTicketObject|mixed|null
     */
    private $resources;


    public function setPagination(Pagination $pagination)
    {
        $this->pagination = $pagination;
    }
    public function getPagination()
    {
        return $this->pagination;
    }
    public function setResources(EventTicketObject $resources)
    {
        $this->resources = $resources;
    }
    public function getResources()
    {
        return $this->resources;
    }
}