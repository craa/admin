<?php
/**
 * Created by PhpStorm.
 * User: chenhongwei
 * Date: 2015/10/10
 * Time: 17:02
 */

namespace app\components;

class Controller extends \yii\web\Controller
{
    /**
     * 是否显示顶部导航
     * @var bool
     */
    public $showTopBar = true;
    /**
     * 是否显示左侧菜单
     * @var bool
     */
    public $showLeftMenu = true;
}