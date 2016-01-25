<?php
/**
 * @link https://github.com/LAV45/yii2-translated-behavior
 * @copyright Copyright (c) 2015 LAV45!
 * @author Alexey Loban <lav451@gmail.com>
 * @license http://opensource.org/licenses/BSD-3-Clause
 */

namespace lav45\widget;

use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\Widget;

/**
 * JsTree widget is a Yii2 wrapper for the jsTree jQuery plugin.
 *
 * @author Alexey Loban <lav451@gmail.com>
 * @since 1.0
 * @see http://jstree.com
 */
class JsTree extends Widget
{
    /**
     * @var array the HTML attributes for the input tag.
     */
    public $options = [];
    /**
     * @var array the options for the JS plugin.
     */
    public $clientOptions = [];
    /**
     * @var array the event handlers for the JS plugin.
     */
    public $clientEvents = [];
    /**
     * @var string namespace to asset class
     */
    public $theme = '\lav45\widget\JsTreeDefaultThemeAsset';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->registerAssets();
        $this->registerPlugin();
        $this->registerClientEvents();

        return Html::tag('div', '', $this->options);
    }

    /**
     * Registers the needed assets
     */
    protected function registerAssets()
    {
        JsTreeAsset::register($this->getView());
    }

    /**
     * Registers a specific Bootstrap plugin and the related events
     */
    protected function registerPlugin()
    {
        $options = Json::encode($this->clientOptions);
        $this->getView()->registerJs("jQuery('#{$this->options['id']}').jstree($options);");
    }

    /**
     * Registers JS event handlers that are listed in [[clientEvents]].
     */
    protected function registerClientEvents()
    {
        if (!empty($this->clientEvents)) {
            $js = [];
            foreach ($this->clientEvents as $event => $handler) {
                $js[] = "jQuery('#{$this->clientOptions['id']}').on('$event', $handler);";
            }
            $this->getView()->registerJs(implode("\n", $js));
        }
    }
}
