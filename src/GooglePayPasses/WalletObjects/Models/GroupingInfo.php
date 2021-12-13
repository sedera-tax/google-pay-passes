<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class GroupingInfo extends Model
{
    protected $internal_gapi_mappings = [];
    public $sortIndex;


    public function setSortIndex($sortIndex)
    {
        $this->sortIndex = $sortIndex;
    }
    public function getSortIndex()
    {
        return $this->sortIndex;
    }
}