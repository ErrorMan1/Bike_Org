<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service\Line;

class loginController extends Controller
{

    public function login(){

        $code =  $_GET['code'];
        $line = new Line();
        $line_data = $line->login($code);

        if(isset($line_data)){

        $line_token =   $line_data['access_token'];

        session_start();
        $_SESSION['line_token'] = $line_token;
        $_SESSION['line_profile'] = $line->getUserProfile($line_token);

        return redirect('/');
    }
    }

    function checkRacerUser($username){}
    function checkOrganizerUser($username){}



    public function userProfile(){
        session_start();
        if(isset( $_SESSION['line_profile'] )){
        return  $_SESSION['line_profile'];}
        else{ return 0;}
    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        return redirect('/');
    }

}
