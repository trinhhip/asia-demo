<?php
namespace Neo\Demo\Observer;

class PostSaveObserver implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $post = $observer->getEvent()->getPost();
        $a = 1;
    }
}