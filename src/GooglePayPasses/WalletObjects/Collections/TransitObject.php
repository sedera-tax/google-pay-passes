<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\AppLinkData;
use GooglePayPasses\WalletObjects\Models\Barcode;
use GooglePayPasses\WalletObjects\Models\ImageModuleData;
use GooglePayPasses\WalletObjects\Models\LatLongPoint;
use GooglePayPasses\WalletObjects\Models\Message;
use GooglePayPasses\WalletObjects\Models\PurchaseDetails;
use GooglePayPasses\WalletObjects\Models\TextModuleData;
use GooglePayPasses\WalletObjects\Models\TicketRestrictions;
use GooglePayPasses\WalletObjects\Models\TimeInterval;

class TransitObject extends Collection
{
    protected $collection_key = 'ticketLegs';
    protected $internal_gapi_mappings = [];
    protected $appLinkDataType = AppLinkData::class;
    protected $appLinkDataDataType = '';
    protected $barcodeType = Barcode::class;
    protected $barcodeDataType = '';
    public $classId;
    protected $classReferenceType = TransitClass::class;
    protected $classReferenceDataType = '';
    public $concessionCategory;
    protected $customConcessionCategoryType = LocalizedString::class;
    protected $customConcessionCategoryDataType = '';
    protected $customTicketStatusType = LocalizedString::class;
    protected $customTicketStatusDataType = '';
    public $disableExpirationNotification;
    public $hasLinkedDevice;
    public $hasUsers;
    public $hexBackgroundColor;
    public $id;
    protected $imageModulesDataType = ImageModuleData::class;
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = InfoModuleData::class;
    protected $infoModuleDataDataType = '';
    protected $linksModuleDataType = LinksModuleData::class;
    protected $linksModuleDataDataType = '';
    protected $locationsType = LatLongPoint::class;
    protected $locationsDataType = 'array';
    protected $messagesType = Message::class;
    protected $messagesDataType = 'array';
    public $passengerNames;
    public $passengerType;
    protected $purchaseDetailsType = PurchaseDetails::class;
    protected $purchaseDetailsDataType = '';
    public $smartTapRedemptionValue;
    public $state;
    protected $textModulesDataType = TextModuleData::class;
    protected $textModulesDataDataType = 'array';
    protected $ticketLegType = TicketLeg::class;
    protected $ticketLegDataType = '';
    protected $ticketLegsType = TicketLeg::class;
    protected $ticketLegsDataType = 'array';
    public $ticketNumber;
    protected $ticketRestrictionsType = TicketRestrictions::class;
    protected $ticketRestrictionsDataType = '';
    public $ticketStatus;
    public $tripId;
    public $tripType;
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
     * @var array|TransitClass|mixed|null
     */
    private $classReference;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customConcessionCategory;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customTicketStatus;
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
     * @var array|LatLongPoint|mixed|null
     */
    private $locations;
    /**
     * @var array|Message|mixed|null
     */
    private $messages;
    /**
     * @var array|PurchaseDetails|mixed|null
     */
    private $purchaseDetails;
    /**
     * @var array|TextModuleData|mixed|null
     */
    private $textModulesData;
    /**
     * @var array|TicketLeg|mixed|null
     */
    private $ticketLeg;
    /**
     * @var array|TicketLeg|mixed|null
     */
    private $ticketLegs;
    /**
     * @var array|TicketRestrictions|mixed|null
     */
    private $ticketRestrictions;
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
    public function setClassReference(TransitClass $classReference)
    {
        $this->classReference = $classReference;
    }
    public function getClassReference()
    {
        return $this->classReference;
    }
    public function setConcessionCategory($concessionCategory)
    {
        $this->concessionCategory = $concessionCategory;
    }
    public function getConcessionCategory()
    {
        return $this->concessionCategory;
    }
    public function setCustomConcessionCategory(LocalizedString $customConcessionCategory)
    {
        $this->customConcessionCategory = $customConcessionCategory;
    }
    public function getCustomConcessionCategory()
    {
        return $this->customConcessionCategory;
    }
    public function setCustomTicketStatus(LocalizedString $customTicketStatus)
    {
        $this->customTicketStatus = $customTicketStatus;
    }
    public function getCustomTicketStatus()
    {
        return $this->customTicketStatus;
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
    public function setPassengerNames($passengerNames)
    {
        $this->passengerNames = $passengerNames;
    }
    public function getPassengerNames()
    {
        return $this->passengerNames;
    }
    public function setPassengerType($passengerType)
    {
        $this->passengerType = $passengerType;
    }
    public function getPassengerType()
    {
        return $this->passengerType;
    }
    public function setPurchaseDetails(PurchaseDetails $purchaseDetails)
    {
        $this->purchaseDetails = $purchaseDetails;
    }
    public function getPurchaseDetails()
    {
        return $this->purchaseDetails;
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
    public function setTicketLeg(TicketLeg $ticketLeg)
    {
        $this->ticketLeg = $ticketLeg;
    }
    public function getTicketLeg()
    {
        return $this->ticketLeg;
    }
    public function setTicketLegs($ticketLegs)
    {
        $this->ticketLegs = $ticketLegs;
    }
    public function getTicketLegs()
    {
        return $this->ticketLegs;
    }
    public function setTicketNumber($ticketNumber)
    {
        $this->ticketNumber = $ticketNumber;
    }
    public function getTicketNumber()
    {
        return $this->ticketNumber;
    }
    public function setTicketRestrictions(TicketRestrictions $ticketRestrictions)
    {
        $this->ticketRestrictions = $ticketRestrictions;
    }
    public function getTicketRestrictions()
    {
        return $this->ticketRestrictions;
    }
    public function setTicketStatus($ticketStatus)
    {
        $this->ticketStatus = $ticketStatus;
    }
    public function getTicketStatus()
    {
        return $this->ticketStatus;
    }
    public function setTripId($tripId)
    {
        $this->tripId = $tripId;
    }
    public function getTripId()
    {
        return $this->tripId;
    }
    public function setTripType($tripType)
    {
        $this->tripType = $tripType;
    }
    public function getTripType()
    {
        return $this->tripType;
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