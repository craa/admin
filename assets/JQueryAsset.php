<?php
/**
 * Created by PhpStorm.
 * User: chenhongwei
 * Date: 2015/10/10
 * Time: 15:40
 */

namespace app\assets;

use yii\web\AssetBundle;
use yii\web\View;

class JQueryAsset extends AssetBundle
{
    public $sourcePath = '@app/themes/charisma/bower_components/jquery';

    public $js = [
        'jquery.min.js',
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}