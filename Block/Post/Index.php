<?php
namespace Neo\Demo\Block\Post;

class Index extends \Magento\Framework\View\Element\Template
{
    protected $postCollectionFactory;
    public $postPageTitle;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Neo\Demo\Model\ResourceModel\Post\CollectionFactory $postCollectionFactory
    ) {
        parent::__construct($context);
        $this->postCollectionFactory = $postCollectionFactory;
    }

    public function getPostCollection() {
        return $this->postCollectionFactory->create();
    }

    public function getPostPageTitle() {
        return !empty($this->postPageTitle) ? $this->postPageTitle : 'Post Demo';
    }

    public function setPostPageTitle($title) {
        $this->postPageTitle = $title;
    }

    public function plus($a, $b) {
        return $a + $b;
    }
}