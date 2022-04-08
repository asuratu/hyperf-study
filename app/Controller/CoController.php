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

use Hyperf\Di\Annotation\Inject;
use Hyperf\Guzzle\ClientFactory;
use Hyperf\HttpServer\Annotation\AutoController;
use Hyperf\HttpServer\Contract\RequestInterface;

/**
 * @AutoController
 */
class CoController
{
    /**
     * @Inject
     */
    private ClientFactory $clientFactory;

    public function sleep(RequestInterface $request)
    {
        $seconds = $request->query('seconds', 1);
        sleep(intval($seconds));
        return $seconds;
    }

    public function test(): array
    {
        return parallel([
            'foo' => function () {
                $client = $this->clientFactory->create();
                $client->get('http://127.0.0.1:9501/co/sleep?seconds=2');
                return '222';
            },
            'bar' => function () {
                $client = $this->clientFactory->create();
                $client->get('http://127.0.0.1:9501/co/sleep?seconds=2');
                return '333';
            },
        ]);
    }
}
