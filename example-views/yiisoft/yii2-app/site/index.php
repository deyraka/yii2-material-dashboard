<?php

/* @var $this yii\web\View */
use deyraka\materialdashboard\widgets\CardStats;
use deyraka\materialdashboard\widgets\CardProduct;
use deyraka\materialdashboard\widgets\CardChart;
use deyraka\materialdashboard\widgets\Card;
use deyraka\materialdashboard\widgets\Progress;
use yii\helpers\Url;

$this->title = 'Dashboard';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-md-4">
                <?php
                    /* =======================================================
                        Example of using Card Widget
                        'id' and 'title' are MUST BE INITIALIZE and MUST BE UNIQUE Parameter.
                        'color', 'headerIcon', 'collapsable', 'titleTextType', 'showFooter', and 'footerContent' are optional.
                        'color' has a const value. Default is COLOR::INFO (another options are COLOR::ROSE, DANGER, WARNING, PRIMARY, SUCCESS).
                        'headerIcon' has default value 'room'. See https://material.io/resources/icons/?style=baseline for further reference.
                        'collapsable' and 'showFooter' are boolean with default value false. 
                        If you enabling showFooter, don't forget to initialize 'footerContent'.
                        'titleTextType' has a const value. Default is TYPE::MUTED (another option are TYPE::INFO, SUCCESS, DANGER, PRIMARY, and WARNING).
                    ==========================================================
                    */ 
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
            <div class="col-md-4">
                <?php
                    Card::begin([
                        'id' => 'card2',
                        'color' => Card::COLOR_PRIMARY,
                        'headerIcon' => 'room',
                        'collapsable' => false,
                        'title' => 'Contoh Penggunaan Card Widget 2',
                        'titleTextType' => Card::TYPE_DANGER,
                        'showFooter' => false,
                    ])
                ?>
                <!-- START your <body> content of the Card below this line  -->
                <span class='col-md-6'><h2>Welcome to Material Dashboard</h2></span>
                <span class='col-md-6'><h4>This card is disabling collapsable and footer, but still Made with <i class="material-icons text-info">favorite</i> for Yii 2.0 Framework</h4></span>
                <!-- END your <body> content of the Card above this line, right before "Card::end()"  -->                
                <?php Card::end(); ?>
            </div>
            <div class="col-md-4">
                <?php
                    Card::begin([
                        'id' => 'card3',
                        'color' => Card::COLOR_WARNING,
                        'headerIcon' => 'send',
                        'collapsable' => false,
                        'title' => 'Contoh Penggunaan Card Widget 3',
                        'titleTextType' => Card::TYPE_WARNING,
                        'showFooter' => false,
                    ]);
                ?>
                <!-- START your <body> content of the Card below this line  -->                
                <?php
                    echo Progress::widget([
                        'title' => 'Sales Growth',
                        'value' => 55,
                    ]);
                    echo Progress::widget([
                        'title' => 'Productivity Growth',
                        'value' => 25,
                        'color' => Progress::COLOR_DANGER,
                        'isBarStrip' => true,
                        'titleTextType' => Progress::TYPE_PRIMARY
                    ]);
                    /* =======================================================
                        Example of using Progress Widget
                        'title' and 'value' are MUST BE INITIALIZE.
                        'value' has range value where value-min is '0' and value-max is '100'.
                        'color', 'isBarStrip', 'isBarAnimated', 'titleTextType' are optional.
                        'color' has a const value. Default is COLOR::INFO (another options are COLOR::ROSE, DANGER, WARNING, PRIMARY, SUCCESS).
                        'isBarStrip' and 'isBarAnimated' are boolean with default value false.
                        'titleTextType' has a const value. Default is TYPE::MUTED (another option are TYPE::INFO, SUCCESS, DANGER, PRIMARY, and WARNING).
                    ==========================================================
                    */ 
                    echo Progress::widget([
                        'title' => 'Loyality Growth',
                        'value' => 75,
                        'color' => Progress::COLOR_INFO,
                        'isBarStrip' => true,
                        'isBarAnimated' => true,
                        'titleTextType' => Progress::TYPE_INFO
                    ]);
                ?>         
                <!-- END your <body> content of the Card above this line, right before "Card::end()"  -->
                <?php Card::end(); ?>
            </div>
        </div>

        <h3>Card Chart Example</h3>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?=
                /* =======================================================
                    Example of using CardChart Widget
                    'idchart' MUST BE INITIALIZE and MUST BE UNIQUE Parameter.
                    'title', and 'description' are MUST BE INITIALIZE.
                    'color', 'url', 'footerTextLeft', 'footerTextRight', and 'footerTextType' are optional.
                    'color' has a const value. Default is COLOR::INFO (another options are COLOR::ROSE, DANGER, WARNING, PRIMARY, SUCCESS).
                    'url' has default value '#'. Use Yii::to([]) to route the link.
                    'footerTextLeft', and 'footerTextRight' has default value ''. 
                    'footerTextType' has a const value. Default is TYPE::INFO (another option are TYPE::MUTED, SUCCESS, DANGER, PRIMARY, and WARNING).
                ==========================================================
                */
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
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?=
                CardChart::widget(
                    [
                        "idchart" => 'daychart',
                        "color" => CardChart::COLOR_INFO,
                        "url" => Url::to(['/site/contact']),
                        "title" => "Feel Excellent Panorama with Us",
                        "description" => "The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to 'Naviglio' where you can enjoy the main night life in Barcelona.",
                        "footerTextLeft" => "$10,000/night",
                        "footerTextRight" => "Barcelona",
                        "footerTextType" => CardChart::TYPE_DANGER,
                    ]
                )
                ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?=
                CardChart::widget(
                    [
                        "idchart" => 'yourchart',
                        "color" => CardChart::COLOR_PRIMARY,
                        "url" => Url::to(['/site/contact']),
                        "title" => "Feel Excellent Panorama with Us",
                        "description" => "The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to 'Naviglio' where you can enjoy the main night life in Barcelona.",
                        "footerTextLeft" => "$10,000/night",
                        "footerTextRight" => "Barcelona",
                        "footerTextType" => CardChart::TYPE_SUCCESS,
                    ]
                )
                ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?=
                CardChart::widget(
                    [
                        "idchart" => 'herchart',
                        "color" => CardChart::COLOR_SUCCESS,
                        "url" => Url::to(['/site/contact']),
                        "title" => "Feel Excellent Panorama with Us",
                        "description" => "The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to 'Naviglio' where you can enjoy the main night life in Barcelona.",
                        "footerTextLeft" => "$10,000/night",
                        "footerTextRight" => "Barcelona",
                        "footerTextType" => CardChart::TYPE_WARNING,
                    ]
                )
                ?>
            </div>
        </div>

        <h3>Card Statistik Example</h3>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?=
                /* =======================================================
                    Example of using CardStats Widget
                    'title', and 'subtitle' MUST BE INITIALIZE Parameter.
                    'color', 'headerIcon', 'footerIcon', 'footerText', 'footerUrl', and 'footerTextType' are optional.
                    'headerIcon' has default value 'weekend'. 'footerIcon' has default value 'send'. See https://material.io/resources/icons/?style=baseline for further reference.
                    'color' has a const value. Default is COLOR::INFO (another options are COLOR::ROSE, DANGER, WARNING, PRIMARY, SUCCESS).
                    'footerUrl' has default value '#'. Use Yii::to([]) to route the link. 
                    'footerTextType' has a const value. Default is TYPE::INFO (another option are TYPE::MUTED, SUCCESS, DANGER, PRIMARY, and WARNING).
                ==========================================================
                */
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
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?=
                CardStats::widget(
                    [
                        "color" => Cardstats::COLOR_ROSE,
                        "headerIcon" => "commute",
                        "title" => "Commuter Statistics",
                        "subtitle" => "10.000",
                        "footerIcon" => "flight_takeoff",
                        "footerText" => "Order ticket now",
                        "footerUrl" => Url::to(['site/contact']),
                        "footerTextType" => Cardstats::TYPE_PRIMARY,
                    ]
                )
                ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?=
                CardStats::widget(
                    [
                        "color" => Cardstats::COLOR_INFO,
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
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?=
                CardStats::widget(
                    [
                        "color" => Cardstats::COLOR_SUCCESS,
                        "headerIcon" => "commute",
                        "title" => "Commuter Statistics",
                        "subtitle" => "10.000",
                        "footerIcon" => "flight_takeoff",
                        "footerText" => "Order ticket now",
                        "footerUrl" => Url::to(['site/contact']),
                        "footerTextType" => Cardstats::TYPE_PRIMARY,
                    ]
                )
                ?>
            </div>
        </div>

        <h3>Card Product Example</h3>
        <?= Yii::getAlias('@app').'\img\sidebar-1.jpg' ?>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?=
                CardProduct::widget(
                    [
                        // "image" => '@web/img/sidebar-1.jpg',
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
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?=
                CardProduct::widget(
                    [
                        "image" => 'http://pragatiresorts.com/wp-content/uploads/2018/10/Nature-walk-1.jpg',
                        "url" => Url::to(['/site/contact']),
                        "title" => "Feel Excellent Panorama with Us",
                        "description" => "The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to 'Naviglio' where you can enjoy the main night life in Barcelona.",
                        "footerTextLeft" => "$10,000/night",
                        "footerTextRight" => "Barcelona",
                        "footerTextType" => Cardstats::TYPE_DANGER,
                    ]
                )
                ?>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?=
                /* =======================================================
                    Example of using CardProduct Widget
                    'image' has default value, but initiate your own image is recommended. The best pratice is make dir inside @web and use Yii::getAlias(@web).'your_image_path'. Or you can use url instead.
                    'title', and 'description' are MUST BE INITIALIZE.
                    'hiddenIcon', 'hiddenText', 'hiddenTooltip', 'url', 'footerTextLeft', 'footerTextRight', and 'footerTextType' are optional.
                    'hiddenIcon' has default value 'near_me'. See https://material.io/resources/icons/?style=baseline for further reference.
                    'hiddenText' has default value 'check out', but you can initiate your own text.
                    'hiddenTooltip' has default value 'go check for detail', but you can initiate your own text.
                    'url' has default value '#'. Use Yii::to([]) to route the link.
                    'footerTextLeft', and 'footerTextRight' has default value ''. 
                    'footerTextType' has a const value. Default is TYPE::INFO (another option are TYPE::MUTED, SUCCESS, DANGER, PRIMARY, and WARNING).
                ==========================================================
                */
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
            <div class="col-lg-3 col-md-6 col-sm-6">
                <?=
                CardProduct::widget(
                    [
                        "image" => 'https://userscontent2.emaze.com/images/d895780c-5437-40fe-b95e-4d597519d9a5/e7e89b27664383a3101c7fc776e0dab8.png',
                        "url" => Url::to(['/site/contact']),
                        "title" => "Feel Excellent Panorama with Us",
                        "description" => "The place is close to Barceloneta Beach and bus stop just 2 min by walk and near to 'Naviglio' where you can enjoy the main night life in Barcelona.",
                        "footerTextLeft" => "$10,000/night",
                        "footerTextRight" => "Barcelona",
                        "footerTextType" => Cardstats::TYPE_DANGER,
                    ]
                )
                ?>
            </div>
        </div>
    </div>

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
        new Chartist.Line('#daychart', data, options);
        new Chartist.Line('#yourchart', data, options);
        // new Chartist.Bar('#herchart', data, options);

        //SCRIPT FOR PIE CHART
        var data2 = {
            labels: ['Bananas', 'Apples', 'Grapes'],
            series: [20, 15, 40]
        };

        var options2 = {
        labelInterpolationFnc: function(value) {
            return value[0]
        }
        };

        var responsiveOptions = [
        ['screen and (min-width: 640px)', {
            chartPadding: 30,
            labelOffset: 100,
            labelDirection: 'explode',
            labelInterpolationFnc: function(value) {
            return value;
            }
        }],
        ['screen and (min-width: 1024px)', {
            labelOffset: 80,
            chartPadding: 20
        }]
        ];

        new Chartist.Pie('#herchart', data2, options2, responsiveOptions);

        new Chartist.Pie('#yourchart', {
            series: [20, 10, 30, 40]
            }, {
            donut: true,
            donutWidth: 20,
            donutSolid: true,
            startAngle: 270,
            showLabel: true
        });
    </script>
</div>
