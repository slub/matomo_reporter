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
 * CollectionsController
 */
class CollectionsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $collections = $this->collectionsRepository->findAll();
        $this->view->assign('collections', $collections);
    }

    /**
     * action show
     * 
     * @param \Slub\MatomoReporter\Domain\Model\Collections $collections
     * @return void
     */
    public function showAction(\Slub\MatomoReporter\Domain\Model\Collections $collections)
    {
        $this->view->assign('collections', $collections);
    }
}
