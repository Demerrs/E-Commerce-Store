<?php

namespace App\controllers\admin;

use App\classes\Redirect;
use App\classes\Role;
use App\models\Payment;
use App\models\User;

class UserController
{

    private $table_name = 'users';
    public function __construct()
    {

        if (!Role::middleware('admin')){
            Redirect::to('/login');
        }

    }

        public function show(){
            $users = User::all()->count();
            list($users, $links) = paginate(7, $users, $this->table_name, new User);
            return view('admin/users', compact('users', 'links'));
        }

}