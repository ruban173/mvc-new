<?php

$ingredient = [
    'колбаса', 'ветчина', 'куриное мясо',
    'рыба', 'креветки', 'мидии и другие',
    'морепродукты', 'грибы', 'лук', 'перец',
    'баклажаны', 'артишоки', 'ананас', 'авокадо',
    'оливки', 'каперсы',
    'варёные яйца', 'чеснок',
    'перец чили', 'паприка',
    'томатная паста', 'оливковое масло',
    'специи и травы'
];
$keys_id = range(0, count($ingredient));

$products = [
    'combo' => [1, 6, 8, 9, 3, 2, 12, 11,],
    'chiken' => [10, 16, 18, 19, 13, 12, 5, 6,],
    'tuken' => [1, 5, 22, 21, 7, 8, 14, 20,],
    'tofu' => [8,6,15,16],
];

$search=[8,6,15];

$result=array_map(function ($item){
    global $search;
    return [key($item)=>[
      "not"=>  array_diff($item,$search),
       "not_exist"=>  array_diff($search,$item),
        "not_exist_count"=>count(array_diff($search,$item))
        
    ]];

},$products);

echo "<pre>";
 print_r($result);



exit();

$FrontController = new \app\core\FrontController();

$FrontController->start();


/*
$controller=new \app\core\BaseController();
$controller->render('site/index',[
    'user'=>'password',
]);
*/
//test VIEW
/*
$view=new \app\core\BaseView('site/index',[
    'user'=>'password',
]);

$view->render();
*/