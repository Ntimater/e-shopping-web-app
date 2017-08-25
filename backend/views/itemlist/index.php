<?php

use yii\helpers\Html;
use yii\grid\GridView;






?>


<?php foreach ($shops as $shop): ?>

    <p><?= $shop->shopname ?> </p>
    <?php foreach ($shop->getShopItems() as $item): ?>

        <ul>

             <li><?= $item->item_name ?> , <?= $item->total_price ?> </li>

        </ul>
    <?php endforeach;?>

    <hr>
<?php endforeach; ?>


