<?php
/**
 * Created by PhpStorm.
 * User: Преподаватель
 * Date: 12.03.2021
 * Time: 11:05
 */

namespace app\core;


class BaseView
{

    public  $layout="template";

    public  $pathLayout="app/views/layout";
    public  $pathView="app/views";
    public $title;
    public $content;
    private $model;

    public function __construct($controller,$model)
    {
        $this->controller=$controller;
        $this->model=$model;
        $this->content=$this->renderBody();
    }

    public function render()
    {

        return include("./{$this->pathLayout}/{$this->layout}.php");

    }

    private function renderBody()
    {
        ob_start();
        include("./{$this->pathView}/{$this->controller}.php");
        return ob_get_clean();


    }



}