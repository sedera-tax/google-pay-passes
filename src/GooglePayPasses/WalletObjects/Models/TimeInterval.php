<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class TimeInterval extends Model
{
    protected $internal_gapi_mappings = [];
    protected $endType = DateTime::class;
    protected $endDataType = '';
    /**
     * @var array|DateTime|mixed|null
     */
    public $end;
    public $kind;
    protected $startType = DateTime::class;
    protected $startDataType = '';
    /**
     * @var array|DateTime|mixed|null
     */
    public $start;


    public function setEnd(DateTime $end)
    {
        $this->end = $end;
    }
    public function getEnd()
    {
        return $this->end;
    }
    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setStart(DateTime $start)
    {
        $this->start = $start;
    }
    public function getStart()
    {
        return $this->start;
    }
}