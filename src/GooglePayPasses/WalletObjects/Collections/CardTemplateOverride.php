<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\CardRowTemplateInfo;

class CardTemplateOverride extends Collection
{
    protected $collection_key = 'cardRowTemplateInfos';
    protected $internal_gapi_mappings = [];
    public $cardRowTemplateInfos;
    protected $cardRowTemplateInfosType = CardRowTemplateInfo::class;
    protected $cardRowTemplateInfosDataType = 'array';


    public function setCardRowTemplateInfos($cardRowTemplateInfos)
    {
        $this->cardRowTemplateInfos = $cardRowTemplateInfos;
    }
    public function getCardRowTemplateInfos()
    {
        return $this->cardRowTemplateInfos;
    }
}