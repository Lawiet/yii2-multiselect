<?php
/**
 * @link      https://github.com/lawiet/yii2-multiselect
 * @copyright Copyright (c) 2016 Wanderson Bragança
 * @license   https://github.com/lawiet/yii2-multiselect/blob/master/LICENSE
 */

namespace lawiet\multiselect;

use yii\web\AssetBundle;

/**
 * Asset bundle for multiselect Widget
 *
 * @author Jorge Gonzalez <ljorgelgonzalez@gmail.com>
 */
class MultiSelectAsset extends AssetBundle
{
    public $sourcePath = __DIR__ . '/assets';

    public $css = [
        'css/multi-select.css'
    ];

    public $js = [
        'js/jquery.multi-select.js'
    ];

    public $depends = [
        'yii\bootstrap\BootstrapPluginAsset'
    ];
}
