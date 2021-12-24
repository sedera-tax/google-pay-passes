<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;

class InfoModuleData extends Collection
{
    protected $collection_key = 'labelValueRows';
    protected $internal_gapi_mappings = [];
    protected $labelValueRowsType = LabelValueRow::class;
    protected $labelValueRowsDataType = 'array';
    public $showLastUpdateTime;
    /**
     * @var array|LabelValueRow|mixed|null
     */
    private $labelValueRows;


    public function setLabelValueRows($labelValueRows)
    {
        $this->labelValueRows = $labelValueRows;
    }
    public function getLabelValueRows()
    {
        return $this->labelValueRows;
    }
    public function setShowLastUpdateTime($showLastUpdateTime)
    {
        $this->showLastUpdateTime = $showLastUpdateTime;
    }
    public function getShowLastUpdateTime()
    {
        return $this->showLastUpdateTime;
    }
}