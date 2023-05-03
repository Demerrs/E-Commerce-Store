<?php

namespace App\controllers;

use App\classes\Mail;

class IndexController extends BaseController
{

    public function show(){
        echo "Inside Homepage from controller class";

        $mail = new Mail();

        $data = [
            'to' => 'marta.testmail333@gmail.com',
            'subject' => 'Welcome to Ecommerce Store',
            'view' => 'welcome',
            'name' => 'Marta Valerian',
            'body' => "Testing email template"
        ];

        if ($mail->send($data)){
            echo "Email sent successfully";
        }else{
            echo "Email sending failed ";
        }
    }
}
