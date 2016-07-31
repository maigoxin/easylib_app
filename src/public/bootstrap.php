<?php
/**
 * creator: maigoxin
 */
use App\Config\Database;
use App\Controller\BaseController;
use Slim\Container;
use Slim\Http\Request;
use Slim\Http\Response;
use EasyLib\Log;

define('SESSION_KEY', 'digest');
define('HOST_NAME', '.maigoxin.com');
Log::configure('./log4php.properties');

$config = []; 
$config['determineRouteBeforeAppMiddleware'] = true;
$config['displayErrorDetails'] = true;
$container = new Container(['setting' => $config]);

$container['view'] = function($c) {
    return new App\Helper\ApiView($c['response']);
};
