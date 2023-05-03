<?php

namespace App\classes;

class Redirect
{
    /**
     * Redirect to specific page
     * @param $page
     * @return void
     */
    public static function to($page){
        header("location: $page");
    }

    /**
     * Redirect to same page
     * @return void
     */
    public static function back(){
        $uri = $_SERVER['REQUEST_URI'];
        header("location: $uri");
    }
}