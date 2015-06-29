<?php

namespace dungphanxuan\leptureeditor;

use yii\web\AssetBundle;
use yii;
class LeptureEditorAsset extends AssetBundle
{
    public $sourcePath = '@dungphanxuan/leptureeditor/assets';
    public $basePath = '@webroot/assets';
    public $js = [
        'js/filepicker.js',
        'js/editor.js',
        'js/marked.js',
        'js/zepto.min.js',
    ];
    public $css = [
        'css/editor.css',
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
    public function init() {
        Yii::setAlias('@leptureeditor', __DIR__);
        return parent::init();
    }

}
