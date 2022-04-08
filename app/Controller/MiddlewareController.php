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

use App\Middleware\BarMiddleware;
use App\Middleware\BazMiddleware;
use App\Middleware\FooMiddleware;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Annotation\Middleware;
use Hyperf\HttpServer\Annotation\Middlewares;

/**
 * @AutoController
 * @Middlewares(
 *     @Middleware(BarMiddleware::class),
 *     @Middleware(BazMiddleware::class)
 * )
 */
class MiddlewareController
{
    /**
     * @Middleware(FooMiddleware::class),
     */
    public function index(): string
    {
        return 'index';
    }
}
