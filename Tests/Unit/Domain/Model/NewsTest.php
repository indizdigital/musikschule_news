<?php

declare(strict_types=1);

namespace Indiz\IndizNews\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 */
class NewsTest extends UnitTestCase
{
    /**
     * @var \Indiz\IndizNews\Domain\Model\News|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Indiz\IndizNews\Domain\Model\News::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle(): void
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('title'));
    }

    /**
     * @test
     */
    public function getTeaserReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTeaser()
        );
    }

    /**
     * @test
     */
    public function setTeaserForStringSetsTeaser(): void
    {
        $this->subject->setTeaser('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('teaser'));
    }

    /**
     * @test
     */
    public function getBodytextReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getBodytext()
        );
    }

    /**
     * @test
     */
    public function setBodytextForStringSetsBodytext(): void
    {
        $this->subject->setBodytext('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('bodytext'));
    }

    /**
     * @test
     */
    public function getImageReturnsInitialValueForFileReference(): void
    {
        self::assertEquals(
            null,
            $this->subject->getImage()
        );
    }

    /**
     * @test
     */
    public function setImageForFileReferenceSetsImage(): void
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setImage($fileReferenceFixture);

        self::assertEquals($fileReferenceFixture, $this->subject->_get('image'));
    }

    /**
     * @test
     */
    public function getHrefReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getHref()
        );
    }

    /**
     * @test
     */
    public function setHrefForStringSetsHref(): void
    {
        $this->subject->setHref('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('href'));
    }

    /**
     * @test
     */
    public function getPdfReturnsInitialValueForFileReference(): void
    {
        self::assertEquals(
            null,
            $this->subject->getPdf()
        );
    }

    /**
     * @test
     */
    public function setPdfForFileReferenceSetsPdf(): void
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setPdf($fileReferenceFixture);

        self::assertEquals($fileReferenceFixture, $this->subject->_get('pdf'));
    }
}
