<?php
/**
 * @link https://github.com/LAV45/yii2-translated-behavior
 * @copyright Copyright (c) 2015 LAV45!
 * @author Alexey Loban <lav451@gmail.com>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace lav45\widget;

use yii\web\AssetBundle;

class JsTreeDefaultThemeAsset extends AssetBundle
{
    public $sourcePath = '@bower/jstree/dist';

    public $css = [
        'themes/default/style.min.css',
    ];
}