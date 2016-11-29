<?php
/*
 * creator: maigohuang
 * */
namespace App\Helper;

class ApiView extends \EasyLib\ApiView
{
    protected $errorMap = [ 
        'Undefinition' => [-1000, '未定义错误', 400],
        'InvalidateParams' => [-1001, '参数不合法', 400],
        'ErrorNotFoundHandler' => [-1002, '非法请求', 400],
        'InternalError' => [-1003, '服务内部错误', 500],
    ];  
}
