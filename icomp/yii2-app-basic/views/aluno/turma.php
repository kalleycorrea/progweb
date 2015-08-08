<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

$this->title = 'Alunos de '.$ano;
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="aluno-view">
    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $alunos,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'matricula',
            'nome',
            'id_curso',
            'ano_ingresso',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
