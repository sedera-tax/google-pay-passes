<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\Issuer;

class IssuerListResponse extends Collection
{
    protected $collection_key = 'resources';
    protected $internal_gapi_mappings = array(
    );
    protected $resourcesType = Issuer::class;
    protected $resourcesDataType = 'array';
    /**
     * @var array|mixed|null
     */
    private $resources;


    public function setResources($resources)
    {
        $this->resources = $resources;
    }
    public function getResources()
    {
        return $this->resources;
    }
}