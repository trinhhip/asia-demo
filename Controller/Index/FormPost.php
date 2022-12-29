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

class FormPost extends \Magento\Framework\App\Action\Action
{
    protected $postFactory;
    protected $postResourceModel;

    public function __construct(
        Context $context,
        \Neo\Demo\Model\PostFactory $postFactory,
        \Neo\Demo\Model\ResourceModel\Post $postResourceModel
    ) {
        parent::__construct($context);
        $this->postFactory = $postFactory;
        $this->postResourceModel = $postResourceModel;
    }

    /**
     * Default customer account page
     *
     * @return \Magento\Framework\View\Result\Page
     */
    public function execute()
    {
        $postValue = $this->getRequest()->getPostValue();
    }
}
