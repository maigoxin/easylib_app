```
composer create-project --no-interaction --stability=dev maigoxin/easylib_app my-app
```

```
<?php
/**
 * creator: maigoxin
 */
namespace Ksyun\Service;

use Ksyun\Base\V4Curl;
class Iam extends V4Curl 
{
    protected function getConfig()
    {
        return [
            'host' => 'https://iam.api.ksyun.com',
            'timeout' => 5,
            'config' => [
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => 'cn-beijing-6',
                    'service' => 'iam',
                ],
            ],
        ];
    }

    protected $apiList = [
        'CreateUser' => [
            'url' => '/',
            'method' => 'get',
            'config' => [
                'query' => [
                    'Action' => 'CreateUser',
                    'Version' => '2015-11-01',
                ],
            ],
        ],
        ...
```
