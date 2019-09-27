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

class Card extends Widget
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
     * @var string id, MUST BE INITIATE AND UNIQUE between card in the same page
     */
    public $id;

    /**
     * @var string color, background color for header
     */
    public $color = 'card-header-primary';

    /**
     * @var string headerIcon, icon in header
     */
    public $headerIcon = 'room';

    /**
     * @var bool is collapsable
     */
    public $collapsable = false;

    /**
     * @var string title of the card
     */
    public $title;

    /**
     *  @var bool is showing footer section
     */
    public $showFooter = 'false';

    /**
     * @var string footerContent, text to show in footer. Must be initiated while $showFooter = TRUE
     */
    public $footerContent = '';

    /**
     * @var string titleTextType, color for footer text
     */
    public $titleTextType = 'text-muted';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        Html::addCssClass($this->options, 'card');
        /* if (!empty($this->color)) {
            Html::addCssClass($this->options, $this->color);
        } */
        echo Html::beginTag('div', $this->options);
            echo Html::beginTag('div', ['class'=>'card-header '.$this->color.' card-header-icon']);
                echo Html::tag(
                    'div',
                    Html::tag('i', $this->headerIcon,['class'=>'material-icons'/* ,'data-toggle'=>'collapse','data-target'=>'#1', 'aria-expanded'=>false, 'aria-controls'=>'1' */]),
                    ['class' => 'card-icon']
                );
                echo Html::tag(
                    'h4', 
                    $this->title.self::isCollapsable(),
                    ['class'=>'card-title '.$this->titleTextType]);
                // $this->collapsable ? Html::tag('h4', $this->title, ['class'=>'card-title '.$this->titleTextType]).Html::a(Html::tag('i','minimize',['class'=>'material-icons']),'#1',['class'=>$this->titleTextType.' pull-right','data-toggle'=>'collapse','aria-expanded'=>false, 'aria-controls'=>'1']) : '';
            echo Html::endTag('div');
            echo Html::beginTag('div', ['class'=>'card-body']);
                echo Html::beginTag('div', ['class'=>'body-content '.($this->collapsable ? 'collapse' : ''), 'id'=>$this->id]);
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo Html::endTag('div');
        echo Html::endTag('div');
        if ($this->showFooter) {
            echo Html::beginTag('div', ['class'=>'card-footer']);
                echo Html::tag(
                    'div',
                    $this->footerContent,
                    ['class'=>'pull-right']
                );
            echo Html::endTag('div');
        }
        echo Html::endTag('div');
        parent::run();
    }

    protected function isCollapsable()
    {
        return $this->collapsable ? Html::a(Html::tag('i','minimize',['class'=>'material-icons']),'#'.$this->id,['class'=>$this->titleTextType.' pull-right collapsed','data-toggle'=>'collapse','aria-expanded'=>'false', 'aria-controls'=>'1']) : '';
    }
}