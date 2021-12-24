<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\AppLinkData;
use GooglePayPasses\WalletObjects\Models\Barcode;
use GooglePayPasses\WalletObjects\Models\ImageModuleData;
use GooglePayPasses\WalletObjects\Models\LatLongPoint;
use GooglePayPasses\WalletObjects\Models\LoyaltyPoints;
use GooglePayPasses\WalletObjects\Models\Message;
use GooglePayPasses\WalletObjects\Models\TextModuleData;
use GooglePayPasses\WalletObjects\Models\TimeInterval;

class LoyaltyObject extends Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = array(
    );
    public $accountId;
    public $accountName;
    protected $appLinkDataType = AppLinkData::class;
    protected $appLinkDataDataType = '';
    protected $barcodeType = Barcode::class;
    protected $barcodeDataType = '';
    public $classId;
    protected $classReferenceType = LoyaltyClass::class;
    protected $classReferenceDataType = '';
    public $disableExpirationNotification;
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
    protected $loyaltyPointsType = LoyaltyPoints::class;
    protected $loyaltyPointsDataType = '';
    protected $messagesType = Message::class;
    protected $messagesDataType = 'array';
    protected $secondaryLoyaltyPointsType = LoyaltyPoints::class;
    protected $secondaryLoyaltyPointsDataType = '';
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
     * @var array|LoyaltyClass|mixed|null
     */
    private $classReference;
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
     * @var array|LoyaltyPoints|mixed|null
     */
    private $loyaltyPoints;
    /**
     * @var array|LoyaltyPoints|mixed|null
     */
    private $secondaryLoyaltyPoints;
    /**
     * @var array|TextModuleData|mixed|null
     */
    private $textModulesData;
    /**
     * @var array|LatLongPoint|mixed|null
     */
    private $locations;
    /**
     * @var array|TimeInterval|mixed|null
     */
    private $validTimeInterval;
    /**
     * @var array|Message|mixed|null
     */
    private $messages;


    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;
    }
    public function getAccountId()
    {
        return $this->accountId;
    }
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
    }
    public function getAccountName()
    {
        return $this->accountName;
    }
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
    public function setClassReference(LoyaltyClass $classReference)
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
    public function setLoyaltyPoints(LoyaltyPoints $loyaltyPoints)
    {
        $this->loyaltyPoints = $loyaltyPoints;
    }
    public function getLoyaltyPoints()
    {
        return $this->loyaltyPoints;
    }
    public function setMessages($messages)
    {
        $this->messages = $messages;
    }
    public function getMessages()
    {
        return $this->messages;
    }
    public function setSecondaryLoyaltyPoints(LoyaltyPoints $secondaryLoyaltyPoints)
    {
        $this->secondaryLoyaltyPoints = $secondaryLoyaltyPoints;
    }
    public function getSecondaryLoyaltyPoints()
    {
        return $this->secondaryLoyaltyPoints;
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
    public function setTextModulesData($textModulesData)
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