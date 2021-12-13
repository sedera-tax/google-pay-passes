<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\Pagination;

class FlightObjectListResponse extends Collection
{
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = [];
    protected $paginationType = Pagination::class;
    protected $paginationDataType = '';
    protected $resourcesType = FlightObject::class;
    protected $resourcesDataType = 'array';
    /**
     * @var array|Pagination|mixed|null
     */
    private $pagination;
    /**
     * @var array|mixed|null
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
    public function setResources($resources)
    {
        $this->resources = $resources;
    }
    public function getResources()
    {
        return $this->resources;
    }
}