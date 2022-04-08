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

namespace App\Dao;

use App\Model\User;
use Hyperf\Database\Model\Collection;

class UserDao
{
    public function first(int $id)
    {
        return User::query()->find($id);
    }

    public function firstCache(int $id)
    {
        return User::findFromCache($id);
    }

    public function find(array $id)
    {
        return User::query()->find($id);
    }

    public function findCache(array $id): Collection
    {
        return User::findManyFromCache($id);
    }
}
