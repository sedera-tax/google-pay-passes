<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\AppLinkData;
use GooglePayPasses\WalletObjects\Models\Barcode;
use GooglePayPasses\WalletObjects\Models\EventReservationInfo;
use GooglePayPasses\WalletObjects\Models\EventSeat;
use GooglePayPasses\WalletObjects\Models\GroupingInfo;
use GooglePayPasses\WalletObjects\Models\ImageModuleData;
use GooglePayPasses\WalletObjects\Models\LatLongPoint;
use GooglePayPasses\WalletObjects\Models\Message;
use GooglePayPasses\WalletObjects\Models\Money;
use GooglePayPasses\WalletObjects\Models\TextModuleData;
use GooglePayPasses\WalletObjects\Models\TimeInterval;

class EventTicketObject extends Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = [];
    protected $appLinkDataType = AppLinkData::class;
    protected $appLinkDataDataType = '';
    protected $barcodeType = Barcode::class;
    protected $barcodeDataType = '';
    public $classId;
    protected $classReferenceType = EventTicketClass::class;
    protected $classReferenceDataType = '';
    public $disableExpirationNotification;
    protected $faceValueType = Money::class;
    protected $faceValueDataType = '';
    protected $groupingInfoType = GroupingInfo::class;
    protected $groupingInfoDataType = '';
    public $hasLinkedDevice;
    public $hasUsers;
    public $id;
    protected $imageModulesDataType = ImageModuleData::class;
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = InfoModuleData::class;
    protected $infoModuleDataDataType = '';
    public $kind;
    public $linkedOfferIds;
    protected $linksModuleDataType = LinksModuleData::class;
    protected $linksModuleDataDataType = '';
    protected $locationsType = LatLongPoint::class;
    protected $locationsDataType = 'array';
    protected $messagesType = Message::class;
    protected $messagesDataType = 'array';
    protected $reservationInfoType = EventReservationInfo::class;
    protected $reservationInfoDataType = '';
    protected $seatInfoType = EventSeat::class;
    protected $seatInfoDataType = '';
    public $smartTapRedemptionValue;
    public $state;
    protected $textModulesDataType = TextModuleData::class;
    protected $textModulesDataDataType = 'array';
    public $ticketHolderName;
    public $ticketNumber;
    protected $ticketTypeType = LocalizedString::class;
    protected $ticketTypeDataType = '';
    protected $validTimeIntervalType = TimeInterval::class;
    protected $validTimeIntervalDataType = '';
    public $version;
    /**
     * @var array|AppLinkData|mixed|null
     */
    private $appLinkData;
    /**
     * @var array|Barcode|mixed|null
     */
    private $barcode;
    /**
     * @var array|EventTicketClass|mixed|null
     */
    private $classReference;
    /**
     * @var array|Money|mixed|null
     */
    private $faceValue;
    /**
     * @var array|GroupingInfo|mixed|null
     */
    private $groupingInfo;
    /**
     * @var array|ImageModuleData|mixed|null
     */
    private $imageModulesData;
    /**
     * @var array|InfoModuleData|mixed|null
     */
    private $infoModuleData;
    /**
     * @var array|LinksModuleData|mixed|null
     */
    private $linksModuleData;
    /**
     * @var array|EventReservationInfo|mixed|null
     */
    private $reservationInfo;
    /**
     * @var array|mixed|null
     */
    private $messages;
    /**
     * @var array|mixed|null
     */
    private $locations;
    /**
     * @var array|EventSeat|mixed|null
     */
    private $seatInfo;
    /**
     * @var array|TextModuleData|mixed|null
     */
    private $textModulesData;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $ticketType;
    /**
     * @var array|TimeInterval|mixed|null
     */
    private $validTimeInterval;


    public function setAppLinkData(AppLinkData $appLinkData)
    {
        $this->appLinkData = $appLinkData;
    }
    public function getAppLinkData()
    {
        return $this->appLinkData;
    }
    public function setBarcode(Barcode $barcode)
    {
        $this->barcode = $barcode;
    }
    public function getBarcode()
    {
        return $this->barcode;
    }
    public function setClassId($classId)
    {
        $this->classId = $classId;
    }
    public function getClassId()
    {
        return $this->classId;
    }
    public function setClassReference(EventTicketClass $classReference)
    {
        $this->classReference = $classReference;
    }
    public function getClassReference()
    {
        return $this->classReference;
    }
    public function setDisableExpirationNotification($disableExpirationNotification)
    {
        $this->disableExpirationNotification = $disableExpirationNotification;
    }
    public function getDisableExpirationNotification()
    {
        return $this->disableExpirationNotification;
    }
    public function setFaceValue(Money $faceValue)
    {
        $this->faceValue = $faceValue;
    }
    public function getFaceValue()
    {
        return $this->faceValue;
    }
    public function setGroupingInfo(GroupingInfo $groupingInfo)
    {
        $this->groupingInfo = $groupingInfo;
    }
    public function getGroupingInfo()
    {
        return $this->groupingInfo;
    }
    public function setHasLinkedDevice($hasLinkedDevice)
    {
        $this->hasLinkedDevice = $hasLinkedDevice;
    }
    public function getHasLinkedDevice()
    {
        return $this->hasLinkedDevice;
    }
    public function setHasUsers($hasUsers)
    {
        $this->hasUsers = $hasUsers;
    }
    public function getHasUsers()
    {
        return $this->hasUsers;
    }
    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }
    public function setImageModulesData(ImageModuleData $imageModulesData)
    {
        $this->imageModulesData = $imageModulesData;
    }
    public function getImageModulesData()
    {
        return $this->imageModulesData;
    }
    public function setInfoModuleData(InfoModuleData $infoModuleData)
    {
        $this->infoModuleData = $infoModuleData;
    }
    public function getInfoModuleData()
    {
        return $this->infoModuleData;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setLinkedOfferIds($linkedOfferIds)
    {
        $this->linkedOfferIds = $linkedOfferIds;
    }
    public function getLinkedOfferIds()
    {
        return $this->linkedOfferIds;
    }
    public function setLinksModuleData(LinksModuleData $linksModuleData)
    {
        $this->linksModuleData = $linksModuleData;
    }
    public function getLinksModuleData()
    {
        return $this->linksModuleData;
    }
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }
    public function getLocations()
    {
        return $this->locations;
    }
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }
    public function getMessages()
    {
        return $this->messages;
    }
    public function setReservationInfo(EventReservationInfo $reservationInfo)
    {
        $this->reservationInfo = $reservationInfo;
    }
    public function getReservationInfo()
    {
        return $this->reservationInfo;
    }
    public function setSeatInfo(EventSeat $seatInfo)
    {
        $this->seatInfo = $seatInfo;
    }
    public function getSeatInfo()
    {
        return $this->seatInfo;
    }
    public function setSmartTapRedemptionValue($smartTapRedemptionValue)
    {
        $this->smartTapRedemptionValue = $smartTapRedemptionValue;
    }
    public function getSmartTapRedemptionValue()
    {
        return $this->smartTapRedemptionValue;
    }
    public function setState($state)
    {
        $this->state = $state;
    }
    public function getState()
    {
        return $this->state;
    }
    public function setTextModulesData(TextModuleData $textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }
    public function getTextModulesData()
    {
        return $this->textModulesData;
    }
    public function setTicketHolderName($ticketHolderName)
    {
        $this->ticketHolderName = $ticketHolderName;
    }
    public function getTicketHolderName()
    {
        return $this->ticketHolderName;
    }
    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;
    }
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }
    public function setTicketType(LocalizedString $ticketType)
    {
        $this->ticketType = $ticketType;
    }
    public function getTicketType()
    {
        return $this->ticketType;
    }
    public function setValidTimeInterval(TimeInterval $validTimeInterval)
    {
        $this->validTimeInterval = $validTimeInterval;
    }
    public function getValidTimeInterval()
    {
        return $this->validTimeInterval;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
}