<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\ModifyLinkedOfferObjects;

class ModifyLinkedOfferObjectsRequest extends Model
{
    protected $internal_gapi_mappings = [];
    protected $linkedOfferObjectIdsType = ModifyLinkedOfferObjects::class;
    protected $linkedOfferObjectIdsDataType = '';
    /**
     * @var array|ModifyLinkedOfferObjects|mixed|null
     */
    private $linkedOfferObjectIds;


    public function setLinkedOfferObjectIds(ModifyLinkedOfferObjects $linkedOfferObjectIds)
    {
        $this->linkedOfferObjectIds = $linkedOfferObjectIds;
    }
    public function getLinkedOfferObjectIds()
    {
        return $this->linkedOfferObjectIds;
    }
}