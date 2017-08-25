<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\jui\DatePicker;
use yii\helpers\ArrayHelper;
use app\models\ShopItem;
use app\models\Shop;

/* @var $this yii\web\View */
/* @var $model app\models\ShopItem */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="shop-item-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'shop_id')->textInput() ?>

    <?= $form->field($model, 'item_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'received_date')->widget(\yii\jui\DatePicker::classname(),[
    'language' => 'en',
    'dateFormat' => 'yyyy-MM-dd',])?>

    <?= $form->field($model, 'sold_date')->widget(\yii\jui\DatePicker::classname(),[
    'language' => 'en',
    'dateFormat' => 'yyyy-MM-dd',
]) ?>

    <?= $form->field($model, 'unity_price')->textInput() ?>

    <?= $form->field($model, 'total_price')->textInput() ?>

    <?= $form->field($model, 'status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'shop_name')->dropDownList(arrayHelper::map($shop,'id','shopname')) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>


    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
