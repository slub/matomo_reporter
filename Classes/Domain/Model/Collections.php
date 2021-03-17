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
 * Collections
 */
class Collections extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     * 
     * @var string
     */
    protected $name = '';

    /**
     * visits
     * 
     * @var \Slub\MatomoReporter\Domain\Model\Visits
     */
    protected $visits = null;

    /**
     * Returns the name
     * 
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     * 
     * @param string $name
     * @return void
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Returns the visits
     * 
     * @return \Slub\MatomoReporter\Domain\Model\Visits $visits
     */
    public function getVisits()
    {
        return $this->visits;
    }

    /**
     * Sets the visits
     * 
     * @param \Slub\MatomoReporter\Domain\Model\Visits $visits
     * @return void
     */
    public function setVisits(\Slub\MatomoReporter\Domain\Model\Visits $visits)
    {
        $this->visits = $visits;
    }
}
