<?php

namespace codexten\yii\web\assets\vue;

use yii\web\AssetBundle;
use yii\web\View;

class AxiosAsset extends AssetBundle
{
    public $sourcePath = '@npm/axios/dist';
    public $js = [
        YII_ENV_DEV ? 'vue.js' : 'vue.min.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
