<?php

namespace app\controllers;

use yii\web\Controller;

class MediaController extends Controller
{
    public function actionAddAjax()
    {
        $this->layout = 'blank';
        return $this->render('add_ajax');
    }

    public function actionUpload()
    {
        sleep(3);
        $upload_handler = new UploadHandler(['script_url' => \Yii::$app->urlManager->createAbsoluteUrl('media/upload')]);
    }
} 