<?php

namespace App\controllers\admin;

use App\classes\Request;
use App\classes\Session;
use App\controllers\BaseController;

class DashboardController extends BaseController
{
    public function show(){
        Session::add('admin', 'You are welcome, admin user');
        Session::remove('admin');
        if(Session::has('admin')){
            $msg = Session::get('admin');
        }
        else {
            $msg = 'Not defined';
        }
        return view('admin/dashboard', ['admin' => $msg]);
    }

    /**
     * Get specific request type
     * @return void
     */
    public function get(){
        Request::refresh();
        $data = Request::old('post', 'product');
        var_dump($data);
//        exit;
//        if(Request::has('post')){
//            $request = Request::get('post');
//            var_dump($request->product);
//        }else{
//            var_dump('posting doesnt exists');
//        }
    }

}