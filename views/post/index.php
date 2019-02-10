<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1>Тест Экшн</h1>

<?php
$form = ActiveForm::begin(['options' => ['id' => 'testForm']]);
echo $form->field($model, 'name') ;
echo $form->field($model, 'email') -> input('email');
echo $form->field($model, 'text') -> textarea(['rows' => 5]);
echo HTML::submitButton('Отправить', ['class' => 'btn btn-success']);

ActiveForm::end();
?>
