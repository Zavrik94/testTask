<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string|null $login
 * @property string|null $password
 * @property string|null $name
 * @property string|null $surname
 * @property string|null $sex
 * @property string|null $create_date
 * @property string|null $email
 * @property string|null $new_password
 */
class User extends \yii\db\ActiveRecord
{
    private const MALE = 'Male',
        FEMALE = 'Female',
        INDEFINED = 'Not set';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['create_date'], 'safe'],
            //[['login', 'password', 'name', 'surname', 'sex', 'email']],
            [['login'],'string', 'min' => 4, 'max' => 255],
            [['password'],'string', 'min' => 6, 'max' => 255],
            [['name'],'string', 'max' => 255],
            [['login', 'email'], 'unique', 'targetClass' => self::className(), 'message' => '{attribute}:{value} already exists!'],
            [['login', 'name', 'surname', 'email'], 'required'],
            [['password'], 'required','on' => 'create'],
            [['sex'], 'default', 'value' => 'Not set']
            //[['surname'], 'filter'=>'ucfirst'],
            //[['email'], 'unique', 'email'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'login' => 'Login',
            'password' => 'Password',
            'name' => 'Name',
            'surname' => 'Surname',
            'sex' => 'Sex',
            'create_date' => 'Create Date',
            'email' => 'Email',
        ];
    }

    /**
     * @return array
     */
    public function getGender()
    {
        return [
            self::INDEFINED => self::INDEFINED,
            self::MALE => self::MALE,
            self::FEMALE => self::FEMALE
        ];
    }
}
