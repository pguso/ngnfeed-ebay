<?php

namespace D4m\NgnFeed\Ebay\Model\Request;

class GetSessionIDRequest extends BaseRequest
{
    protected $ruName;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @param mixed $ruName
     */
    public function setRuName($ruName)
    {
        $this->ruName = $ruName;
    }

    /**
     * @return mixed
     */
    public function getRuName()
    {
        return $this->ruName;
    }
}