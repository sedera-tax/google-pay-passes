<?php


namespace GooglePayPasses\WalletObjects\Collections;


use Google\Collection;
use GooglePayPasses\WalletObjects\Models\CallbackOptions;
use GooglePayPasses\WalletObjects\Models\ClassTemplateInfo;
use GooglePayPasses\WalletObjects\Models\Image;
use GooglePayPasses\WalletObjects\Models\ImageModuleData;
use GooglePayPasses\WalletObjects\Models\LatLongPoint;
use GooglePayPasses\WalletObjects\Models\Message;
use GooglePayPasses\WalletObjects\Models\Review;
use GooglePayPasses\WalletObjects\Models\TextModuleData;
use GooglePayPasses\WalletObjects\Models\Uri;

class TransitClass extends Collection
{
    protected $collection_key = 'textModulesData';
    protected $internal_gapi_mappings = [];
    public $allowMultipleUsersPerObject;
    protected $callbackOptionsType = CallbackOptions::class;
    protected $callbackOptionsDataType = '';
    protected $classTemplateInfoType = ClassTemplateInfo::class;
    protected $classTemplateInfoDataType = '';
    public $countryCode;
    protected $customCarriageLabelType = LocalizedString::class;
    protected $customCarriageLabelDataType = '';
    protected $customCoachLabelType = LocalizedString::class;
    protected $customCoachLabelDataType = '';
    protected $customConcessionCategoryLabelType = LocalizedString::class;
    protected $customConcessionCategoryLabelDataType = '';
    protected $customConfirmationCodeLabelType = LocalizedString::class;
    protected $customConfirmationCodeLabelDataType = '';
    protected $customDiscountMessageLabelType = LocalizedString::class;
    protected $customDiscountMessageLabelDataType = '';
    protected $customFareClassLabelType = LocalizedString::class;
    protected $customFareClassLabelDataType = '';
    protected $customFareNameLabelType = LocalizedString::class;
    protected $customFareNameLabelDataType = '';
    protected $customOtherRestrictionsLabelType = LocalizedString::class;
    protected $customOtherRestrictionsLabelDataType = '';
    protected $customPlatformLabelType = LocalizedString::class;
    protected $customPlatformLabelDataType = '';
    protected $customPurchaseFaceValueLabelType = LocalizedString::class;
    protected $customPurchaseFaceValueLabelDataType = '';
    protected $customPurchasePriceLabelType = LocalizedString::class;
    protected $customPurchasePriceLabelDataType = '';
    protected $customPurchaseReceiptNumberLabelType = LocalizedString::class;
    protected $customPurchaseReceiptNumberLabelDataType = '';
    protected $customRouteRestrictionsDetailsLabelType = LocalizedString::class;
    protected $customRouteRestrictionsDetailsLabelDataType = '';
    protected $customRouteRestrictionsLabelType = LocalizedString::class;
    protected $customRouteRestrictionsLabelDataType = '';
    protected $customSeatLabelType = LocalizedString::class;
    protected $customSeatLabelDataType = '';
    protected $customTicketNumberLabelType = LocalizedString::class;
    protected $customTicketNumberLabelDataType = '';
    protected $customTimeRestrictionsLabelType = LocalizedString::class;
    protected $customTimeRestrictionsLabelDataType = '';
    protected $customTransitTerminusNameLabelType = LocalizedString::class;
    protected $customTransitTerminusNameLabelDataType = '';
    protected $customZoneLabelType = LocalizedString::class;
    protected $customZoneLabelDataType = '';
    public $enableSingleLegItinerary;
    public $enableSmartTap;
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
    public $languageOverride;
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
    protected $textModulesDataType = TextModuleData::class;
    protected $textModulesDataDataType = 'array';
    protected $transitOperatorNameType = LocalizedString::class;
    protected $transitOperatorNameDataType = '';
    public $transitType;
    public $version;
    protected $watermarkType = Image::class;
    protected $watermarkDataType = '';
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
    private $customCarriageLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customCoachLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customConcessionCategoryLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customConfirmationCodeLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customDiscountMessageLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customFareClassLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customFareNameLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customOtherRestrictionsLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customPlatformLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customPurchaseFaceValueLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customPurchasePriceLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customPurchaseReceiptNumberLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customRouteRestrictionsDetailsLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customRouteRestrictionsLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customSeatLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customTicketNumberLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customTimeRestrictionsLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customTransitTerminusNameLabel;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $customZoneLabel;
    /**
     * @var array|Image|mixed|null
     */
    private $heroImage;
    /**
     * @var array|Uri|mixed|null
     */
    private $homepageUri;
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
     * @var array|TextModuleData|mixed|null
     */
    private $textModulesData;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $transitOperatorName;
    /**
     * @var array|Image|mixed|null
     */
    private $watermark;
    /**
     * @var array|Image|mixed|null
     */
    private $wordMark;
    /**
     * @var array|LatLongPoint|mixed|null
     */
    private $locations;
    /**
     * @var array|ImageModuleData|mixed|null
     */
    private $imageModulesData;


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
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
    }
    public function getCountryCode()
    {
        return $this->countryCode;
    }
    public function setCustomCarriageLabel(LocalizedString $customCarriageLabel)
    {
        $this->customCarriageLabel = $customCarriageLabel;
    }
    public function getCustomCarriageLabel()
    {
        return $this->customCarriageLabel;
    }
    public function setCustomCoachLabel(LocalizedString $customCoachLabel)
    {
        $this->customCoachLabel = $customCoachLabel;
    }
    public function getCustomCoachLabel()
    {
        return $this->customCoachLabel;
    }
    public function setCustomConcessionCategoryLabel(LocalizedString $customConcessionCategoryLabel)
    {
        $this->customConcessionCategoryLabel = $customConcessionCategoryLabel;
    }
    public function getCustomConcessionCategoryLabel()
    {
        return $this->customConcessionCategoryLabel;
    }
    public function setCustomConfirmationCodeLabel(LocalizedString $customConfirmationCodeLabel)
    {
        $this->customConfirmationCodeLabel = $customConfirmationCodeLabel;
    }
    public function getCustomConfirmationCodeLabel()
    {
        return $this->customConfirmationCodeLabel;
    }
    public function setCustomDiscountMessageLabel(LocalizedString $customDiscountMessageLabel)
    {
        $this->customDiscountMessageLabel = $customDiscountMessageLabel;
    }
    public function getCustomDiscountMessageLabel()
    {
        return $this->customDiscountMessageLabel;
    }
    public function setCustomFareClassLabel(LocalizedString $customFareClassLabel)
    {
        $this->customFareClassLabel = $customFareClassLabel;
    }
    public function getCustomFareClassLabel()
    {
        return $this->customFareClassLabel;
    }
    public function setCustomFareNameLabel(LocalizedString $customFareNameLabel)
    {
        $this->customFareNameLabel = $customFareNameLabel;
    }
    public function getCustomFareNameLabel()
    {
        return $this->customFareNameLabel;
    }
    public function setCustomOtherRestrictionsLabel(LocalizedString $customOtherRestrictionsLabel)
    {
        $this->customOtherRestrictionsLabel = $customOtherRestrictionsLabel;
    }
    public function getCustomOtherRestrictionsLabel()
    {
        return $this->customOtherRestrictionsLabel;
    }
    public function setCustomPlatformLabel(LocalizedString $customPlatformLabel)
    {
        $this->customPlatformLabel = $customPlatformLabel;
    }
    public function getCustomPlatformLabel()
    {
        return $this->customPlatformLabel;
    }
    public function setCustomPurchaseFaceValueLabel(LocalizedString $customPurchaseFaceValueLabel)
    {
        $this->customPurchaseFaceValueLabel = $customPurchaseFaceValueLabel;
    }
    public function getCustomPurchaseFaceValueLabel()
    {
        return $this->customPurchaseFaceValueLabel;
    }
    public function setCustomPurchasePriceLabel(LocalizedString $customPurchasePriceLabel)
    {
        $this->customPurchasePriceLabel = $customPurchasePriceLabel;
    }
    public function getCustomPurchasePriceLabel()
    {
        return $this->customPurchasePriceLabel;
    }
    public function setCustomPurchaseReceiptNumberLabel(LocalizedString $customPurchaseReceiptNumberLabel)
    {
        $this->customPurchaseReceiptNumberLabel = $customPurchaseReceiptNumberLabel;
    }
    public function getCustomPurchaseReceiptNumberLabel()
    {
        return $this->customPurchaseReceiptNumberLabel;
    }
    public function setCustomRouteRestrictionsDetailsLabel(LocalizedString $customRouteRestrictionsDetailsLabel)
    {
        $this->customRouteRestrictionsDetailsLabel = $customRouteRestrictionsDetailsLabel;
    }
    public function getCustomRouteRestrictionsDetailsLabel()
    {
        return $this->customRouteRestrictionsDetailsLabel;
    }
    public function setCustomRouteRestrictionsLabel(LocalizedString $customRouteRestrictionsLabel)
    {
        $this->customRouteRestrictionsLabel = $customRouteRestrictionsLabel;
    }
    public function getCustomRouteRestrictionsLabel()
    {
        return $this->customRouteRestrictionsLabel;
    }
    public function setCustomSeatLabel(LocalizedString $customSeatLabel)
    {
        $this->customSeatLabel = $customSeatLabel;
    }
    public function getCustomSeatLabel()
    {
        return $this->customSeatLabel;
    }
    public function setCustomTicketNumberLabel(LocalizedString $customTicketNumberLabel)
    {
        $this->customTicketNumberLabel = $customTicketNumberLabel;
    }
    public function getCustomTicketNumberLabel()
    {
        return $this->customTicketNumberLabel;
    }
    public function setCustomTimeRestrictionsLabel(LocalizedString $customTimeRestrictionsLabel)
    {
        $this->customTimeRestrictionsLabel = $customTimeRestrictionsLabel;
    }
    public function getCustomTimeRestrictionsLabel()
    {
        return $this->customTimeRestrictionsLabel;
    }
    public function setCustomTransitTerminusNameLabel(LocalizedString $customTransitTerminusNameLabel)
    {
        $this->customTransitTerminusNameLabel = $customTransitTerminusNameLabel;
    }
    public function getCustomTransitTerminusNameLabel()
    {
        return $this->customTransitTerminusNameLabel;
    }
    public function setCustomZoneLabel(LocalizedString $customZoneLabel)
    {
        $this->customZoneLabel = $customZoneLabel;
    }
    public function getCustomZoneLabel()
    {
        return $this->customZoneLabel;
    }
    public function setEnableSingleLegItinerary($enableSingleLegItinerary)
    {
        $this->enableSingleLegItinerary = $enableSingleLegItinerary;
    }
    public function getEnableSingleLegItinerary()
    {
        return $this->enableSingleLegItinerary;
    }
    public function setEnableSmartTap($enableSmartTap)
    {
        $this->enableSmartTap = $enableSmartTap;
    }
    public function getEnableSmartTap()
    {
        return $this->enableSmartTap;
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
    public function setLanguageOverride($languageOverride)
    {
        $this->languageOverride = $languageOverride;
    }
    public function getLanguageOverride()
    {
        return $this->languageOverride;
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
    public function setLocations(LatLongPoint $locations)
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
    public function setTextModulesData(TextModuleData $textModulesData)
    {
        $this->textModulesData = $textModulesData;
    }
    public function getTextModulesData()
    {
        return $this->textModulesData;
    }
    public function setTransitOperatorName(LocalizedString $transitOperatorName)
    {
        $this->transitOperatorName = $transitOperatorName;
    }
    public function getTransitOperatorName()
    {
        return $this->transitOperatorName;
    }
    public function setTransitType($transitType)
    {
        $this->transitType = $transitType;
    }
    public function getTransitType()
    {
        return $this->transitType;
    }
    public function setVersion($version)
    {
        $this->version = $version;
    }
    public function getVersion()
    {
        return $this->version;
    }
    public function setWatermark(Image $watermark)
    {
        $this->watermark = $watermark;
    }
    public function getWatermark()
    {
        return $this->watermark;
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