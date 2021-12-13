<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\CardTemplateOverride;
use GooglePayPasses\WalletObjects\Collections\DetailsTemplateOverride;

class ClassTemplateInfo extends Model
{
    protected $internal_gapi_mappings = [];
    public $cardBarcodeSectionDetails;
    protected $cardBarcodeSectionDetailsType = CardBarcodeSectionDetails::class;
    protected $cardBarcodeSectionDetailsDataType = '';
    protected $cardTemplateOverrideType = CardTemplateOverride::class;
    protected $cardTemplateOverrideDataType = '';
    protected $detailsTemplateOverrideType = DetailsTemplateOverride::class;
    protected $detailsTemplateOverrideDataType = '';
    protected $listTemplateOverrideType = ListTemplateOverride::class;
    protected $listTemplateOverrideDataType = '';
    /**
     * @var array|CardTemplateOverride|mixed|null
     */
    private $cardTemplateOverride;
    /**
     * @var array|DetailsTemplateOverride|mixed|null
     */
    private $detailsTemplateOverride;
    /**
     * @var array|ListTemplateOverride|mixed|null
     */
    private $listTemplateOverride;


    public function setCardBarcodeSectionDetails(CardBarcodeSectionDetails $cardBarcodeSectionDetails)
    {
        $this->cardBarcodeSectionDetails = $cardBarcodeSectionDetails;
    }
    public function getCardBarcodeSectionDetails()
    {
        return $this->cardBarcodeSectionDetails;
    }
    public function setCardTemplateOverride(CardTemplateOverride $cardTemplateOverride)
    {
        $this->cardTemplateOverride = $cardTemplateOverride;
    }
    public function getCardTemplateOverride()
    {
        return $this->cardTemplateOverride;
    }
    public function setDetailsTemplateOverride(DetailsTemplateOverride $detailsTemplateOverride)
    {
        $this->detailsTemplateOverride = $detailsTemplateOverride;
    }
    public function getDetailsTemplateOverride()
    {
        return $this->detailsTemplateOverride;
    }
    public function setListTemplateOverride(ListTemplateOverride $listTemplateOverride)
    {
        $this->listTemplateOverride = $listTemplateOverride;
    }
    public function getListTemplateOverride()
    {
        return $this->listTemplateOverride;
    }
}