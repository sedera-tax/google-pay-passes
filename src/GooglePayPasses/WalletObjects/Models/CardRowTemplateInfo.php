<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class CardRowTemplateInfo extends Model
{
    protected $internal_gapi_mappings = [];
    public $oneItem;
    protected $oneItemType = CardRowOneItem::class;
    protected $oneItemDataType = '';

    public $threeItems;
    protected $threeItemsType = CardRowThreeItems::class;
    protected $threeItemsDataType = '';

    public $twoItems;
    protected $twoItemsType = CardRowTwoItems::class;
    protected $twoItemsDataType = '';


    public function setOneItem(CardRowOneItem $oneItem)
    {
        $this->oneItem = $oneItem;
    }

    public function getOneItem()
    {
        return $this->oneItem;
    }

    public function setThreeItems(CardRowThreeItems $threeItems)
    {
        $this->threeItems = $threeItems;
    }

    public function getThreeItems()
    {
        return $this->threeItems;
    }

    public function setTwoItems(CardRowTwoItems $twoItems)
    {
        $this->twoItems = $twoItems;
    }

    public function getTwoItems()
    {
        return $this->twoItems;
    }
}