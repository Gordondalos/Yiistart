<h1>Show action</h1>
<button class="btn btn-success" id="btn">Кликни меня</button>

<?php
// подключение только на в одном файле, также есть для стилей registerCSSFile
//$this->registerJsFile('@web/js/my-script.js', ['depends' => 'yii\web\YiiAsset',]);

$js=<<<JS
$('#btn').on('click', function(){
    console.log('клик');
    $.ajax({
    url: 'index.php?r=post/index',
    method: 'GET',
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



