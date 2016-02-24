<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "customers".
 *
 * @property integer $CustomerId
 * @property string $FirstName
 * @property string $LastName
 */
class Customers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'customers';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['CustomerId', 'FirstName', 'LastName'], 'required'],
            [['CustomerId'], 'integer'],
            [['FirstName', 'LastName'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'CustomerId' => 'Customer ID',
            'FirstName' => 'First Name',
            'LastName' => 'Last Name',
        ];
    }
}
