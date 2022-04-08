<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace App\Controller;

use App\Dao\UserDao;
use Hyperf\Database\Model\Collection;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController(prefix="model")
 */
class ModelController extends AbstractController
{
    /**
     * @Inject
     * @var UserDao
     */
    protected $dao;

    public function first()
    {
        return $this->dao->first(1);
    }

    public function firstCache()
    {
        return $this->dao->firstCache(1);
    }

    public function find()
    {
        return $this->dao->find([1, 2]);
    }

    public function findCache(): Collection
    {
        return $this->dao->findCache([1, 2]);
    }
}
