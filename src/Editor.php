<?php

namespace flash45\simpleEditor;

use Yii;
use flash45\simpleEditor\EditorAsset;

class Editor extends \yii\base\Widget
{
    public $attribute = null;

    public function run()
    {
        $view = $this->getView();
        /** @var EditorAsset $asset */
        $asset = Yii::$container->get(EditorAsset::className());
        $asset = $asset::register($view);

        return $this->render('index', [
            'attribute' => $this->attribute,
        ]);
    }
}