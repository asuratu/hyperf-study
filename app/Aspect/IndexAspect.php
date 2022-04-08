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

namespace App\Aspect;

use App\Controller\IndexController;
use Hyperf\Di\Annotation\Aspect;
use Hyperf\Di\Aop\AbstractAspect;
use Hyperf\Di\Aop\ProceedingJoinPoint;

/**
 * @Aspect
 */
class IndexAspect extends AbstractAspect
{
    public $classes = [
        IndexController::class . '::test',
    ];

    public function process(ProceedingJoinPoint $proceedingJoinPoint)
    {
        var_dump('before');
        $result = $proceedingJoinPoint->process();
        var_dump('after');
        return 'before' . $result . 'after';
    }
}
