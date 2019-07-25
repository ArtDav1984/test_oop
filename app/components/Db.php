<?php
/**
 * Created by PhpStorm.
 * User: TORNADO
 * Date: 30.06.2019
 * Time: 21:11
 */

namespace app\components;


class Db
{
   private static $db = null;
   private $link;

   private function __construct()
   {
       $paramsPath = __DIR__.'/../config/db_params.php';
       $params = require_once ($paramsPath);

       $this->link = new \mysqli($params['host'], $params['user'], $params['password'], $params['dbname']);
       $this->link->set_charset('utf8');
   }

    public static function getConnection()
   {
       if (is_null(self::$db)) {
           self::$db = new self();
       }

       return self::$db;
   }

   public function getSafeData($data)
   {
       return $this->link->escape_string($data);
   }
}