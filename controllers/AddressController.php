<?php

namespace app\controllers;

use Yii;
use app\models\Address;
use app\models\search\AddressSearchSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

class AddressController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */

    public function actionView($id, $user_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
            'user_id' => $user_id
        ]);
    }

    public function actionCreate()
    {
        $model = new Address();

        if ($model->load(Yii::$app->request->post())) {

            $model->user_id =  Yii::$app->request->get('user_id');
            $model->save();
            return $this->redirect(['//user/view?id='.$model->user_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id, $user_id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'user_id' => $user_id
        ]);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id, $user_id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['//user/view?id='.$user_id]);
    }

    protected function findModel($id)
    {
        if (($model = Address::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
