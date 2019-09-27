# Yii2 Material Dashboard
Material Dashboard for Yii2 Framework

 ![version](https://img.shields.io/badge/stable-1.0.0-blue.svg) 
 [![license](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/deyraka/yii2-material-dashboard/LICENSE.md)
 ![downloads](https://img.shields.io/github/downloads/deyraka/yii2-material-dashboard/total)
 

![Product Gif](https://raw.githubusercontent.com/creativetimofficial/public-assets/master/material-dashboard-html/material-dashboard-free.gif)

Yii2 Material Dashboard is a free Material Bootstrap admin template with a fresh, new design inspired by Google's Material Design. 
It is based on [Material Dashboard](https://github.com/creativetimofficial/material-dashboard) by Creative Tim. 

## Table of Contents

* [Installation](#installation) 
* [Configuration](#configuration)
* [Usage](#usage)
* [Implementing Widget](#implementing-widget)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

```bash
composer require deyraka/yii2-material-dashboard:"v1.0.0-beta" 
```

or add to your composer.json

```json
{
	"require": {
		"deyraka/yii2-material-dashboard": "v1.0.0-beta"
	}
}
```

## Configuration

Insert the following code inside 'component' section in your 'config/web.php'.
```bash
'components' => [
	...
	'assetManager' => [ //SETTING FOR MATERIAL DASHBOARD THEME
		'bundles' => [
			'deyraka\materialdashboard\web\MaterialDashboardAsset',
		],
	],
	...
],
```

## Usage

The preferred way to apply material dashboard theme is replacing your 'layout' and 'site' in 'views' folder by 'layout' and 'site' in '@vendor/deyraka/yii2-material-dashboard/example-views/yiisoft/yii2-app/'.

Material Dashboard is using material icons by Google, so you can check [Material Icons](https://material.io/resources/icons/?style=baseline) for further information.

## Implementing Widget

#### Card 
```bash
<div class="row">
	<div class="col-md-4">
                <?php
                    Card::begin([  
                        'id' => 'card1', 
                        'color' => Card::COLOR_INFO, 
                        'headerIcon' => 'fingerprint', 
                        'collapsable' => true, 
                        'title' => 'Contoh Penggunaan Card Widget 1', 
                        'titleTextType' => Card::TYPE_INFO, 
                        'showFooter' => true,
                        'footerContent' => 'Palangka Raya, August 13<sup>th</sup> 2019',
                    ])
                ?>
                <!-- START your <body> content of the Card below this line  -->
                <span class='col-md-6'><h2>Welcome to Material Dashboard</h2></span>
                <span class='col-md-6'><h4>This card is enabling collapsable and footer. We made with <i class="material-icons text-rose">favorite</i> for Yii 2.0 Framework</h4></span>
                <!-- END your <body> content of the Card above this line, right before "Card::end()"  -->                
                <?php Card::end(); ?>
            </div>
</div>
```

#### Progress 
```bash
<div class="row">
	<div class="col-md-4">
		<?php
		echo Progress::widget([
                        'title' => 'Loyality Growth',
                        'value' => 75,
                        'color' => Progress::COLOR_INFO,
                        'isBarStrip' => true,
                        'isBarAnimated' => true,
                        'titleTextType' => Progress::TYPE_INFO
                    ]);
		?>
	</div>
</div>
```

#### Card Chart
```bash
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <?=
        CardChart::widget(
            [
                "idchart" => 'saleschart',
                "color" => CardChart::COLOR_WARNING,
                "url" => Url::to(['/site/contact']),
                "title" => "Feel Excellent Panorama with Us",
                "description" => "The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to 'Naviglio' where you can enjoy the main night life in Barcelona.",
                "footerTextLeft" => "$10,000/night",
                "footerTextRight" => "Barcelona",
                "footerTextType" => CardChart::TYPE_INFO,
            ]
        )
        ?>
    </div>
</div>
```
And add this Javascript or you can write it in a file and register it as [registerJsFile](https://www.yiiframework.com/doc/guide/2.0/en/output-client-scripts#script-files).
```bash
<script>
    //SCRIPT FOR LINE AND BAR CHART
    var data = {
    // A labels array that can contain any sort of values
    labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri'],
    // Our series array that contains series objects or in this case series data arrays
    series: [
        [5, 2, 4, 2, 1],
        [3, 2, 9, 5, 4],
    ]
    };
    // We are setting a few options for our chart and override the defaults
    var options = {
        // Don't draw the line chart points
        showPoint: true,
        // Disable line smoothing
        lineSmooth: true,
        // X-Axis specific configuration
        axisX: {
            // We can disable the grid for this axis
            showGrid: true,
            // and also don't show the label
            showLabel: true
        },
        // Y-Axis specific configuration
        axisY: {
            // Lets offset the chart a bit from the labels
            offset: 60,
            // The label interpolation function enables you to modify the values
            // used for the labels on each axis. Here we are converting the
            // values into million pound.
            labelInterpolationFnc: function(value) {
            return 'Rp ' + value + 'jt';
            }
        }
    };

    // Create a new line chart object where as first parameter we pass in a selector
    // that is resolving to our chart container element. The Second parameter
    // is the actual data object.
    // new Chartist.Bar('.ct-chart', data, options);
    new Chartist.Bar('#saleschart', data, options);
</script>
```
for further information about chart customization , material dashboard is using [Chartist-js](http://gionkunz.github.io/chartist-js/examples.html) by [Gion Kunz](https://github.com/gionkunz).

#### Card Stats
```bash
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <?=
        CardStats::widget(
            [
                "color" => Cardstats::COLOR_PRIMARY,
                "headerIcon" => "weekend",
                "title" => "Today's sale",
                "subtitle" => "184",
                "footerIcon" => "warning",
                "footerText" => "Check this out",
                "footerUrl" => Url::to(['site/login']),
                "footerTextType" => Cardstats::TYPE_INFO,
            ]
        )
        ?>
    </div>
</div>
```

#### Card Product
```bash
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6">
        <?=
        CardProduct::widget(
            [
                "image" => Yii::getAlias('@web').'\img\sidebar-1.jpg',
                "hiddenIcon" => 'send',
                "hiddenText" => 'See Details',
                "hiddenTooltip" => 'Lets check Details',
                "url" => Url::to(['/site/about']),
                "title" => "Feel Excellent Panorama with Us",
                "description" => "The place is close to Manchester Beach and bus stop just 2 min by walk and near to 'Naviglio' where you can enjoy the main night life in Manchester.",
                "footerTextLeft" => "$8,000/night",
                "footerTextRight" => "Manchester",
                "footerTextType" => Cardstats::TYPE_INFO,
            ]
        )
        ?>
    </div>
</div>
```

#### Menu
Used for initialize menu. It's already exist in '../layouts/left.php'
```bash
<div class="logo">
        <a href="#" class="simple-text logo-normal">
            Material Dashboard 
        </a>
    </div>
    <div class="sidebar-wrapper">
        <?= Menu::widget([
            'items' => [
                ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/']],
                ['label' => 'About', 'icon' => 'table_chart', 'url' => ['site/about']],
                ['label' => 'Contact', 'icon' => 'web', 'url' => ['site/contact']],
                ['label' => 'Pages', 'icon' => 'text_format', 'items' => [
                    ['label' => 'Login', 'icon' => 'text_format', 'url' => ['/site/login']],
                    ['label' => 'Error', 'icon' => 'text_format', 'url' => ['/error']],
                    ['label' => 'Registration', 'icon' => 'text_format', 'items' => [
                        ['label' => 'Login', 'icon' => 'text_format', 'url' => ['/site/login']],
                        ['label' => 'Error', 'icon' => 'text_format', 'url' => ['/error']],
                        ['label' => 'Registration', 'icon' => 'text_format', 'url' => ['/registration']],
                    ]],
                ]],
            ]
        ]); ?>    
    </div>
</div>
```
