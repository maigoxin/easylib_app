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

if (get_cfg_var('ENV') != false) {
    define('ENV', get_cfg_var('ENV'));
}

if (!defined('ENV')) {
    define('ENV', 'development');
}

if (isset($_SERVER['HTTP_X_REQUEST_ID'])) {
    define('REQUEST_ID', $_SERVER['HTTP_X_REQUEST_ID']);
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
