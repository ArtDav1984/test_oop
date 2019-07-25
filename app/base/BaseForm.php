<?php
/**
 * Created by PhpStorm.
 * User: TORNADO
 * Date: 22.07.2019
 * Time: 23:46
 */

namespace app\base;


use app\components\Db;

abstract class BaseForm
{
    protected $db;

    public function __construct()
    {
        $this->db = Db::getConnection();
    }

    abstract public function validate();

    abstract public function load($data);
}