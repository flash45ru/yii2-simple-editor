Yii2-simple-editor
==========
Простой редактор текста (Жирный/Курсив/Подчеркивание)

Установка
---------------------------------
Выполнить команду

```
php composer require flash45ru/yii2-simple-editor "@dev"
```

Или добавить в composer.json

```
"flash45ru/yii2-simple-editor": "@dev",
```

И выполнить

```
php composer update
```

Виджет
---------------------------------
Работа с текстом осуществляется через виджет. 

Добавьте в _form.php внутри формы CRUDа вашей модели.

Виджету передается параметр:
$model->attribute => атрибут модели, по умолчанию null;

```php
<?= \flash45\simpleEditor\Editor::widget(['attribute' => $model->attribute]); ?>
```
