<?php
/*
 * creator: maigohuang
 * */
date_default_timezone_set('Asia/Chongqing');
define('WEB_ROOT', dirname(__FILE__).'/../');
define('PHP_ROOT', WEB_ROOT.'../../php/');


require_once(PHP_ROOT . 'utils/LibAutoLoader.php');

//相关共有配置信息
define('UID', 'UID');
define('SESSIONID', 'SESSIONID');
define('SESSION_EXPIRE_TIME', 0);
Log::Configure(WEB_ROOT . 'log4php.properties');
//end
require_once(WEB_ROOT . 'Config.php');
require_once(WEB_ROOT . 'common/ErrorMap.php');
