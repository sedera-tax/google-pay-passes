<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class EventDateTime extends Model
{
    protected $internal_gapi_mappings = [];
    protected $customDoorsOpenLabelType = LocalizedString::class;
    protected $customDoorsOpenLabelDataType = '';
    public $doorsOpen;
    public $doorsOpenLabel;
    public $end;
    public $kind;
    public $start;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customDoorsOpenLabel;


    public function setCustomDoorsOpenLabel(LocalizedString $customDoorsOpenLabel)
    {
        $this->customDoorsOpenLabel = $customDoorsOpenLabel;
    }
    public function getCustomDoorsOpenLabel()
    {
        return $this->customDoorsOpenLabel;
    }
    public function setDoorsOpen($doorsOpen)
    {
        $this->doorsOpen = $doorsOpen;
    }
    public function getDoorsOpen()
    {
        return $this->doorsOpen;
    }
    public function setDoorsOpenLabel($doorsOpenLabel)
    {
        $this->doorsOpenLabel = $doorsOpenLabel;
    }
    public function getDoorsOpenLabel()
    {
        return $this->doorsOpenLabel;
    }
    public function setEnd($end)
    {
        $this->end = $end;
    }
    public function getEnd()
    {
        return $this->end;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setStart($start)
    {
        $this->start = $start;
    }
    public function getStart()
    {
        return $this->start;
    }
}