<?php

namespace Yiisoft\Yii\Base\Api\Controllers;

use Yiisoft\Yii\Rest\Controller;

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
