<?php
namespace App\Config;


/**
 * Class Database
 * @package App\Config
 * 
 * 数据库配置
 */
class Database
{
    private static $_config = [
        'development' => [
        ],
        'pbs' => [
        ],
        'ONLINE' => [
        ],
    ];
    
    public static function get($env = false)
    {
        if ($env == false) {
            return  self::$_config[ENV];
        }else {
            return  self::$_config[$env];
        }
    }
}
