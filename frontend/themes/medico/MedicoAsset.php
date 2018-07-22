<?php

namespace frontend\themes\medico;

use yii\web\AssetBundle;

class MedicoAsset extends AssetBundle {

    public $sourcePath = '@frontend/themes/medico/assets';
    public $css = [
        'icon/themify-icons/themify-icons.css',
        'icon/font-awesome/css/font-awesome.min.css',
        'icon/icofont/css/icofont.css',
        'css/style.css',
        'css/jquery.mCustomScrollbar.css'
    ];
    public $js = [
        'js/jquery/jquery.min.js',
        'js/jquery-ui/jquery-ui.min.js',
        'js/popper.js/popper.min.js',
        'js/bootstrap/js/bootstrap.min.js',
        'jquery-slimscroll/jquery.slimscroll.js',
        'js/modernizr/modernizr.js',
        'pages/widget/amchart/amcharts.min.js',
        'pages/widget/amchart/serial.min.js',
        'js/chart.js/Chart.js',
        'pages/todo/todo.js',
        'pages/dashboard/custom-dashboard.min.js',
        'js/script.js',
        'js/SmoothScroll.js',
        'js/pcoded.min.js',
        'js/vartical-demo.js',
        'js/jquery.mCustomScrollbar.concat.min.js'
    ];
    public $img = [
        'images/logo.png',
        'images/avatar-2.jpg'
    ];
    public $depends = [
        'yii\web\YiiAsset',
            //'yii\bootstrap\BootstrapAsset',
    ];

}
