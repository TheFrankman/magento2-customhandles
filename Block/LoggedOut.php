<?php
namespace Fc\CustomHandles\Block;

class LoggedOut extends \Magento\Framework\View\Element\Template
{

    protected $_storeManager;
    protected $_coreHelper;

    /**
     * Construct
     *
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    public function getLoggedOutContent()
    {
        return '';
    }

}