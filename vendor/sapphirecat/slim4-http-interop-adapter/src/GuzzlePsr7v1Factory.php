<?php

declare(strict_types=1);

namespace Sapphirecat\Slim4HttpInteropAdapter;

use Slim\Factory\Psr17\Psr17Factory;

/**
 * Slim Framework (https://slimframework.com) v4.8.1.
 *
 * @license https://github.com/slimphp/Slim/blob/4.x/LICENSE.md (MIT License)
 */
class GuzzlePsr7v1Factory extends Psr17Factory
{
    protected static string $responseFactoryClass = 'Http\Factory\Guzzle\ResponseFactory';
    protected static string $streamFactoryClass = 'Http\Factory\Guzzle\StreamFactory';
    protected static string $serverRequestCreatorClass = 'GuzzleHttp\Psr7\ServerRequest';
    protected static string $serverRequestCreatorMethod = 'fromGlobals';
}
