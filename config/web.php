<?php

return [
    'app' => [
        'controllerNamespace' => Yiisoft\Yii\Base\Api\Controllers::class,
    ],
    'user' => [
        'identityClass'   => Yiisoft\Yii\Base\Api\Models\User::class, // User must implement the IdentityInterface
        'enableAutoLogin' => false,
        'enableSession'   => false,
        'loginUrl'        => null,
    ],
    'request' => [
        'enableCookieValidation' => false,
    ],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName'  => false,
    ],
];
