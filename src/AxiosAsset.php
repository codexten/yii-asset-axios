<?php

namespace codexten\yii\web\assets\axios;

use yii\web\AssetBundle;
use yii\web\View;

class AxiosAsset extends AssetBundle
{
    public $sourcePath = '@npm/axios/dist';
    public $js = [
        YII_ENV_DEV ? 'axios.js' : 'axios.min.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}
