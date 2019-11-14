<?php

use yii\helpers\Html;

?>
<form name="myform" action="#" method="post" onsubmit="return save()">
    <p>
        <?= Html::input('hidden', 'content', "", ['id' => 'content']) ?>
    </p>
    <input type='button' value='Жирный' class='btn btn-default' onclick='setBold()' />
    <input type='button' value='Курсив' class='btn btn-default' onclick='setItal()' />
    <input type='button' value='Подчеркивание' class='btn btn-default' onclick='setUnder()' />
    <br />
    <iframe scrolling='no' frameborder='no' src='#' id='frameId' name='frameId'></iframe>

    <p>
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success submit']) ?>
    </p>
</form>
