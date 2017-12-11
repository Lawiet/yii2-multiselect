# yii2-multiselect

[![Latest Version](https://img.shields.io/github/release/lawiet/yii2-multiselect.svg?style=flat-square)](https://github.com/lawiet/yii2-multiselect/releases)
[![Software License](http://img.shields.io/badge/license-BSD3-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/lawiet/yii2-multiselect.svg?style=flat-square)](https://packagist.org/packages/lawiet/yii2-multiselect)


## Install

Via Composer

```bash
$ composer require "lawiet/yii2-multiselect:~1.0.1"
```

or add

```
"lawiet/yii2-multiselect": "~1.0.1"
```

to the require section of your `composer.json` file.


## Usage

On your view file.

```php

<?php
use lawiet\multiselect\MultiSelectBoxWidget;
?>

<?= MultiSelectBox::widget([
    'options' => [
        'multiple' => 'multiple',
    ],
    'data' => $cities,
    'model' => $model,
    'attribute' => 'cities',
]) ?>

```

For more options, visit: http://loudev.com/
