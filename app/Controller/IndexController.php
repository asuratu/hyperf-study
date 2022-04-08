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

use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\Utils\Codec\Json;

/**
 * @AutoController(prefix="user")
 */
class IndexController extends AbstractController
{
    public function index(): string
    {
        $user = $this->request->input('user', 'Hyperf');
        $method = $this->request->getMethod();

        return Json::encode([
            'method' => $method,
            'message' => "Hello {$user}.",
        ]);
    }

    public function test(): string
    {
        return '3';
    }
}
