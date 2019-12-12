<?php


namespace app\controllers;


use app\models\tables\Tasks;
use app\models\tables\Test;
use yii\web\Controller;

class DbController extends Controller
{
    public function actionIndex()
    {
        $db = \Yii::$app->db;
        /*$db->createCommand(
            "INSERT INTO test(content, description)
              VALUES ('test1', 'ksdkjfklsdfjskl')"
        )->execute();*/

        /*$result = $db->createCommand(
            "SELECT * FROM test"
        )->queryAll();*/

        /*$result = $db->createCommand(
            "SELECT * FROM test WHERE id = 2"
        )->queryOne();*/

        /*$result = $db->createCommand(
            "SELECT COUNT(*) FROM test"
        )->queryScalar();*/


        /*$result = $db->createCommand(
            "SELECT id FROM test"
        )->queryColumn();*/

        $id = 2;
        $result = $db->createCommand(
            "SELECT * FROM test WHERE id = :id"
        )->bindValues([
            ":id" => $id
        ])
            ->queryOne();
        var_dump($result);
        exit;
    }

    public function actionAr()
    {
        //CREATE
        // $model = new Tasks([
        //     'name' => 'Task 1',
        //     'description' => 'kdjhjfghut',
        //     'creator_id' => 1,
        //     'responsible_id' => 2,
        //     'deadline' => date("Y-m-d"),
        //     'status_id' => 1,
        // ]);
        // $model->save();

        //SELECT

        /*$model = Tasks::findOne(['name' => 'Task 3']);*/
        //$models = Tasks::findAll([2, 3]);
        //$models = Tasks::find()->all();

        //UPDATE
        // $model = Tasks::findOne(2);
        // $model->description = 'Updated';
        // $model->save();

        //DELETE
      /*  $model = Tasks::findOne(3);
        $model->delete();*/

//      Tasks::deleteAll('id > :id', [':id' => 3]);

        //SELECT * FROM tasks
       /* $query = Tasks::find()
            ->select('name, description')
            ->where(['>', 'id', 3]);

        var_dump($query->all());*/
       /** @var Tasks $task */
        $task = Tasks::findOne(2);
        var_dump($task->status);
        exit;
    }

}