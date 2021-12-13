<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\CallbackOptions;
use GooglePayPasses\WalletObjects\Models\ClassTemplateInfo;
use GooglePayPasses\WalletObjects\Models\EventDateTime;
use GooglePayPasses\WalletObjects\Models\EventVenue;
use GooglePayPasses\WalletObjects\Models\Image;
use GooglePayPasses\WalletObjects\Models\ImageModuleData;
use GooglePayPasses\WalletObjects\Models\LatLongPoint;
use GooglePayPasses\WalletObjects\Models\Message;
use GooglePayPasses\WalletObjects\Models\Review;
use GooglePayPasses\WalletObjects\Models\TextModuleData;
use GooglePayPasses\WalletObjects\Models\Uri;

class EventTicketClass extends Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = [];
    public $allowMultipleUsersPerObject;
    protected $callbackOptionsType = CallbackOptions::class;
    protected $callbackOptionsDataType = '';
    protected $classTemplateInfoType = ClassTemplateInfo::class;
    protected $classTemplateInfoDataType = '';
    public $confirmationCodeLabel;
    public $countryCode;
    protected $customConfirmationCodeLabelType = LocalizedString::class;
    protected $customConfirmationCodeLabelDataType = '';
    protected $customGateLabelType = LocalizedString::class;
    protected $customGateLabelDataType = '';
    protected $customRowLabelType = LocalizedString::class;
    protected $customRowLabelDataType = '';
    protected $customSeatLabelType = LocalizedString::class;
    protected $customSeatLabelDataType = '';
    protected $customSectionLabelType = LocalizedString::class;
    protected $customSectionLabelDataType = '';
    protected $dateTimeType = EventDateTime::class;
    protected $dateTimeDataType = '';
    public $enableSmartTap;
    public $eventId;
    protected $eventNameType = LocalizedString::class;
    protected $eventNameDataType = '';
    protected $finePrintType = LocalizedString::class;
    protected $finePrintDataType = '';
    public $gateLabel;
    protected $heroImageType = Image::class;
    protected $heroImageDataType = '';
    public $hexBackgroundColor;
    protected $homepageUriType = Uri::class;
    protected $homepageUriDataType = '';
    public $id;
    protected $imageModulesDataType = ImageModuleData::class;
    protected $imageModulesDataDataType = 'array';
    protected $infoModuleDataType = InfoModuleData::class;
    protected $infoModuleDataDataType = '';
    public $issuerName;
    public $kind;
    protected $linksModuleDataType = LinksModuleData::class;
    protected $linksModuleDataDataType = '';
    protected $localizedIssuerNameType = LocalizedString::class;
    protected $localizedIssuerNameDataType = '';
    protected $locationsType = LatLongPoint::class;
    protected $locationsDataType = 'array';
    protected $logoType = Image::class;
    protected $logoDataType = '';
    protected $messagesType = Message::class;
    protected $messagesDataType = 'array';
    public $multipleDevicesAndHoldersAllowedStatus;
    public $redemptionIssuers;
    protected $reviewType = Review::class;
    protected $reviewDataType = '';
    public $reviewStatus;
    public $rowLabel;
    public $seatLabel;
    public $sectionLabel;
    protected $textModulesDataType = TextModuleData::class;
    protected $textModulesDataDataType = 'array';
    protected $venueType = EventVenue::class;
    protected $venueDataType = '';
    public $version;
    protected $wordMarkType = Image::class;
    protected $wordMarkDataType = '';
    /**
     * @var array|CallbackOptions|mixed|null
     */
    private $callbackOptions;
    /**
     * @var array|ClassTemplateInfo|mixed|null
     */
    private $classTemplateInfo;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customConfirmationCodeLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customGateLabel;
    /**
     * @var array|mixed|null
     */
    private $customRowLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customSeatLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customSectionLabel;
    /**
     * @var array|EventDateTime|mixed|null
     */
    private $dateTime;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $eventName;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $finePrint;
    /**
     * @var array|Image|mixed|null
     */
    private $heroImage;
    /**
     * @var array|Uri|mixed|null
     */
    private $homepageUri;
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
     * @var array|LocalizedString|mixed|null
     */
    private $localizedIssuerName;
    /**
     * @var array|mixed|null
     */
    private $locations;
    /**
     * @var array|Image|mixed|null
     */
    private $logo;
    /**
     * @var array|Message|mixed|null
     */
    private $messages;
    /**
     * @var array|Review|mixed|null
     */
    private $review;
    /**
     * @var array|mixed|null
     */
    private $textModulesData;
    /**
     * @var array|EventVenue|mixed|null
     */
    private $venue;
    /**
     * @var array|Image|mixed|null
     */
    private $wordMark;


    public function setAllowMultipleUsersPerObject($allowMultipleUsersPerObject)
    {
        $this->allowMultipleUsersPerObject = $allowMultipleUsersPerObject;
    }
    public function getAllowMultipleUsersPerObject()
    {
        return $this->allowMultipleUsersPerObject;
    }
    public function setCallbackOptions(CallbackOptions $callbackOptions)
    {
        $this->callbackOptions = $callbackOptions;
    }
    public function getCallbackOptions()
    {
        return $this->callbackOptions;
    }
    public function setClassTemplateInfo(ClassTemplateInfo $classTemplateInfo)
    {
        $this->classTemplateInfo = $classTemplateInfo;
    }
    public function getClassTemplateInfo()
    {
        return $this->classTemplateInfo;
    }
    public function setConfirmationCodeLabel($confirmationCodeLabel)
    {
        $this->confirmationCodeLabel = $confirmationCodeLabel;
    }
    public function getConfirmationCodeLabel()
    {
        return $this->confirmationCodeLabel;
    }
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    public function setCustomConfirmationCodeLabel(LocalizedString $customConfirmationCodeLabel)
    {
        $this->customConfirmationCodeLabel = $customConfirmationCodeLabel;
    }
    public function getCustomConfirmationCodeLabel()
    {
        return $this->customConfirmationCodeLabel;
    }
    public function setCustomGateLabel(LocalizedString $customGateLabel)
    {
        $this->customGateLabel = $customGateLabel;
    }
    public function getCustomGateLabel()
    {
        return $this->customGateLabel;
    }
    public function setCustomRowLabel(LocalizedString $customRowLabel)
    {
        $this->customRowLabel = $customRowLabel;
    }
    public function getCustomRowLabel()
    {
        return $this->customRowLabel;
    }
    public function setCustomSeatLabel(LocalizedString $customSeatLabel)
    {
        $this->customSeatLabel = $customSeatLabel;
    }
    public function getCustomSeatLabel()
    {
        return $this->customSeatLabel;
    }
    public function setCustomSectionLabel(LocalizedString $customSectionLabel)
    {
        $this->customSectionLabel = $customSectionLabel;
    }
    public function getCustomSectionLabel()
    {
        return $this->customSectionLabel;
    }
    public function setDateTime(EventDateTime $dateTime)
    {
        $this->dateTime = $dateTime;
    }
    public function getDateTime()
    {
        return $this->dateTime;
    }
    public function setEnableSmartTap($enableSmartTap)
    {
        $this->enableSmartTap = $enableSmartTap;
    }
    public function getEnableSmartTap()
    {
        return $this->enableSmartTap;
    }
    public function setEventId($eventId)
    {
        $this->eventId = $eventId;
    }
    public function getEventId()
    {
        return $this->eventId;
    }
    public function setEventName(LocalizedString $eventName)
    {
        $this->eventName = $eventName;
    }
    public function getEventName()
    {
        return $this->eventName;
    }
    public function setFinePrint(LocalizedString $finePrint)
    {
        $this->finePrint = $finePrint;
    }
    public function getFinePrint()
    {
        return $this->finePrint;
    }
    public function setGateLabel($gateLabel)
    {
        $this->gateLabel = $gateLabel;
    }
    public function getGateLabel()
    {
        return $this->gateLabel;
    }
    public function setHeroImage(Image $heroImage)
    {
        $this->heroImage = $heroImage;
    }
    public function getHeroImage()
    {
        return $this->heroImage;
    }
    public function setHexBackgroundColor($hexBackgroundColor)
    {
        $this->hexBackgroundColor = $hexBackgroundColor;
    }
    public function getHexBackgroundColor()
    {
        return $this->hexBackgroundColor;
    }
    public function setHomepageUri(Uri $homepageUri)
    {
        $this->homepageUri = $homepageUri;
    }
    public function getHomepageUri()
    {
        return $this->homepageUri;
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
    public function setIssuerName($issuerName)
    {
        $this->issuerName = $issuerName;
    }
    public function getIssuerName()
    {
        return $this->issuerName;
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
    public function setLocalizedIssuerName(LocalizedString $localizedIssuerName)
    {
        $this->localizedIssuerName = $localizedIssuerName;
    }
    public function getLocalizedIssuerName()
    {
        return $this->localizedIssuerName;
    }
    public function setLocations($locations)
    {
        $this->locations = $locations;
    }
    public function getLocations()
    {
        return $this->locations;
    }
    public function setLogo(Image $logo)
    {
        $this->logo = $logo;
    }
    public function getLogo()
    {
        return $this->logo;
    }
    public function setMessages(Message $messages)
    {
        $this->messages = $messages;
    }
    public function getMessages()
    {
        return $this->messages;
    }
    public function setMultipleDevicesAndHoldersAllowedStatus($multipleDevicesAndHoldersAllowedStatus)
    {
        $this->multipleDevicesAndHoldersAllowedStatus = $multipleDevicesAndHoldersAllowedStatus;
    }
    public function getMultipleDevicesAndHoldersAllowedStatus()
    {
        return $this->multipleDevicesAndHoldersAllowedStatus;
    }
    public function setRedemptionIssuers($redemptionIssuers)
    {
        $this->redemptionIssuers = $redemptionIssuers;
    }
    public function getRedemptionIssuers()
    {
        return $this->redemptionIssuers;
    }
    public function setReview(Review $review)
    {
        $this->review = $review;
    }
    public function getReview()
    {
        return $this->review;
    }
    public function setReviewStatus($reviewStatus)
    {
        $this->reviewStatus = $reviewStatus;
    }
    public function getReviewStatus()
    {
        return $this->reviewStatus;
    }
    public function setRowLabel($rowLabel)
    {
        $this->rowLabel = $rowLabel;
    }
    public function getRowLabel()
    {
        return $this->rowLabel;
    }
    public function setSeatLabel($seatLabel)
    {
        $this->seatLabel = $seatLabel;
    }
    public function getSeatLabel()
    {
        return $this->seatLabel;
    }
    public function setSectionLabel($sectionLabel)
    {
        $this->sectionLabel = $sectionLabel;
    }
    public function getSectionLabel()
    {
        return $this->sectionLabel;
    }
    public function setTextModulesData($textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }
    public function getTextModulesData()
    {
        return $this->textModulesData;
    }
    public function setVenue(EventVenue $venue)
    {
        $this->venue = $venue;
    }
    public function getVenue()
    {
        return $this->venue;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
    public function setWordMark(Image $wordMark)
    {
        $this->wordMark = $wordMark;
    }
    public function getWordMark()
    {
        return $this->wordMark;
    }
}