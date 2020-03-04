<?php
namespace Veriteworks\FixMageSuite\Plugin;

use Magento\Catalog\Model\Attribute\Backend\Customlayoutupdate;

/**
 * Class CategoryLayoutUpdate
 * @package Veriteworks\FixMageSuite\Plugin
 */
class CategoryLayoutUpdate
{

    /**
     * @param Customlayoutupdate $subject
     * @param $object
     * @return array
     */
    public function beforeValidate(
        Customlayoutupdate $subject,
        $object
    ) {
        $newLayout = $object->getData('custom_layout_update');
        if ($newLayout) {
            $object->setOrigData('custom_layout_update', $newLayout);
        } else {
            $origData = $object->getOrigData('custom_layout_update');
            $object->setData('custom_layout_update', $origData);
        }
        return [$object];
    }
}
