<?php

namespace App\controllers;


use App\classes\CSRFToken;
use App\classes\Request;
use App\models\Product;

class ProductController extends BaseController
{

    public function show($id){
        $token = CSRFToken::_token();
        $product = Product::where('id', $id)->first();
        return view('product', compact('token', 'product'));
    }

    public function get($id){
        $product = Product::where('id', $id)->with(['category', 'subCategory'])->first();

        if($product){
            echo json_encode([
                'product' => $product, 'category' => $product->category,
                'subCategory' => $product->subCategory
            ]);
            exit;
        }
        header('HTTP/1.1 422 Unprocessable Entity', true, 422);
        echo 'Product not found';
        exit;
    }
}
