<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 5/16/16
 * Time: 5:40 AM
 */

namespace App\Config;


/**
 * Class Database
 * @package App\Config
 * 
 * 数据库配置
 */
class Redis 
{
    private static $_config = [
        'development' => [
            'pocadmin' => [
                'host' => '127.0.0.1',
                'port' => 6379,
                'db' => 0,
                'timeout' => 0,
            ]
        ],
        'pbs' => [
            'pocadmin' => [
                'host' => '127.0.0.1',
                'port' => 6379,
                'db' => 0,
                'timeout' => 0,
            ]
        ],
        'ONLINE' => [
            'pocadmin' => [
                'host' => '127.0.0.1',
                'port' => 6379,
                'db' => 0,
                'timeout' => 0,
            ]
        ],
    ];
    
    public static function get($env)
    {
        return  self::$_config[$env];
    }
}
