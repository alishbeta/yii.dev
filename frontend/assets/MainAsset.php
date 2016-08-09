<?php
namespace frontend\assets;

use yii\base\View;
use yii\web\AssetBundle;

class MainAsset extends AssetBundle{

    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/style.css',
        'css/datepicker.min.css'
    ];

    public $js = [
      'js/datepicker.min.js',
        'js/init.js',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset'
    ];

}
