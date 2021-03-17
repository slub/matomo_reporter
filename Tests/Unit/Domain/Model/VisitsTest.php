<?php
namespace Slub\MatomoReporter\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Alexander Bigga <typo3@slub-dresden.de>
 */
class VisitsTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Slub\MatomoReporter\Domain\Model\Visits
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Slub\MatomoReporter\Domain\Model\Visits();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getMonthReturnsInitialValueForDateTime()
    {
        self::assertEquals(
            null,
            $this->subject->getMonth()
        );
    }

    /**
     * @test
     */
    public function setMonthForDateTimeSetsMonth()
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setMonth($dateTimeFixture);

        self::assertAttributeEquals(
            $dateTimeFixture,
            'month',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getUniqueVisitorsReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getUniqueVisitors()
        );
    }

    /**
     * @test
     */
    public function setUniqueVisitorsForIntSetsUniqueVisitors()
    {
        $this->subject->setUniqueVisitors(12);

        self::assertAttributeEquals(
            12,
            'uniqueVisitors',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPageViewsReturnsInitialValueForInt()
    {
        self::assertSame(
            0,
            $this->subject->getPageViews()
        );
    }

    /**
     * @test
     */
    public function setPageViewsForIntSetsPageViews()
    {
        $this->subject->setPageViews(12);

        self::assertAttributeEquals(
            12,
            'pageViews',
            $this->subject
        );
    }
}
