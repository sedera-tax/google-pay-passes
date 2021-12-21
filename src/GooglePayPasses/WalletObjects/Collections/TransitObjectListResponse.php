<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\Pagination;

class TransitObjectListResponse extends Collection
{
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = [];
    protected $paginationType = Pagination::class;
    protected $paginationDataType = '';
    protected $resourcesType = TransitObject::class;
    protected $resourcesDataType = 'array';
    /**
     * @var array|mixed|null
     */
    private $resources;
    /**
     * @var array|Pagination|mixed|null
     */
    private $pagination;


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