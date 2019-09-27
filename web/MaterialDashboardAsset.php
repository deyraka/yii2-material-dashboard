<?php

namespace deyraka\materialdashboard\web;

use yii\bootstrap4\BootstrapAsset;
use yii\web\JqueryAsset;
use yii\web\YiiAsset;
use yii\web\AssetBundle as BaseMaterialAsset;

/**
 * MaterialDashboard asset
 */
class MaterialDashboardAsset extends BaseMaterialAsset
{
    public $sourcePath = '@vendor/deyraka/yii2-material-dashboard/assets';

    public $css = [
        'css/material-dashboard.css?v=2.1.1',
        'css/demo.css',
    ];

    public $js = [
        'js/core/popper.min.js',
        'js/core/jquery.min.js',
        'js/core/bootstrap-material-design.min.js',
        'js/plugins/arrive.min.js',
        'js/plugins/bootstrap-datetimepicker.min.js',
        'js/plugins/bootstrap-notify.js',
        'js/plugins/bootstrap-selectpicker.js',
        'js/plugins/bootstrap-tagsinput.js',
        'js/plugins/chartist.min.js',
        'js/plugins/fullcalendar.min.js',
        'js/plugins/jasny-bootstrap.min.js',
        'js/plugins/jquery.bootstrap-wizard.js',
        'js/plugins/jquery.dataTables.min.js',
        'js/plugins/jquery.tagsinput.js',
        'js/plugins/jquery.validate.min.js',
        'js/plugins/jquery-jvectormap.js',
        'js/plugins/moment.min.js',
        'js/plugins/nouislider.min.js',
        'js/plugins/perfect-scrollbar.jquery.min.js',
        'js/plugins/sweetalert2.js',
        'js/material-dashboard.js',
        'js/material-dashboard.min.js',
        'js/main.js',
    ];

    public $depends = [
        YiiAsset::class,
        JqueryAsset::class,
        // \yii\materialicons\AssetBundle::class,
        /* yii\bootstrap4\BootstrapAsset,
        BootstrapAsset::class */
    ];
}