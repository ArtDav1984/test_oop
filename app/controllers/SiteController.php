<?php
/**
 * Created by PhpStorm.
 * User: TORNADO
 * Date: 30.06.2019
 * Time: 19:15
 */

namespace app\controllers;


use app\base\BaseController;
use app\components\Auth;
use app\components\Db;


class SiteController extends BaseController
{
   public function actionIndex()
   {
      $this->view->setTitle('news');
      $this->view->render('site/index',[]);

      return true;
   }

   public function actionError()
   {
       $this->view->setLayout('404');
       $this->view->setTitle('error');
       $this->view->render('',[]);

       return true;
   }

   public function actionLogin()
   {
       $this->view->setTitle('login');
       $this->view->render('site/login', []);

       return true;
   }

   public function actionLogout()
   {
      Auth::logout();
   }

   public function actionRegister()
   {
       $this->view->setTitle('register');
       $this->view->render('site/register', []);

       return true;
   }
}