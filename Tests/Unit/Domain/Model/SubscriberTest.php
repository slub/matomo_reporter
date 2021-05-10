<?php
namespace Slub\MatomoReporter\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alexander Bigga <typo3@slub-dresden.de>
 */
class SubscriberTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Slub\MatomoReporter\Domain\Model\Subscriber
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Slub\MatomoReporter\Domain\Model\Subscriber();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getEmailReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getEmail()
        );
    }

    /**
     * @test
     */
    public function setEmailForStringSetsEmail()
    {
        $this->subject->setEmail('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'email',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getMaildaysReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getMaildays()
        );
    }

    /**
     * @test
     */
    public function setMaildaysForStringSetsMaildays()
    {
        $this->subject->setMaildays('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'maildays',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getWebsitesReturnsInitialValueForWebsites()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getWebsites()
        );
    }

    /**
     * @test
     */
    public function setWebsitesForObjectStorageContainingWebsitesSetsWebsites()
    {
        $website = new \Slub\MatomoReporter\Domain\Model\Websites();
        $objectStorageHoldingExactlyOneWebsites = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneWebsites->attach($website);
        $this->subject->setWebsites($objectStorageHoldingExactlyOneWebsites);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneWebsites,
            'websites',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addWebsiteToObjectStorageHoldingWebsites()
    {
        $website = new \Slub\MatomoReporter\Domain\Model\Websites();
        $websitesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $websitesObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($website));
        $this->inject($this->subject, 'websites', $websitesObjectStorageMock);

        $this->subject->addWebsite($website);
    }

    /**
     * @test
     */
    public function removeWebsiteFromObjectStorageHoldingWebsites()
    {
        $website = new \Slub\MatomoReporter\Domain\Model\Websites();
        $websitesObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $websitesObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($website));
        $this->inject($this->subject, 'websites', $websitesObjectStorageMock);

        $this->subject->removeWebsite($website);
    }

    /**
     * @test
     */
    public function getCollectionsReturnsInitialValueForCollections()
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getCollections()
        );
    }

    /**
     * @test
     */
    public function setCollectionsForObjectStorageContainingCollectionsSetsCollections()
    {
        $collection = new \Slub\MatomoReporter\Domain\Model\Collections();
        $objectStorageHoldingExactlyOneCollections = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneCollections->attach($collection);
        $this->subject->setCollections($objectStorageHoldingExactlyOneCollections);

        self::assertAttributeEquals(
            $objectStorageHoldingExactlyOneCollections,
            'collections',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function addCollectionToObjectStorageHoldingCollections()
    {
        $collection = new \Slub\MatomoReporter\Domain\Model\Collections();
        $collectionsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $collectionsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($collection));
        $this->inject($this->subject, 'collections', $collectionsObjectStorageMock);

        $this->subject->addCollection($collection);
    }

    /**
     * @test
     */
    public function removeCollectionFromObjectStorageHoldingCollections()
    {
        $collection = new \Slub\MatomoReporter\Domain\Model\Collections();
        $collectionsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->setMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $collectionsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($collection));
        $this->inject($this->subject, 'collections', $collectionsObjectStorageMock);

        $this->subject->removeCollection($collection);
    }
}
