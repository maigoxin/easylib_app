<?php
/**
 * Creator: maigoxin
 */

use Slim\App;
use EasyLib\Utils;

require __DIR__ . '/../../vendor/autoload.php';

if (!defined('WEB_ROOT')) {
    define('WEB_ROOT', __DIR__);
}

if (ini_get('ENV') != false) {
    define('ENV', ini_get('ENV'));
}

if (!defined('ENV')) {
    define('ENV', 'development');
}

if (!defined('REQUEST_ID')) {
    define('REQUEST_ID', Utils::guid());
}

if (!defined('APP_NAME')) {
    define('APP_NAME', 'weichat');
}

require  WEB_ROOT . '/bootstrap.php';

$app = new App($container);


require WEB_ROOT . '/routers.php';

$app->run();
