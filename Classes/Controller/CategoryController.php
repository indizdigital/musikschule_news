<?php

declare(strict_types=1);

namespace Indiz\IndizNews\Controller;


/**
 * This file is part of the "News" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 
 */

/**
 * CategoryController
 */
class CategoryController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * categoryRepository
     *
     * @var \Indiz\IndizNews\Domain\Repository\CategoryRepository
     */
    protected $categoryRepository = null;

    /**
     * @param \Indiz\IndizNews\Domain\Repository\CategoryRepository $categoryRepository
     */
    public function injectCategoryRepository(\Indiz\IndizNews\Domain\Repository\CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * action index
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function indexAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}
