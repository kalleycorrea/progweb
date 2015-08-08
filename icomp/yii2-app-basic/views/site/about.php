<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        Esta é a aplicação da prova final da disciplina Programação Web (UFAM/2015), professor David Fernandes, aluno Kalley Correa de Oliveira.
    </p>
    <p>Data Atual: <?= $data ?></p>

    <!--<code><?= __FILE__ ?></code>-->
</div>
