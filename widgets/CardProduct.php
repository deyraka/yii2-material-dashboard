<?php
/**
 * @copyright Copyright (c) 2015 Yiister
 * @license https://github.com/yiister/yii2-adminlte/blob/master/LICENSE
 * @link http://adminlte.yiister.ru
 */

namespace deyraka\materialdashboard\widgets;

use yii\bootstrap\Widget;
use yii\helpers\Html;
use yii\helpers\Url;

class CardProduct extends Widget
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
    public $optione = ['class'=>''];

    /**
     * @var string image for header
     */
    public $image = 'https://www.crockerriverside.org/sites/main/files/imagecache/pod/main-images/camera_lense_0.jpeg';

    /**
     * @var string hiddenIcon, for button behind the image
     */
    public $hiddenIcon = 'near_me';

    /**
     * @var string hiddenText, for button behind the image
     */
    public $hiddenText = 'Check out!';

    /**
     * @var string hiddenTooltip, for button behind the image
     */
    public $hiddenTooltip = 'Go check for detail';

    /**
     * @var string url for button behind the image or url inside image
     */
    public $url = '#';

    /**
     * @var string title of body content
     */
    public $title;

    /**
     * @var string description of body content
     */
    public $description;

    /**
     * @var string footerTextLeft for footer text in left side
     */
    public $footerTextLeft = '';

    /**
     * @var string footerTextRight for footer text in right side
     */
    public $footerTextRight = '';

    /**
     * @var string footerTextType, type text (color) for footer text
     */
    public $footerTextType = 'text-info';

    /**
     * @inheritdoc
     */
    public function init()
    {
        parent::init();
        
        Html::addCssClass($this->optione, 'card card-product');
        /* if (!empty($this->color)) {
            Html::addCssClass($this->options, $this->color);
        } */
    }

    /**
     * @inheritdoc
     */
    public function run()
    {
        echo Html::beginTag('div', ['class'=>'card card-product', 'data-count'=>rand(10,100)]);
            echo Html::beginTag('div', ['class'=>'card-header card-header-image', 'data-header-animation'=>'true']);
                echo Html::a(Html::img($this->image,['class'=>'img','alt'=>'preview image']), $this->url);
            echo Html::endTag('div');
            echo Html::beginTag('div', ['class'=>'card-body']);
                echo Html::tag(
                    'div',
                        Html::a(
                            Html::tag('i', $this->hiddenIcon ,['class'=>'material-icons']). ' '.$this->hiddenText , 
                            $this->url,
                            ['class' => 'btn btn-danger btn-link', 'rel'=>"tooltip", 'data-placement'=>"bottom", 'title'=>"", 'data-original-title'=>$this->hiddenTooltip, 'aria-describedby'=>"tooltip".rand(0,40000)]
                        ),
                    ['class' => 'card-actions text-center']
                );
                echo Html::tag(
                    'h4',
                    $this->title,
                    ['class' => 'card-title '.$this->footerTextType]
                );
                echo Html::tag(
                    'div',
                    $this->description,
                    ['class' => 'card-description']
                );
            echo Html::endTag('div');
            echo Html::beginTag('div', ['class'=>'card-footer']);
                echo Html::tag(
                    'div',
                    Html::tag('h4', $this->footerTextLeft),
                    ['class' => 'price']
                );
                echo Html::tag(
                    'div',
                    Html::tag('p', $this->footerTextRight),
                    ['class' => 'stats']
                );
            echo Html::endTag('div');
        echo Html::endTag('div');
        parent::run();
    }
}