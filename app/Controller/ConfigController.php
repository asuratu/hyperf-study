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

use Hyperf\Config\Annotation\Value;
use Hyperf\Contract\ConfigInterface;
use Hyperf\Di\Annotation\Inject;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController
 */
class ConfigController
{
    /**
     * @Inject
     */
    private ConfigInterface $config;

    /**
     * @Value("foo.bar")
     */
    private $value;

    // 通过 ConfigInterface 注解 获取 config
    public function inject()
    {
        return $this->config->get('foo.bar', 123);
    }

    // 通过 Value 注解 获取 config
    public function value(): int
    {
        return $this->value ?? 123;
    }

    // 通过全局函数 config() 获取 config
    public function config()
    {
        return config('foo.bar');
    }
}
