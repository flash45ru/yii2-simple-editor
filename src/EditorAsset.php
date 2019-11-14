<?php

namespace flash45\simpleEditor;

use yii\web\AssetBundle;

class EditorAsset extends AssetBundle
{
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public $js = [
        'js/scripts.js',
    ];
    public $css = [
        'css/styles.css',
    ];

    public function init()
    {
        $this->sourcePath = dirname(__DIR__) . '/web';
        parent::init();
    }
}