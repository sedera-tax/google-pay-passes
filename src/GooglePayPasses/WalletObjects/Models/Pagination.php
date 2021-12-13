<?php


namespace GooglePayPasses\WalletObjects\Models;


use Google\Model;

class Pagination extends Model
{
    protected $internal_gapi_mappings = [];
    public $kind;
    public $nextPageToken;
    public $resultsPerPage;


    public function setKind($kind)
    {
        $this->kind = $kind;
    }
    public function getKind()
    {
        return $this->kind;
    }
    public function setNextPageToken($nextPageToken)
    {
        $this->nextPageToken = $nextPageToken;
    }
    public function getNextPageToken()
    {
        return $this->nextPageToken;
    }
    public function setResultsPerPage($resultsPerPage)
    {
        $this->resultsPerPage = $resultsPerPage;
    }
    public function getResultsPerPage()
    {
        return $this->resultsPerPage;
    }
}