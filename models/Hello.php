<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "hello".
 *
 * @property integer $id
 * @property string $fgf
 */
class Hello extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'hello';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fgf'], 'required'],
            [['fgf'], 'string', 'max' => 35],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fgf' => 'Fgf',
        ];
    }
}
