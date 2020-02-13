<?php
namespace Veriteworks\FixMageSuite\Observer;

use Magento\Framework\Event\Observer;
use Magento\Framework\Event\ObserverInterface;
use Magento\Cms\Api\Data\PageInterface;

class AdjustCmsLayoutUpdate implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $entity = $observer->getEvent()->getEntity();
        if (!($entity instanceof PageInterface)) {
            return ;
        }

        if ($entity->getData('layout_update_selected')) {
            $entity->setData('layout_update_selected', null);
        }
    }

}
