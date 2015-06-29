<?php

namespace dungphanxuan\leptureeditor;

use yii\web\AssetBundle;

class LeptureEditorAsset extends AssetBundle
{
    public $sourcePath = '@dungphanxuan/froalaeditor/assets';
    public $js = [
        'js/froala_editor.min.js',

    ];
    public $css = [
        'css/froala_editor.min.css',
    ];

}
