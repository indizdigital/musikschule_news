<?php

declare(strict_types=1);

namespace Indiz\IndizNews\Domain\Repository;

use Indiz\IndizNews\Domain\Model\News;
use TYPO3\CMS\Core\Utility\GeneralUtility;

 use TYPO3\CMS\Core\Database\ConnectionPool;
 use TYPO3\CMS\Extbase\Persistence\Generic\Mapper\DataMapper;
 use TYPO3\CMS\Extbase\Object\ObjectManager;

/**
 * This file is part of the "News" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022
 */

/**
 * The repository for News
 */
class NewsRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{

    /*public function initializeObject()
    {
            // get the current settings
            $querySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
            // change the default setting, whether the storage page ID is ignored by the plugins (FALSE) or not (TRUE - default setting)
            $querySettings->setRespectStoragePage(FALSE);
            // store the new setting(s)
            $this->setDefaultQuerySettings($querySettings);
    }*/

    public function findByCat($cats,$sorting){

      $table = 'tx_indiznews_domain_model_news';
      $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($table);
      $dataMapper = GeneralUtility::makeInstance(ObjectManager::class)->get(DataMapper::class);

        $constraints = [];

        $categories = explode(",",$cats);


        $catConstraints = [];
        foreach($categories as $c){
          $catConstraints[] = $queryBuilder->expr()->like('category', $queryBuilder->createNamedParameter("%," . $c));
          $catConstraints[] = $queryBuilder->expr()->like('category', $queryBuilder->createNamedParameter("%," . $c.",%"));
          $catConstraints[] = $queryBuilder->expr()->like('category', $queryBuilder->createNamedParameter($c.",%"));
          $catConstraints[] = $queryBuilder->expr()->like('category', $queryBuilder->createNamedParameter($c));
        }


        $orderBy = explode(",",$sorting);

        $queryBuilder->select('*')->from($table)->orWhere(
            ...$catConstraints
        )->orderBy($orderBy[0],strtoupper($orderBy[1]));



        $news = $dataMapper->map(
            News::class,
            $queryBuilder->execute()->fetchAll()
        );

        return $news;
    }
}
