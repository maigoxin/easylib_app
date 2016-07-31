<?php
/**
 * creator: maigoxin
 */

use App\Controller\TestController;

use EasyLib\Middleware\Cross;
use EasyLib\Middleware\RequestLog;
use Psr7Middlewares\Middleware\TrailingSlash;

$app->add(new TrailingSlash(false))->add(RequestLog::class);
$app->get('/test', TestController::class . ':test');
