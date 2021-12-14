<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;
use GooglePayPasses\WalletObjects\Collections\LocalizedString;

class LoyaltyPoints extends Model
{
    protected $internal_gapi_mappings = [];
    protected $balanceType = LoyaltyPointsBalance::class;
    protected $balanceDataType = '';
    public $label;
    protected $localizedLabelType = LocalizedString::class;
    protected $localizedLabelDataType = '';
    /**
     * @var array|LoyaltyPointsBalance|mixed|null
     */
    private $balance;
    /**
     * @var array|LocalizedString|mixed|null
     */
    private $localizedLabel;


    public function setBalance(LoyaltyPointsBalance $balance)
    {
        $this->balance = $balance;
    }
    public function getBalance()
    {
        return $this->balance;
    }
    public function setLabel($label)
    {
        $this->label = $label;
    }
    public function getLabel()
    {
        return $this->label;
    }
    public function setLocalizedLabel(LocalizedString $localizedLabel)
    {
        $this->localizedLabel = $localizedLabel;
    }
    public function getLocalizedLabel()
    {
        return $this->localizedLabel;
    }
}