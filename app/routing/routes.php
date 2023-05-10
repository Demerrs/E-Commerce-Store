<?php

$router = new AltoRouter;

$router->map('GET','/','App\controllers\IndexController@show','home');
$router->map('GET','/featured','App\controllers\IndexController@featuredProducts','feature_product');
$router->map('GET','/get-products','App\controllers\IndexController@getProducts','get_product');
$router->map('POST','/load-more','App\controllers\IndexController@loadMoreProducts','load_more_product');

$router->map('GET','/product/[i:id]','App\controllers\ProductController@show','product');
$router->map('GET','/product-details/[i:id]','App\controllers\ProductController@get','product_details');



$router->map('POST','/cart','App\controllers\CartController@addItem','add_cart_item');

require_once __DIR__. '/admin_routes.php';