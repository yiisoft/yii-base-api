<?php

return [
    'app' => [
        'controllerNamespace' => yii\app\controllers::class,
    ],
    'user' => [
        'identityClass' => yii\app\models\User::class, // User must implement the IdentityInterface
        'enableAutoLogin' => false,
        'enableSession' => false,
        'loginUrl' => null,
    ],
    'request' => [
        'enableCookieValidation' => false,
    ],
    'urlManager' => [
        'enablePrettyUrl' => true,
        'showScriptName' => false,
    ],
    'session' => false,
];
