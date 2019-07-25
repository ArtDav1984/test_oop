<?php
/**
 * Created by PhpStorm.
 * User: TORNADO
 * Date: 30.06.2019
 * Time: 18:57
 */

namespace app\base;


abstract class BaseController
{
    protected $view;

    public function __construct()
    {
        $this->view = new BaseView();
        $this->view->setLayout('main');
    }

    abstract public function actionIndex();
}