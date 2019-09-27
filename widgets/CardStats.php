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

class Cardstats extends Widget
{
    const COLOR_ROSE = 'card-header-rose';
    const COLOR_INFO = 'card-header-info';
    const COLOR_PRIMARY = 'card-header-primary';
    const COLOR_SUCCESS = 'card-header-success';
    const COLOR_WARNING = 'card-header-warning';
    const COLOR_DANGER = 'card-header-danger';

    const TYPE_MUTED = 'text-muted';
    const TYPE_INFO = 'text-info';
    const TYPE_WARNING = 'text-warning';
    const TYPE_DANGER = 'text-danger';
    const TYPE_PRIMARY = 'text-primary';
    const TYPE_SUCCESS = 'text-success';


    /**
     * @var string color for header
     */
    public $color = 'card-header-info';

    /**
     * @var string headerIcon for header
     */
    public $headerIcon = 'weekend';

    /**
     * @var string footerIcon for footer
     */
    public $footerIcon = 'send';

    /**
     * @var string title of header
     */
    public $title;

    /**
     * @var string|array title of header
     */
    public $subtitle;

    /**
     * @var string link route
     */
    public $footerUrl = '#';

    /**
     * @var string short description of link
     */
    public $footerText = '';

    /**
     * @var string color for footerText
     */
    public $footerTextType = 'text-info';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        Html::addCssClass($this->options, 'card card-stats');
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
            echo Html::beginTag('div', ['class'=>'card-header '.$this->color.' card-header-icon']);
                echo Html::tag(
                    'div',
                    Html::tag('i', $this->headerIcon,['class'=>'material-icons']),
                    ['class' => 'card-icon']
                );
                echo Html::tag('p', $this->title,['class'=>'card-category']). Html::tag('h3', $this->subtitle, ['class'=>'card-title']);
            echo Html::endTag('div');
            echo Html::beginTag('div', ['class'=>'card-footer']);
                echo Html::tag(
                    'div',
                    Html::tag('i', $this->footerIcon,['class'=>'material-icons '.$this->footerTextType]) . Html::a($this->footerText, $this->footerUrl, ['class' => $this->footerTextType]),
                    ['class' => 'stats']
                );
            echo Html::endTag('div');
        echo Html::endTag('div');
        parent::run();
    }
}