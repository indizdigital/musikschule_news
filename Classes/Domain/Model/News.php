<?php

declare(strict_types=1);

namespace Indiz\IndizNews\Domain\Model;


/**
 * This file is part of the "News" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022
 */

/**
 * News
 */
class News extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

      /**
       * title
       *
       * @var string
       */
      protected $title = '';

      /**
       * starttime
       *
       * @var int
       */
      protected $starttime = 0;

    /**
     * teaser
     *
     * @var string
     */
    protected $teaser = '';

    /**
     * bodytext
     *
     * @var string
     */
    protected $bodytext = '';

    /**
     * image
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $image = null;

    /**
     * href
     *
     * @var string
     */
    protected $href = '';

    /**
     * pdf
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $pdf = null;

    /**
     * category
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Indiz\IndizNews\Domain\Model\Category>
     */
    protected $category = null;

    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the teaser
     *
     * @return string
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Sets the teaser
     *
     * @param string $teaser
     * @return void
     */
    public function setTeaser(string $teaser)
    {
        $this->teaser = $teaser;
    }

    /**
     * Returns the bodytext
     *
     * @return string
     */
    public function getBodytext()
    {
        return $this->bodytext;
    }

    /**
     * Sets the bodytext
     *
     * @param string $bodytext
     * @return void
     */
    public function setBodytext(string $bodytext)
    {
        $this->bodytext = $bodytext;
    }

    /**
     * Returns the image
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Sets the image
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
     * @return void
     */
    public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image)
    {
        $this->image = $image;
    }

    /**
     * Returns the href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Sets the href
     *
     * @param string $href
     * @return void
     */
    public function setHref(string $href)
    {
        $this->href = $href;
    }

    /**
     * Returns the pdf
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * Sets the pdf
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $pdf
     * @return void
     */
    public function setPdf(\TYPO3\CMS\Extbase\Domain\Model\FileReference $pdf)
    {
        $this->pdf = $pdf;
    }

    /**
     * Returns the starttime
     *
     * @return \int
     */
    public function getStarttime()
    {
        return $this->starttime;
    }

    /**
     * Returns the starttime
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Indiz\IndizNews\Domain\Model\Category>
     */
    public function getCategory(){
      return $this->category;
    }

    /**
     * Returns the starttime
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Indiz\IndizNews\Domain\Model\Category>
     * @return \void
     */
    public function setCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $cat){
      $this->category = $cat;
    }

    /**
     * Returns the starttime
     *
     * @param \Indiz\IndizNews\Domain\Model\Category
     * @return \void
     */
    public function addCategory(\Indiz\IndizNews\Domain\Model\Category $cat){
      $this->category->attach($cat);
    }

    /**
     * Returns the starttime
     *
     * @param \Indiz\IndizNews\Domain\Model\Category
     * @return \void
     */
    public function removeCategory(\Indiz\IndizNews\Domain\Model\Category $cat){
      $this->category->detach($cat);
    }
}
