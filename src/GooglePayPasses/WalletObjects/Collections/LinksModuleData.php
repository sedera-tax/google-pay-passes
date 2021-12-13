<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\Uri;

class LinksModuleData extends Collection
{
    protected $collection_key = 'uris';
    protected $internal_gapi_mappings = [];
    protected $urisType = Uri::class;
    protected $urisDataType = 'array';
    /**
     * @var array|mixed|null
     */
    private $uris;


    public function setUris($uris)
    {
        $this->uris = $uris;
    }
    public function getUris()
    {
        return $this->uris;
    }
}