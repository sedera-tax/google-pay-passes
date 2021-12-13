<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;

class ModifyLinkedOfferObjects extends Collection
{
    protected $collection_key = 'removeLinkedOfferObjectIds';
    protected $internal_gapi_mappings = array(
    );
    public $addLinkedOfferObjectIds;
    public $removeLinkedOfferObjectIds;


    public function setAddLinkedOfferObjectIds($addLinkedOfferObjectIds)
    {
        $this->addLinkedOfferObjectIds = $addLinkedOfferObjectIds;
    }
    public function getAddLinkedOfferObjectIds()
    {
        return $this->addLinkedOfferObjectIds;
    }
    public function setRemoveLinkedOfferObjectIds($removeLinkedOfferObjectIds)
    {
        $this->removeLinkedOfferObjectIds = $removeLinkedOfferObjectIds;
    }
    public function getRemoveLinkedOfferObjectIds()
    {
        return $this->removeLinkedOfferObjectIds;
    }
}