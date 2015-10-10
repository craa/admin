<?php
/**
 * Created by PhpStorm.
 * User: chenhongwei
 * Date: 2015/10/10
 * Time: 14:21
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Charisma主题
 * Class CharismaAsset
 * @package app\assets
 */
class CharismaAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/charisma';
    
    public $js = [
        "bower_components/bootstrap/dist/js/bootstrap.min.js",
        //library for cookie management
        "js/jquery.cookie.js",
        //calender plugin
        'bower_components/moment/min/moment.min.js',
        'bower_components/fullcalendar/dist/fullcalendar.min.js',
        //data table plugin
        'js/jquery.dataTables.min.js',
        //select or dropdown enhancer
        "bower_components/chosen/chosen.jquery.min.js",
        //plugin for gallery image view
        "bower_components/colorbox/jquery.colorbox-min.js",
        //notification plugin
        "js/jquery.noty.js",
        //library for making tables responsive
        "bower_components/responsive-tables/responsive-tables.js",
        //tour plugin
        "bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js",
        //star rating plugin
        "js/jquery.raty.min.js",
        //for iOS style toggle switch
        "js/jquery.iphone.toggle.js",
        //autogrowing textarea plugin
        "js/jquery.autogrow-textarea.js",
        //multiple file upload plugin
        "js/jquery.uploadify-3.1.min.js",
        //history.js for cross-browser state change on ajax
        "js/jquery.history.js",
        //application script for Charisma demo
        "js/charisma.js",
    ];
    
    public $css = [
        "css/charisma-app.css",
        'bower_components/fullcalendar/dist/fullcalendar.css',
        'bower_components/fullcalendar/dist/fullcalendar.print.css',
        'bower_components/chosen/chosen.min.css',
        'bower_components/colorbox/example3/colorbox.css',
        'bower_components/responsive-tables/responsive-tables.css',
        'bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css',
        'css/jquery.noty.css',
        'css/noty_theme_default.css',
        'css/elfinder.min.css',
        'css/elfinder.theme.css',
        'css/jquery.iphone.toggle.css',
        'css/uploadify.css',
        'css/animate.min.css',
    ];

    public $depends = [
        'app\assets\JQueryAsset'
    ];
}