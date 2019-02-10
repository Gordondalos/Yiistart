<?php $this->title = 'Огого' ?>

<?php
use app\components\MyWidgets;
?>

<h1>Show action <?=$count?></h1>
<button class="btn btn-success" id="btn">Кликни меня</button>

<?php
//echo MyWidgets::widget(['name'=> 'Вася']);
//?>

<? MyWidgets::begin()?>
<h1>привет бублик</h1>
<? MyWidgets::end()?>

<?php
//echo '<pre>';
//print_r($cats);
//echo '</pre>';

//echo count($cats[0]->products)
?>


<?php
echo '<br>';
//foreach ($cats->products as $index => $cat) {
//    echo '('.$index.')';
//    echo $cat['title'].'<br>';}
?>

<?php
// подключение только на в одном файле, также есть для стилей registerCSSFile
//$this->registerJsFile('@web/js/my-script.js', ['depends' => 'yii\web\YiiAsset',]);

$js = <<<JS
$('#btn').on('click', function(){
    console.log('клик');
    $.ajax({
    url: 'index.php?r=post/index',
    method: 'POST',
    data: {'qwe':'123'},
    success: function(data) {
      console.log(data);
    }
    })
})
JS;

$this->registerJs($js);

// позиция может быть View::POS_READY (BEGIN, END)

?>



