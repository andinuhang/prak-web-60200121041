<?php 
    use yii\widgets\DetailView;
    use yii\helpers\Html;
?> 

<?=
    Html::a('kembali', ['index'], ['class' => 'btn btn-primary'])
?>
<br>
<br>
<?= 
    DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id041',
            'nim041',
            'nama041',
            'kelas041',
            'status041',
        ]
    ])
?>