<?php

namespace App\controllers\admin;

use App\classes\Redirect;
use App\classes\Role;
use App\controllers\BaseController;
use App\models\Order;
use App\models\Payment;
use App\models\Product;
use App\models\User;
use Illuminate\Database\Capsule\Manager as Capsule;

class DashboardController extends BaseController
{

    public function __construct(){
        if (!Role::middleware('admin')){
            Redirect::to('/login');
        }
    }
    public function show(){
        $orders = Order::all()->count();
        $products = Product::all()->count();
        $users = User::all()->count();
        $payments = Payment::all()->sum('amount');
        return view('admin/dashboard', compact('orders', 'products', 'payments', 'users'));
    }

    /**
     * Get specific request type
     * @return void
     */
    public function getChartData(){
        $revenue = Capsule::table('payments')->select(
          Capsule::raw('sum(amount) as `amount`'),
            Capsule::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"),
            Capsule::raw('YEAR(created_at) year, Month(created_at) month')
        )->groupBy('year', 'month')->get();

        $orders = Capsule::table('orders')->select(
            Capsule::raw('count(id) as `count`'),
            Capsule::raw("DATE_FORMAT(created_at, '%m-%Y') new_date"),
            Capsule::raw('YEAR(created_at) year, Month(created_at) month')
        )->groupBy('year', 'month')->get();

        echo json_encode([
            'revenues' => $revenue, 'orders' =>$orders
        ]);
    }

}