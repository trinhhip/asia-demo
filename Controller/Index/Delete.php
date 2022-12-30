<?php
/**
 *
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Neo\Demo\Controller\Index;

use Magento\Framework\App\Action\HttpGetActionInterface as HttpGetActionInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Delete extends \Magento\Framework\App\Action\Action
{
    /**
     * @var PageFactory
     */
    protected $resultPageFactory;

    protected $postResourceModel;

    protected $postFactory;

    /**
     * @param Context $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(
        Context $context,
        \Magento\Framework\Controller\ResultFactory $resultFactory,
        \Neo\Demo\Model\ResourceModel\Post $postResourceModel,
        \Neo\Demo\Model\PostFactory $postFactory
    ) {
        parent::__construct($context);
        $this->postResourceModel = $postResourceModel;
        $this->resultFactory = $resultFactory;
        $this->postFactory = $postFactory;
    }

    /**
     * Default customer account page
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $postId = $this->getRequest()->getParam('id');
        $post = $this->postFactory->create();
        $this->postResourceModel->load($post, $postId);
        $this->postResourceModel->delete($post);
        $redirect = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_REDIRECT);
        return $redirect->setUrl('/demo/index/index/');
    }
}
