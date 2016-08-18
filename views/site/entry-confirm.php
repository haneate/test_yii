<?php
/**
 * Created by PhpStorm.
 * User: konovalenko
 * Date: 18.08.2016
 * Time: 15:46
 */

 use yii\helpers\Html;
 ?>
 <p>You have entered the following information:</p>

 <ul>
     <li><label>Name</label>: <?= Html::encode($model->name) ?></li>
     <li><label>Email</label>: <?= Html::encode($model->email) ?></li>
 </ul>