<?php
/**
 * Created by PhpStorm.
 * User: konovalenko
 * Date: 18.08.2016
 * Time: 15:37
 */

namespace app\models;

use Yii;
use yii\base\Model;

class EntryForm extends Model
{
    public $name;
    public $email;

    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            ['email', 'email'],
        ];
    }
}