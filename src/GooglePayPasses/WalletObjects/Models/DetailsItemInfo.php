<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class DetailsItemInfo extends Model
{
    protected $internal_gapi_mappings = [];
    protected $itemType = TemplateItem::class;
    protected $itemDataType = '';
    /**
     * @var array|TemplateItem|mixed|null
     */
    private $item;


    public function setItem(TemplateItem $item)
    {
        $this->item = $item;
    }
    public function getItem()
    {
        return $this->item;
    }
}