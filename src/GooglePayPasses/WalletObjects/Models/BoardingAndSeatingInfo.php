<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class BoardingAndSeatingInfo extends Model
{
    protected $internal_gapi_mappings = array(
    );
    public $boardingDoor;
    public $boardingGroup;
    public $boardingPosition;
    protected $boardingPrivilegeImageType = Image::class;
    protected $boardingPrivilegeImageDataType = '';
    public $kind;
    protected $seatAssignmentType = LocalizedString::class;
    protected $seatAssignmentDataType = '';
    public $seatClass;
    public $seatNumber;
    public $sequenceNumber;
    /**
     * @var array|Image|mixed|null
     */
    private $boardingPrivilegeImage;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $seatAssignment;


    public function setBoardingDoor($boardingDoor)
    {
        $this->boardingDoor = $boardingDoor;
    }
    public function getBoardingDoor()
    {
        return $this->boardingDoor;
    }
    public function setBoardingGroup($boardingGroup)
    {
        $this->boardingGroup = $boardingGroup;
    }
    public function getBoardingGroup()
    {
        return $this->boardingGroup;
    }
    public function setBoardingPosition($boardingPosition)
    {
        $this->boardingPosition = $boardingPosition;
    }
    public function getBoardingPosition()
    {
        return $this->boardingPosition;
    }
    public function setBoardingPrivilegeImage(Image $boardingPrivilegeImage)
    {
        $this->boardingPrivilegeImage = $boardingPrivilegeImage;
    }
    public function getBoardingPrivilegeImage()
    {
        return $this->boardingPrivilegeImage;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setSeatAssignment(LocalizedString $seatAssignment)
    {
        $this->seatAssignment = $seatAssignment;
    }
    public function getSeatAssignment()
    {
        return $this->seatAssignment;
    }
    public function setSeatClass($seatClass)
    {
        $this->seatClass = $seatClass;
    }
    public function getSeatClass()
    {
        return $this->seatClass;
    }
    public function setSeatNumber($seatNumber)
    {
        $this->seatNumber = $seatNumber;
    }
    public function getSeatNumber()
    {
        return $this->seatNumber;
    }
    public function setSequenceNumber($sequenceNumber)
    {
        $this->sequenceNumber = $sequenceNumber;
    }
    public function getSequenceNumber()
    {
        return $this->sequenceNumber;
    }
}