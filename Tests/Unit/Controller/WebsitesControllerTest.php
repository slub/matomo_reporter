<?php
namespace Slub\MatomoReporter\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Alexander Bigga <typo3@slub-dresden.de>
 * @author Tobias Kreße <typo3@slub-dresden.de>
 */
class WebsitesControllerTest extends \TYPO3\TestingFramework\Core\Unit\UnitTestCase
{
    /**
     * @var \Slub\MatomoReporter\Controller\WebsitesController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Slub\MatomoReporter\Controller\WebsitesController::class)
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
    public function listActionFetchesAllWebsitessFromRepositoryAndAssignsThemToView()
    {

        $allWebsitess = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $websitesRepository = $this->getMockBuilder(\::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $websitesRepository->expects(self::once())->method('findAll')->will(self::returnValue($allWebsitess));
        $this->inject($this->subject, 'websitesRepository', $websitesRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('websitess', $allWebsitess);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenWebsitesToView()
    {
        $websites = new \Slub\MatomoReporter\Domain\Model\Websites();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('websites', $websites);

        $this->subject->showAction($websites);
    }
}
