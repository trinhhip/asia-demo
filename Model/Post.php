<?php
namespace Neo\Demo\Model;

class Post extends \Magento\Framework\Model\AbstractModel
{
    public function _construct()
    {
        $this->_init(\Neo\Demo\Model\ResourceModel\Post::class);
    }
}