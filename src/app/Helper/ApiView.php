<?php
/*
 * creator: maigohuang
 * */
namespace App\Helper;

class ApiView extends \EasyLib\ApiView
{
    protected $errorMap = [ 
        'InvalidateParams' => [-1001, '参数不合法', 200],

        //account
        'ErrorLogin' => [-2000, '登录失败:%s', 200],
    ];  
}
