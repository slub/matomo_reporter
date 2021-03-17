<?php
namespace Slub\MatomoReporter\Controller;


/***
 *
 * This file is part of the "SLUB Matomo Reporter" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2021 Alexander Bigga <typo3@slub-dresden.de>, SLUB Dresden
 *
 ***/
/**
 * SubscriberController
 */
class SubscriberController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * subscriberRepository
     * 
     * @var \Slub\MatomoReporter\Domain\Repository\SubscriberRepository
     */
    protected $subscriberRepository = null;

    /**
     * @param \Slub\MatomoReporter\Domain\Repository\SubscriberRepository $subscriberRepository
     */
    public function injectSubscriberRepository(\Slub\MatomoReporter\Domain\Repository\SubscriberRepository $subscriberRepository)
    {
        $this->subscriberRepository = $subscriberRepository;
    }

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $subscribers = $this->subscriberRepository->findAll();
        $this->view->assign('subscribers', $subscribers);
    }

    /**
     * action show
     * 
     * @param \Slub\MatomoReporter\Domain\Model\Subscriber $subscriber
     * @return void
     */
    public function showAction(\Slub\MatomoReporter\Domain\Model\Subscriber $subscriber)
    {
        $this->view->assign('subscriber', $subscriber);
    }

    /**
     * action new
     * 
     * @return void
     */
    public function newAction()
    {
    }

    /**
     * action create
     * 
     * @param \Slub\MatomoReporter\Domain\Model\Subscriber $newSubscriber
     * @return void
     */
    public function createAction(\Slub\MatomoReporter\Domain\Model\Subscriber $newSubscriber)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->subscriberRepository->add($newSubscriber);
        $this->redirect('list');
    }

    /**
     * action edit
     * 
     * @param \Slub\MatomoReporter\Domain\Model\Subscriber $subscriber
     * @ignorevalidation $subscriber
     * @return void
     */
    public function editAction(\Slub\MatomoReporter\Domain\Model\Subscriber $subscriber)
    {
        $this->view->assign('subscriber', $subscriber);
    }

    /**
     * action update
     * 
     * @param \Slub\MatomoReporter\Domain\Model\Subscriber $subscriber
     * @return void
     */
    public function updateAction(\Slub\MatomoReporter\Domain\Model\Subscriber $subscriber)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->subscriberRepository->update($subscriber);
        $this->redirect('list');
    }

    /**
     * action delete
     * 
     * @param \Slub\MatomoReporter\Domain\Model\Subscriber $subscriber
     * @return void
     */
    public function deleteAction(\Slub\MatomoReporter\Domain\Model\Subscriber $subscriber)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See https://docs.typo3.org/typo3cms/extensions/extension_builder/User/Index.html', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::WARNING);
        $this->subscriberRepository->remove($subscriber);
        $this->redirect('list');
    }
}
