<?php
namespace Neo\Demo\Observer;

class PostSaveObserver implements \Magento\Framework\Event\ObserverInterface
{
    protected $resourceConnection;

    public function __construct(
        \Magento\Framework\App\ResourceConnection $resourceConnection
    ) {
        $this->resourceConnection = $resourceConnection;
    }
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $post = $observer->getEvent()->getPost();
        $conn = $this->resourceConnection->getConnection();
        $conn->insert('notify_to_author', ['post_id' => $post->getId()]);
    }
}