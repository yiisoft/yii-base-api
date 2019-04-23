<?php

namespace yii\app\controllers;

use Yiisoft\Rest\Controller;

class SiteController extends Controller
{
    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return ['data' => 'hello world!'];
    }
}
