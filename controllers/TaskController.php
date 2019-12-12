<?php

namespace app\controllers;

use app\models\tables\Tasks;
use yii\web\Controller;

class TaskController extends Controller
{
    public function actionIndex()
    {
        $model = Tasks::find()->all();
        return $this->render('taskList', ['model' => $model]);
    }

    public function actionOne()
    {
        return $this->render('one');
    }
}