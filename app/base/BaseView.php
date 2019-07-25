<?php
/**
 * Created by PhpStorm.
 * User: TORNADO
 * Date: 30.06.2019
 * Time: 18:58
 */

namespace app\base;


class BaseView
{
   public $basePath = "app/views/";
   protected $title;
   protected $layout;

   public function render($tplName, $data)
   {
       include_once "app/views/layout/".$this->layout.".php";
   }

   public function setLayout($layout)
   {
       $this->layout = $layout;
   }

   public function setTitle($title)
   {
       $this->title = $title;
   }

   public function getTitle()
   {
       return $this->title;
   }
}