<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\DetailsItemInfo;

class DetailsTemplateOverride extends Collection
{
    protected $collection_key = 'detailsItemInfos';
    protected $internal_gapi_mappings = [];
    protected $detailsItemInfosType = DetailsItemInfo::class;
    protected $detailsItemInfosDataType = 'array';
    /**
     * @var array|DetailsItemInfo|mixed|null
     */
    private $detailsItemInfos;


    public function setDetailsItemInfos(DetailsItemInfo $detailsItemInfos)
    {
        $this->detailsItemInfos = $detailsItemInfos;
    }
    public function getDetailsItemInfos()
    {
        return $this->detailsItemInfos;
    }
}