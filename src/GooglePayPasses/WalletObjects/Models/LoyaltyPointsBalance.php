<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class LoyaltyPointsBalance extends Model
{
    protected $internal_gapi_mappings = [];
    public $double;
    public $int;
    protected $moneyType = Money::class;
    protected $moneyDataType = '';
    public $string;
    /**
     * @var array|Money|mixed|null
     */
    private $money;


    public function setDouble($double)
    {
        $this->double = $double;
    }
    public function getDouble()
    {
        return $this->double;
    }
    public function setInt($int)
    {
        $this->int = $int;
    }
    public function getInt()
    {
        return $this->int;
    }
    public function setMoney(Money $money)
    {
        $this->money = $money;
    }
    public function getMoney()
    {
        return $this->money;
    }
    public function setString($string)
    {
        $this->string = $string;
    }
    public function getString()
    {
        return $this->string;
    }
}