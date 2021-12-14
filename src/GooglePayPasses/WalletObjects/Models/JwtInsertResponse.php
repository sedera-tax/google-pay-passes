<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\Resources;

class JwtInsertResponse extends Model
{
    protected $internal_gapi_mappings = [];
    protected $resourcesType = Resources::class;
    protected $resourcesDataType = '';
    public $saveUri;
    /**
     * @var array|Resources|mixed|null
     */
    private $resources;


    public function setResources(Resources $resources)
    {
        $this->resources = $resources;
    }
    public function getResources()
    {
        return $this->resources;
    }
    public function setSaveUri($saveUri)
    {
        $this->saveUri = $saveUri;
    }
    public function getSaveUri()
    {
        return $this->saveUri;
    }
}