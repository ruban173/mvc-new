<?php
/**
 * Created by PhpStorm.
 * User: Преподаватель
 * Date: 12.03.2021
 * Time: 14:05
 */

namespace app\controllers;


class SiteController extends \app\core\BaseController
{

    public function indexAction(){


        $this->render('site/index',[
            'user'=>'password',
        ]);
    }


}