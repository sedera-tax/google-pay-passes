<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\AppLinkData;
use GooglePayPasses\WalletObjects\Models\Barcode;
use GooglePayPasses\WalletObjects\Models\BoardingAndSeatingInfo;
use GooglePayPasses\WalletObjects\Models\Image;
use GooglePayPasses\WalletObjects\Models\ImageModuleData;
use GooglePayPasses\WalletObjects\Models\LatLongPoint;
use GooglePayPasses\WalletObjects\Models\Message;
use GooglePayPasses\WalletObjects\Models\ReservationInfo;
use GooglePayPasses\WalletObjects\Models\TextModuleData;
use GooglePayPasses\WalletObjects\Models\TimeInterval;

class FlightObject extends Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = [];
    protected $appLinkDataType = AppLinkData::class;
    protected $appLinkDataDataType = '';
    protected $barcodeType = Barcode::class;
    protected $barcodeDataType = '';
    protected $boardingAndSeatingInfoType = BoardingAndSeatingInfo::class;
    protected $boardingAndSeatingInfoDataType = '';
    public $classId;
    protected $classReferenceType = FlightClass::class;
    protected $classReferenceDataType = '';
    public $disableExpirationNotification;
    public $hasLinkedDevice;
    public $hasUsers;
    public $hexBackgroundColor;
    public $id;
    protected $imageModulesDataType = ImageModuleData::class;
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = InfoModuleData::class;
    protected $infoModuleDataDataType = '';
    public $kind;
    protected $linksModuleDataType = LinksModuleData::class;
    protected $linksModuleDataDataType = '';
    protected $locationsType = LatLongPoint::class;
    protected $locationsDataType = 'array';
    protected $messagesType = Message::class;
    protected $messagesDataType = 'array';
    public $passengerName;
    protected $reservationInfoType = ReservationInfo::class;
    protected $reservationInfoDataType = '';
    protected $securityProgramLogoType = Image::class;
    protected $securityProgramLogoDataType = '';
    public $smartTapRedemptionValue;
    public $state;
    protected $textModulesDataType = TextModuleData::class;
    protected $textModulesDataDataType = 'array';
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
     * @var array|BoardingAndSeatingInfo|mixed|null
     */
    private $boardingAndSeatingInfo;
    /**
     * @var array|FlightClass|mixed|null
     */
    private $classReference;
    /**
     * @var array|InfoModuleData|mixed|null
     */
    private $infoModuleData;
    /**
     * @var array|ImageModuleData|mixed|null
     */
    private $imageModulesData;
    /**
     * @var array|LinksModuleData|mixed|null
     */
    private $linksModuleData;
    /**
     * @var array|Message|mixed|null
     */
    private $messages;
    /**
     * @var array|TextModuleData|mixed|null
     */
    private $textModulesData;
    /**
     * @var array|TimeInterval|mixed|null
     */
    private $validTimeInterval;
    /**
     * @var array|Image|mixed|null
     */
    private $securityProgramLogo;
    /**
     * @var array|LatLongPoint|mixed|null
     */
    private $locations;
    /**
     * @var array|ReservationInfo|mixed|null
     */
    private $reservationInfo;


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
    public function setBoardingAndSeatingInfo(BoardingAndSeatingInfo $boardingAndSeatingInfo)
    {
        $this->boardingAndSeatingInfo = $boardingAndSeatingInfo;
    }
    public function getBoardingAndSeatingInfo()
    {
        return $this->boardingAndSeatingInfo;
    }
    public function setClassId($classId)
    {
        $this->classId = $classId;
    }
    public function getClassId()
    {
        return $this->classId;
    }
    public function setClassReference(FlightClass $classReference)
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
    public function setHexBackgroundColor($hexBackgroundColor)
    {
        $this->hexBackgroundColor = $hexBackgroundColor;
    }
    public function getHexBackgroundColor()
    {
        return $this->hexBackgroundColor;
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
    public function setLinksModuleData(LinksModuleData $linksModuleData)
    {
        $this->linksModuleData = $linksModuleData;
    }
    public function getLinksModuleData()
    {
        return $this->linksModuleData;
    }
    public function setLocations(LatLongPoint $locations)
    {
        $this->locations = $locations;
    }
    public function getLocations()
    {
        return $this->locations;
    }
    public function setMessages(Message $messages)
    {
        $this->messages = $messages;
    }
    public function getMessages()
    {
        return $this->messages;
    }
    public function setPassengerName($passengerName)
    {
        $this->passengerName = $passengerName;
    }
    public function getPassengerName()
    {
        return $this->passengerName;
    }
    public function setReservationInfo(ReservationInfo $reservationInfo)
    {
        $this->reservationInfo = $reservationInfo;
    }
    public function getReservationInfo()
    {
        return $this->reservationInfo;
    }
    public function setSecurityProgramLogo(Image $securityProgramLogo)
    {
        $this->securityProgramLogo = $securityProgramLogo;
    }
    public function getSecurityProgramLogo()
    {
        return $this->securityProgramLogo;
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