<?php
/**
 * Created by PhpStorm.
 * User: Преподаватель
 * Date: 12.03.2021
 * Time: 11:05
 */

namespace app\core;


class BaseController
{
    private $view;
    function __construct()
    {

    }

    public  function render($controller,$model=null){

        $this->view=new \app\core\BaseView($controller,$model);
        $this->view->render();

    }

}