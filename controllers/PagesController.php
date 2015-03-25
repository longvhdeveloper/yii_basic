<?php

namespace app\controllers;
use yii\web\Controller;


class PagesController extends Controller
{
    public function actionAdd()
    {
        return $this->render('add');
    }
} 