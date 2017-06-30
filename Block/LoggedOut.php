<?php
namespace Fc\CustomHandles\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;

/**
 * Class LoggedOut
 * @package Fc\CustomHandles\Block
 * @author Frank Clark <mrfrankclark1@gmail.com>
 * @description Currently unused block class
 */
class LoggedOut extends Template
{
    /**
     * LoggedOut constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getLoggedOutContent()
    {
        return '';
    }

}