<?php
namespace Neo\Demo\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Neo\Demo\Model\Post',
            'Neo\Demo\Model\ResourceModel\Post'
        );
    }
}