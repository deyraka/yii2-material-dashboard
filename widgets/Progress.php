<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-adminlte/blob/master/LICENSE
 * @link http://adminlte.yiister.ru
 */

namespace deyraka\materialdashboard\widgets;

//use rmrevin\yii\fontawesome\component\Icon;
use yii\bootstrap\Widget;
use yii\helpers\Html;

class Progress extends Widget
{
    const COLOR_DEFAULT = '';
    const COLOR_INFO = 'bg-info';
    const COLOR_SUCCESS = 'bg-success';
    const COLOR_WARNING = 'bg-warning';
    const COLOR_DANGER = 'bg-danger';

    const TYPE_MUTED = 'text-muted';
    const TYPE_INFO = 'text-info';
    const TYPE_WARNING = 'text-warning';
    const TYPE_DANGER = 'text-danger';
    const TYPE_PRIMARY = 'text-primary';
    const TYPE_SUCCESS = 'text-success';

    /**
     * @var string color, background color
     */
    public $color = self::COLOR_DEFAULT;

    /**
     * @var string isBarStrip, fill bar with strip pattern
     */
    public $isBarStrip = false;

    /**
     * @var string isBarAnimated, add animation for bar
     */
    public $isBarAnimated = false;

    /**
     * @var string title bar
     */
    public $title;

    /**
     * @var string value for bar lenght
     */
    public $value;

    /**
     * @var string titleTextType, color for title bar
     */
    public $titleTextType = 'text-muted';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        Html::addCssClass($this->options, 'progress-container ');
        /* if (!empty($this->color)) {
            Html::addCssClass($this->options, $this->color);
        } */
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo Html::beginTag('div', $this->options);
            echo Html::tag('span', $this->title,['class'=>'progress-badge '.$this->titleTextType]);
            echo Html::beginTag('span', ['class'=>'progress']);
                echo Html::tag('div',$this->value.'%',['class'=>'progress-bar '.($this->isBarStrip ? 'progress-bar-striped ' : '').($this->isBarAnimated ? 'progress-bar-animated ' : '').$this->color, 'role'=>'progressbar', 'aria-valuenow'=>$this->value, 'aria-valuemin'=>'0', 'aria-valuemax'=>'100', 'style'=>'width:'.$this->value.'%']);
            echo Html::endTag('span');
        echo Html::endTag('div');
        parent::run();
    }
}