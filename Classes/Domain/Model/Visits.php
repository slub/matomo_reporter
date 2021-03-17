<?php
namespace Slub\MatomoReporter\Domain\Model;


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
 * Visits
 */
class Visits extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * month
     * 
     * @var \DateTime
     */
    protected $month = null;

    /**
     * uniqueVisitors
     * 
     * @var int
     */
    protected $uniqueVisitors = 0;

    /**
     * pageViews
     * 
     * @var int
     */
    protected $pageViews = 0;

    /**
     * Returns the month
     * 
     * @return \DateTime $month
     */
    public function getMonth()
    {
        return $this->month;
    }

    /**
     * Sets the month
     * 
     * @param \DateTime $month
     * @return void
     */
    public function setMonth(\DateTime $month)
    {
        $this->month = $month;
    }

    /**
     * Returns the uniqueVisitors
     * 
     * @return int $uniqueVisitors
     */
    public function getUniqueVisitors()
    {
        return $this->uniqueVisitors;
    }

    /**
     * Sets the uniqueVisitors
     * 
     * @param int $uniqueVisitors
     * @return void
     */
    public function setUniqueVisitors($uniqueVisitors)
    {
        $this->uniqueVisitors = $uniqueVisitors;
    }

    /**
     * Returns the pageViews
     * 
     * @return int $pageViews
     */
    public function getPageViews()
    {
        return $this->pageViews;
    }

    /**
     * Sets the pageViews
     * 
     * @param int $pageViews
     * @return void
     */
    public function setPageViews($pageViews)
    {
        $this->pageViews = $pageViews;
    }
}
