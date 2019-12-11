<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "adress".
 *
 * @property int $id
 * @property int|null $user_id
 * @property string|null $index
 * @property string|null $country
 * @property string|null $city
 * @property string|null $street
 * @property int|null $house_number
 * @property int|null $flat_number
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'house_number', 'flat_number'], 'default', 'value' => null],
            [['user_id', 'house_number', 'flat_number'], 'integer'],
            [['index', 'country', 'city', 'street'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'index' => 'Index',
            'country' => 'Country',
            'city' => 'City',
            'street' => 'Street',
            'house_number' => 'House Number',
            'flat_number' => 'Flat Number',
        ];
    }
}
