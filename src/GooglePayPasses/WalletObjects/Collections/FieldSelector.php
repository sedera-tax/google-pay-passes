<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\FieldReference;

class FieldSelector extends Collection
{
    protected $collection_key = 'fields';
    protected $internal_gapi_mappings = [];
    protected $fieldsType = FieldReference::class;
    protected $fieldsDataType = 'array';
    /**
     * @var array|mixed|null
     */
    private $fields;


    public function setFields($fields)
    {
        $this->fields = $fields;
    }
    public function getFields()
    {
        return $this->fields;
    }
}