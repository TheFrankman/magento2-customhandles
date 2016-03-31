<?php

namespace Fc\CustomHandles\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;

class CheckHandles implements ObserverInterface
{

    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        /**
         * Use xdebug to stop here to see if your handle has been added once blocks are generated.
         */

        $layout = $observer->getEvent()->getLayout();

        $handles = $layout->getUpdate()->getHandles();

        $stop = true;
    }
}
