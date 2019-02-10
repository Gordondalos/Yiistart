<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>

<h1>Тест Экшн</h1>

<?php
$form = ActiveForm::begin(['options' => ['id' => 'testForm']]);
echo $form->field($model, 'name') -> label('Имя');
echo $form->field($model, 'email') -> label('Мыло') -> input('email');
echo $form->field($model, 'text') -> label('Ваш текст') -> textarea(['rows' => 5]);
echo HTML::submitButton('Отправить', ['class' => 'btn btn-success']);

ActiveForm::end();
?>
