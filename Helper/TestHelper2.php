<?php

namespace Acme\AppBundle\Helper;

use Acme\AppBundle\Helper\TestHelper;

class TestHelper2
{
    protected $helper;

    public function __construct(TestHelper $helper)
    {
        $this->helper = $helper;
    }

    public function getFunction()
    {
        return $this->helper->getNumber(5);
    }
}
