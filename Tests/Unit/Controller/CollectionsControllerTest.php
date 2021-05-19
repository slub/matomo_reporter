<?php
namespace Slub\MatomoReporter\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alexander Bigga <typo3@slub-dresden.de>
 */
class CollectionsControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Slub\MatomoReporter\Controller\CollectionsController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Slub\MatomoReporter\Controller\CollectionsController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllCollectionssFromRepositoryAndAssignsThemToView()
    {

        $allCollectionss = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $collectionsRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $collectionsRepository->expects(self::once())->method('findAll')->will(self::returnValue($allCollectionss));
        $this->inject($this->subject, 'collectionsRepository', $collectionsRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('collectionss', $allCollectionss);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenCollectionsToView()
    {
        $collections = new \Slub\MatomoReporter\Domain\Model\Collections();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('collections', $collections);

        $this->subject->showAction($collections);
    }
}
