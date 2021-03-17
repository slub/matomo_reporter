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
 * WebsitesController
 */
class WebsitesController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * action list
     * 
     * @return void
     */
    public function listAction()
    {
        $websites = $this->websitesRepository->findAll();
        $this->view->assign('websites', $websites);
    }

    /**
     * action show
     * 
     * @param \Slub\MatomoReporter\Domain\Model\Websites $websites
     * @return void
     */
    public function showAction(\Slub\MatomoReporter\Domain\Model\Websites $websites)
    {
        $this->view->assign('websites', $websites);
    }
}
