<?php

namespace backend\controllers;

use Yii;
use app\models\ShopItem;
use yii\data\ActiveDataProvider;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\models\Shop;
use yii\filters\AccessControl;

use common\models\LoginForm;

/**
 * ShopitemController implements the CRUD actions for ShopItem model.
 */
class ShopitemController extends Controller
{
    /**
     * @inheritdoc
     */

    public function behaviors()

    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['index', 'delete', 'create','update','view'],
                'rules' => [
                    [
                        'allow' => true,
                        'actions' => ['index', 'view'],
                        'roles' => ['?'],
                    ],

                    [
                        'allow' => true,
                        'actions' => ['index','create','update','view'],
                        'roles' => ['@'],
                    ],
                ],
            ],
        ];
    }
    /**
     * Lists all ShopItem models.
     * @return mixed
     */
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => ShopItem::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single ShopItem model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new ShopItem model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new ShopItem();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $shop =Shop::find()->all();

            return $this->render('create', [
                'model' => $model,
                'shop' => $shop
            ]);
        }
    }

    /**
     * Updates an existing ShopItem model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            $shop =Shop::find()->all();

            return $this->render('update', [
                'model' => $model,

                'shop' => $shop
            ]);
        }
    }

    /**
     * Deletes an existing ShopItem model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the ShopItem model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return ShopItem the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = ShopItem::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
