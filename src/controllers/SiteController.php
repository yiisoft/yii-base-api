<?php

namespace yii\app\controllers;

use Yiisoft\Yii\Rest\Controller;

class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return strings
     */
    public function actionIndex()
    {
        return ['data' => 'hello world!'];
    }
}
