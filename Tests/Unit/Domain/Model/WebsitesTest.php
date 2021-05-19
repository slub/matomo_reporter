<?php
namespace Slub\MatomoReporter\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alexander Bigga <typo3@slub-dresden.de>
 * @author Tobias Kreße <typo3@slub-dresden.de>
 */
class WebsitesTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Slub\MatomoReporter\Domain\Model\Websites
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Slub\MatomoReporter\Domain\Model\Websites();
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
    public function getVisitsReturnsInitialValueForVisits()
    {
        self::assertEquals(
            null,
            $this->subject->getVisits()
        );
    }

    /**
     * @test
     */
    public function setVisitsForVisitsSetsVisits()
    {
        $visitsFixture = new \Slub\MatomoReporter\Domain\Model\Visits();
        $this->subject->setVisits($visitsFixture);

        self::assertAttributeEquals(
            $visitsFixture,
            'visits',
            $this->subject
        );
    }
}
