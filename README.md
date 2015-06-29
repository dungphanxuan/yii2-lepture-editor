Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist dungphanxuan/yii2-lepture-editor "*"
```

or add

```
"dungphanxuan/yii2-lepture-editor": "dev-master"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?php echo dungphanxuan\leptureeditor\LeptureEditorWidget::widget([
    'name' => 'content',
    'options'=>[// html attributes
        'id'=>'content'
    ],
    'leptureOptions' => [
                        'toolbar' => false
                    ]
]);; ?>
```

or use with a model:

```php
<?php echo dungphanxuan\leptureeditor\LeptureEditorWidget::widget([
    'model' => $model,
    'attribute' => 'content',
    'options'=>[// html attributes
        'id'=>'content'
    ],
    'leptureOptions' => [
                        'toolbar' => false
                    ]
]);; ?>
```

For full details on usage, see the [documentation](https://github.com/lepture/editor).

License
----

MIT. Copyright (c) 2013 - 2014 by Hsiaoming Yang.
Extends and develope by dungphanxuan
