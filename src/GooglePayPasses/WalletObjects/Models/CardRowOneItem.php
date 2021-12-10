<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class CardRowOneItem extends Model
{
    protected $internal_gapi_mappings = [];
    public $item;
    protected $itemType = TemplateItem::class;
    protected $itemDataType = '';


    public function setItem(TemplateItem $item)
    {
        $this->item = $item;
    }
    public function getItem()
    {
        return $this->item;
    }
}