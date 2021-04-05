<?php
/**
 * Created by PhpStorm.
 * User: Преподаватель
 * Date: 12.03.2021
 * Time: 11:05
 */

namespace app\core;


class FrontController
{
    private $params;
    private $_controller;
    private $_action;
    private $_url;

    function __construct()
    {
        $this->_url=$this->getUrl();
        $this->_controller=$this->getParams()[0];
        $this->_action=$this->getParams()[1];

    }

    public function start()
    {
        $class='\app\controllers\\'.ucfirst($this->_controller).'Controller';
        $method=$this->_action.'Action';
        if (method_exists($class,$method)){
            $route=new $class;
            $route->{$method}();


        }
       else self::getError();


    }

    private function getParams()
    {
        return explode('/',$this->_url,3);

    }

    private function getUrl()
    {
        return htmlspecialchars(trim($_SERVER[REQUEST_URI],'/'));


    }

    private function getError(){
        echo "ERROR ROUTE";
            //  throw new\Exception();
           // exit('\controllers\\'.ucfirst($this->_controller).'Controller'.$this->_action.'Action');
    }

}