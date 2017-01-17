<?php
/**
 * creator: maigohuang
 */
namespace App\Controller;

use Slim\Http\Request;
use Slim\Http\Response;

class TestController extends \EasyLib\BaseController
{
    public function test(Request $request, Response $response, $args)
    {
        $data = [
            'Hello' => 'World',
            'World' => $args['service']
        ];
        return $this->view->render($data, 200);
    }
}
