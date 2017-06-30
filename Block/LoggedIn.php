<?php

namespace Fc\CustomHandles\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class LoggedIn
 * @package Fc\CustomHandles\Block
 * @author Frank Clark <mrfrankclark1@gmail.com>
 * @description Currently unused block class
 */
class LoggedIn extends Template
{
    /**
     * LoggedIn constructor.
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * @return string
     */
    public function getLoggedInContent()
    {
        return '';
    }

}