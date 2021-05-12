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
 * Subscriber
 */
class Subscriber extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * name
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $name = '';

    /**
     * email
     * 
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $email = '';

    /**
     * websites
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Slub\MatomoReporter\Domain\Model\Websites>
     */
    protected $websites = null;

    /**
     * collections
     * 
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Slub\MatomoReporter\Domain\Model\Collections>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $collections = null;

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
     * Returns the email
     * 
     * @return string $email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets the email
     * 
     * @param string $email
     * @return void
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * __construct
     */
    public function __construct()
    {

        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }

    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     * 
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->websites = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->collections = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Websites
     * 
     * @param \Slub\MatomoReporter\Domain\Model\Websites $website
     * @return void
     */
    public function addWebsite(\Slub\MatomoReporter\Domain\Model\Websites $website)
    {
        $this->websites->attach($website);
    }

    /**
     * Removes a Websites
     * 
     * @param \Slub\MatomoReporter\Domain\Model\Websites $websiteToRemove The Websites to be removed
     * @return void
     */
    public function removeWebsite(\Slub\MatomoReporter\Domain\Model\Websites $websiteToRemove)
    {
        $this->websites->detach($websiteToRemove);
    }

    /**
     * Returns the websites
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Slub\MatomoReporter\Domain\Model\Websites> $websites
     */
    public function getWebsites()
    {
        return $this->websites;
    }

    /**
     * Sets the websites
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Slub\MatomoReporter\Domain\Model\Websites> $websites
     * @return void
     */
    public function setWebsites(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $websites)
    {
        $this->websites = $websites;
    }

    /**
     * Adds a Collections
     * 
     * @param \Slub\MatomoReporter\Domain\Model\Collections $collection
     * @return void
     */
    public function addCollection(\Slub\MatomoReporter\Domain\Model\Collections $collection)
    {
        $this->collections->attach($collection);
    }

    /**
     * Removes a Collections
     * 
     * @param \Slub\MatomoReporter\Domain\Model\Collections $collectionToRemove The Collections to be removed
     * @return void
     */
    public function removeCollection(\Slub\MatomoReporter\Domain\Model\Collections $collectionToRemove)
    {
        $this->collections->detach($collectionToRemove);
    }

    /**
     * Returns the collections
     * 
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Slub\MatomoReporter\Domain\Model\Collections> $collections
     */
    public function getCollections()
    {
        return $this->collections;
    }

    /**
     * Sets the collections
     * 
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Slub\MatomoReporter\Domain\Model\Collections> $collections
     * @return void
     */
    public function setCollections(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $collections)
    {
        $this->collections = $collections;
    }
}
