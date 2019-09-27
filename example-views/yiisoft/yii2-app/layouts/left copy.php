<?php

use deyraka\materialdashboard\widgets\Menu;
use yii\helpers\Html;

?>
<div class="sidebar" data-color="purple" data-image="../vendor/deyraka-material/yii2-material-dashboard/assets/img/sidebar-2.jpg">
    <!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
    Tip 2: you can also add an image using data-image tag
-->
    <div class="logo">
        <a href="../vendor/deyraka-material/yii2-material-dashboard/assets/img/sidebar-1.jpg" class="simple-text logo-normal">
            Material Dashboard 
        </a>
    </div>
    <div class="sidebar-wrapper">
        <?= Menu::widget([
            'items' => [
                ['label' => 'Dashboard', 'icon' => 'dashboard', 'url' => ['/']],
                ['label' => 'About', 'icon' => 'table_chart', 'url' => ['site/about']],
                // ['label' => 'Login', 'icon' => 'web', 'url' => ['site/login']],
                Yii::$app->user->isGuest ? (
                    ['label' => 'Login', 'icon' => 'web', 'url' => ['/site/login']]
                ) : ( ['label' => 'Logout - '. Yii::$app->user->identity->username, 'icon' => 'web', 'url' => ['/site/logout'], 'options' => ['data-method'=>'post']]
                    ),
                ['label' => 'Javascript', 'icon' => 'code', 'url' => ['/javascript']],
                ['label' => 'Notifications', 'icon' => 'notifications', 'url' => ['/notifications']],
                ['label' => 'Tabs', 'icon' => 'tab', 'url' => ['/tabs']],
                ['label' => 'Typography', 'icon' => 'text_format', 'url' => ['/typography']],
                ['label' => 'Pages', 'icon' => 'text_format', 'items' => [
                    ['label' => 'Login', 'icon' => 'text_format', 'url' => ['/login']],
                    ['label' => 'Error', 'icon' => 'text_format', 'url' => ['/error']],
                    ['label' => 'Registration', 'icon' => 'text_format', 'url' => ['/registration']],
                ]],

            ]
        ]); ?>
    </div>
</div>