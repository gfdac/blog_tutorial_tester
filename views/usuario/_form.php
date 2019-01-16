<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuario */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuario-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'Nome')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'PlanoID')->textInput() ?>

    <?= $form->field($model, 'CategoriaID')->textInput() ?>

    <?= $form->field($model, 'Endereco')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Latitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Longitude')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Telefone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Celular')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Descricao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Usuario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Senha')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Email')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Site')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Facebook')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'GoogleID')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Imagem')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'Device')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'LastIP')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Saldo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'StatusID')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
