<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

?>

<h1>Тест Экшн</h1>

<?php
if (Yii::$app->session->hasFlash('success')) {
    ?>
    <div class="alert alert-success alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <strong>Warning!</strong> <?= Yii::$app->session->getFlash('success');?>
    </div>
    <?php
}
if (Yii::$app->session->hasFlash('error')) {
    ?>
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
        <strong>Warning!</strong> <?= Yii::$app->session->getFlash('error');?>
    </div>
    <?php

}

$form = ActiveForm::begin(['options' => ['id' => 'testForm']]);
echo $form->field($model, 'name');
echo $form->field($model, 'email')->input('email');
echo $form->field($model, 'text')->textarea(['rows' => 5]);
echo HTML::submitButton('Отправить', ['class' => 'btn btn-success']);

ActiveForm::end();
?>
