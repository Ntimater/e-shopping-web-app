<?php

use yii\helpers\Html;
use app\models\ShopItem;
use app\models\Shop;

/* @var $this yii\web\View */
/* @var $model app\models\ShopItem */

$this->title = Yii::t('app', 'Create Shop Item');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Shop Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="shop-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'shop' => $shop,
    ]) ?>

</div>
 