<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Aluno */

//$this->title = $model->id;
$this->title = $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Alunos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="aluno-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'matricula',
            'nome',
            'sexo',
            'id_curso',
            'ano_ingresso',
        ],
    ]) ?>

    <p><?php echo "Em nossa base, existem ".$count_alunos." alunos de ".$model->ano_ingresso."."?></p>
    <p><?= Html::a('Listar alunos de ' . $model->ano_ingresso, ['turma', 'ano' => $model->ano_ingresso]) ?></p>

</div>
