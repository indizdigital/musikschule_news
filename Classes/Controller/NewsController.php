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
 * NewsController
 */
class NewsController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * newsRepository
     *
     * @var \Indiz\IndizNews\Domain\Repository\NewsRepository
     */
    protected $newsRepository = null;

    /**
     * @param \Indiz\IndizNews\Domain\Repository\NewsRepository $newsRepository
     */
    public function injectNewsRepository(\Indiz\IndizNews\Domain\Repository\NewsRepository $newsRepository)
    {
        $this->newsRepository = $newsRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {

        $news = $this->newsRepository->findByCat($this->settings["flexform"]["showCategory"],$this->settings["flexform"]["orderBy"]);
        if(strlen($this->settings["flexform"]["limit"])){
          $limit = intval($this->settings["flexform"]["limit"]);
          if($limit && count($news) > $limit){
            $news = array_slice($news,0,$limit);
          }
        }
        $this->view->assign('news', $news);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Indiz\IndizNews\Domain\Model\News $news
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Indiz\IndizNews\Domain\Model\News $news): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('news', $news);
        return $this->htmlResponse();
    }
}
