<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Author;

class AuthorController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $model = new Author();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            echo Yii::$app->session->setFlash('success', 'Authors deleted');
            return $this->redirect(['author/index']);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionDelete($id)
    {
        $model = Author::findOne($id);
        $model->delete();
        Yii::$app->session->setFlash('success', 'Authors updated');
        return $this->redirect(['index']);
    }

    public function actionIndex()
    {
        $authorsList = Author::find()->all();
        return $this->render('index', [
            'authorsList' => $authorsList,
        ]);
    }

    public function actionUpdate($id)
    {
        $model = Author::findOne($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            echo Yii::$app->session->setFlash('success', 'Authors updated');
            return $this->redirect(['author/index']);
        }
        return $this->render('update', [
            'model' => $model,
        ]);
    }

}
