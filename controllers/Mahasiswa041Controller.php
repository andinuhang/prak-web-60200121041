<?php

namespace app\controllers;
use app\models\Mahasiswa041;
use app\widgets\Alert;
use yii\data\ActiveDataProvider;
use yii;

class Mahasiswa041Controller extends \yii\web\Controller
{
    public function actionIndex()
    {   
        $query = Mahasiswa041::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        return $this->render('index', ['dataProvider' => $dataProvider
        ]);
    }

    public function actionTambah()
    {
        $mahasiswa041 = new Mahasiswa041;
        $randomNumber = mt_rand(100, 999); 
        $mahasiswa041 -> nim041 = '60200121041-' . $randomNumber;
        $mahasiswa041 -> nama041 = 'Andi Nuhang';
        $mahasiswa041 -> kelas041 = 'C';
        $mahasiswa041 -> status041 = 'Baru'; 
        if ($mahasiswa041->save()) {
            Yii::$app->session->setFlash('success', 'Data Ditambah');
            return $this->redirect(['index']);
        }
    }

    public function actionUpdate($id = '')
    {
        $mahasiswa041 = Mahasiswa041::findOne(['id041' => $id]);
        $mahasiswa041 -> status041 = 'Update';
        $mahasiswa041 -> kelas041 = 'A';
        if ($mahasiswa041->save()) {
            Yii::$app->session->setFlash('success', 'Data Ditambah');
            return $this->redirect(['index']);
        }
    }
    public function actionDelete($id = '')
    {
        $mahasiswa041 = Mahasiswa041::findOne(['id041' => $id]);
        if ($mahasiswa041->delete()) {
            Yii::$app->session->setFlash('danger', 'Data Terhapus');
            return $this->redirect(['index']);
        }
    }
    public function actionView($id)
    {
        $mahasiswa041 = Mahasiswa041::findOne(['id041' => $id]);
        return $this->render('view', ['model' => $mahasiswa041]);
    }

}