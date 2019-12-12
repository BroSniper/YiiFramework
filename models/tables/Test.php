<?php

namespace app\models\tables;

use Yii;

/**
 * This is the model class for table "test".
 *
 * @property int $id
 * @property string|null $content
 * @property string|null $description
 */
class Test extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'test';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['content'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'content' => 'Content',
            'description' => 'Description',
        ];
    }
}
