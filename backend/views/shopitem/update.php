<?php

use yii\helpers\Html;
use app\models\ShopItem;
use app\models\Shop;

/* @var $this yii\web\View */
/* @var $model app\models\ShopItem */

$this->title = Yii::t('app', 'Update Shop Item: {nameAttribute}', [
    'nameAttribute' => $model->id,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="shop-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'shop' => $shop,
    ]) ?>

</div>
