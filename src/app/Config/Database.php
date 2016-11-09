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
class Database
{
    private static $_config = [
        'development' => [
            'pocadmin' => [
                'dsn' => 'mysql:host=127.0.0.1;dbname=xx',
                'user' => '',
                'pass' => '',
            ]
        ],
        'pbs' => [
            'pocadmin' => [
                'dsn' => 'mysql:host=127.0.0.1;dbname=xx',
                'user' => '',
                'pass' => '',
            ]
        ],
        'ONLINE' => [
            'pocadmin' => [
                'dsn' => 'mysql:host=127.0.0.1;dbname=xx',
                'user' => '',
                'pass' => '',
            ]
        ],
    ];
    
    public static function get($env)
    {
        return  self::$_config[$env];
    }
}
