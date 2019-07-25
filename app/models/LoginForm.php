<?php
/**
 * Created by PhpStorm.
 * User: TORNADO
 * Date: 22.07.2019
 * Time: 18:44
 */

namespace app\models;


use app\base\BaseForm;
use app\components\Db;

class LoginForm extends BaseForm
{
    public $login;
    public $password;

    public $rules = [
        'login' => ['required', 'email'],
        'password' => ['required']
    ];

    public function validate()
    {
        $validator = new Validator();
    }

    public function load($data)
    {
        $this->login = trim(htmlspecialchars(stripcslashes($this->db->getSafeData($data['login']))));
        $this->password = trim(htmlspecialchars(stripcslashes($this->db->getSafeData($data['password']))));
    }
}