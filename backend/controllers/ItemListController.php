<?php

namespace backend\controllers;
/*
use app\models\Item;
use app\models\Shop;
use app\models\ShopItem;
use Yii;
use app\models\ItemList;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\LoginForm;*/



use Yii;
use app\models\ShopItem;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Shop;
use yii\filters\AccessControl;

use common\models\LoginForm;


class ItemlistController extends Controller
{

    public function behaviors()

    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index','view'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['', ''],
                        'roles' => ['?'],
                    ],

                    [
                        'allow' => true,
                        'actions' => ['index','view'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }


    public function actionIndex()
    {
        $shops = Shop::find()->all();
        $shop_items = ShopItem::find()->all();

        return $this->render('index', [
            'shops' => $shops,
            'shop_items' =>$shop_items]
        );
    }

}