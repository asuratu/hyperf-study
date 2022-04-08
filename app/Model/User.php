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

namespace App\Model;

use Carbon\Carbon;
use Hyperf\DbConnection\Model\Model;
use Hyperf\ModelCache\Cacheable;
use Hyperf\ModelCache\CacheableInterface;

/**
 * @property int $id
 * @property string $name
 * @property int $gender
 * @property Carbon $created_at
 * @property Carbon $updated_at
 */
class User extends Model implements CacheableInterface
{
    use Cacheable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 'name', 'gender', 'created_at', 'updated_at'];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = ['id' => 'integer', 'gender' => 'integer', 'created_at' => 'datetime', 'updated_at' => 'datetime'];
}
