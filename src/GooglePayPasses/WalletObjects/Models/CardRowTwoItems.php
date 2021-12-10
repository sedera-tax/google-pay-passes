<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class CardRowTwoItems extends Model
{
    protected $internal_gapi_mappings = [];
    public $endItem;
    protected $endItemType = TemplateItem::class;
    protected $endItemDataType = '';

    public $startItem;
    protected $startItemType = TemplateItem::class;
    protected $startItemDataType = '';


    public function setEndItem(TemplateItem $endItem)
    {
        $this->endItem = $endItem;
    }
    public function getEndItem()
    {
        return $this->endItem;
    }
    public function setStartItem(TemplateItem $startItem)
    {
        $this->startItem = $startItem;
    }
    public function getStartItem()
    {
        return $this->startItem;
    }
}