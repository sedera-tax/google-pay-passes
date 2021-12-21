<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class TicketSeat extends Model
{
    protected $internal_gapi_mappings = [];
    public $coach;
    protected $customFareClassType = LocalizedString::class;
    protected $customFareClassDataType = '';
    public $fareClass;
    public $seat;
    protected $seatAssignmentType = LocalizedString::class;
    protected $seatAssignmentDataType = '';
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customFareClass;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $seatAssignment;


    public function setCoach($coach)
    {
        $this->coach = $coach;
    }
    public function getCoach()
    {
        return $this->coach;
    }
    public function setCustomFareClass(LocalizedString $customFareClass)
    {
        $this->customFareClass = $customFareClass;
    }
    public function getCustomFareClass()
    {
        return $this->customFareClass;
    }
    public function setFareClass($fareClass)
    {
        $this->fareClass = $fareClass;
    }
    public function getFareClass()
    {
        return $this->fareClass;
    }
    public function setSeat($seat)
    {
        $this->seat = $seat;
    }
    public function getSeat()
    {
        return $this->seat;
    }
    public function setSeatAssignment(LocalizedString $seatAssignment)
    {
        $this->seatAssignment = $seatAssignment;
    }
    public function getSeatAssignment()
    {
        return $this->seatAssignment;
    }
}