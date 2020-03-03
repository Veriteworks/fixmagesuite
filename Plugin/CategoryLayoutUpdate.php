<?php
namespace Veriteworks\FixMageSuite\Plugin;

use Magento\Catalog\Api\Data\CategoryInterface;
use Magento\Catalog\Model\Attribute\Backend\Customlayoutupdate;

/**
 * Class CategoryLayoutUpdate
 * @package Veriteworks\FixMageSuite\Plugin
 */
class CategoryLayoutUpdate
{

    /**
     * @param Customlayoutupdate $subject
     * @param CategoryInterface $object
     * @return array
     */
    public function beforeValidate(
        Customlayoutupdate $subject,
        CategoryInterface $object
    ) {
        $newLayout = $object->getData('custom_layout_update');
        $object->setOrigData('custom_layout_update', $newLayout);
        return [$object];
    }
}
