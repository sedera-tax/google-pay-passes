<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class EventSeat extends Model
{
    protected $internal_gapi_mappings = [];
    protected $gateType = LocalizedString::class;
    protected $gateDataType = '';
    public $kind;
    protected $rowType = LocalizedString::class;
    protected $rowDataType = '';
    protected $seatType = LocalizedString::class;
    protected $seatDataType = '';
    protected $sectionType = LocalizedString::class;
    protected $sectionDataType = '';
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $gate;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $row;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $seat;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $section;


    public function setGate(LocalizedString $gate)
    {
        $this->gate = $gate;
    }
    public function getGate()
    {
        return $this->gate;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setRow(LocalizedString $row)
    {
        $this->row = $row;
    }
    public function getRow()
    {
        return $this->row;
    }
    public function setSeat(LocalizedString $seat)
    {
        $this->seat = $seat;
    }
    public function getSeat()
    {
        return $this->seat;
    }
    public function setSection(LocalizedString $section)
    {
        $this->section = $section;
    }
    public function getSection()
    {
        return $this->section;
    }
}