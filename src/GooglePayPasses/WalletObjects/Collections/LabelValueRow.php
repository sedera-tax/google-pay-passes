<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\LabelValue;

class LabelValueRow extends Collection
{
    protected $collection_key = 'columns';
    protected $internal_gapi_mappings = [];
    protected $columnsType = LabelValue::class;
    protected $columnsDataType = 'array';
    /**
     * @var array|mixed|null
     */
    private $columns;


    public function setColumns($columns)
    {
        $this->columns = $columns;
    }
    public function getColumns()
    {
        return $this->columns;
    }
}