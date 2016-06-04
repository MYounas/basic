<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tblorders".
 *
 * @property integer $ID
 * @property integer $colOrder
 * @property string $First_Name
 * @property string $Last_Name
 * @property integer $Phone
 * @property string $Email
 * @property string $Status
 * @property string $Payment
 * @property string $Type
 * @property string $Created_Date
 * @property string $Updated_Date
 */
class Tblorders extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tblorders';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['colOrder', 'First_Name', 'Last_Name', 'Phone', 'Email', 'Status', 'Payment', 'Type', 'Created_Date', 'Updated_Date'], 'required'],
            [['colOrder', 'Phone'], 'integer'],
            [['Status', 'Payment', 'Type'], 'string'],
            [['Created_Date', 'Updated_Date'], 'safe'],
            [['First_Name', 'Last_Name', 'Email'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'colOrder' => 'Col Order',
            'First_Name' => 'First  Name',
            'Last_Name' => 'Last  Name',
            'Phone' => 'Phone',
            'Email' => 'Email',
            'Status' => 'Status',
            'Payment' => 'Payment',
            'Type' => 'Type',
            'Created_Date' => 'Created  Date',
            'Updated_Date' => 'Updated  Date',
        ];
    }
}
