<?php

namespace inge\Http\Controllers;

use Illuminate\Http\Request;


use inge\User;
use inge\Http\Requests\UserCreateRequest;
use inge\Http\Requests\UserUpdateRequest;
use Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class FrontController extends Controller
{
    public function index()
    {
        Cookie::forget('Lista_Articulos');
        $Articulos = \inge\Articulos::where('name','index')->get();
        $slices = \inge\Articulos::where('name','slice')->get();
        return view('index',compact('Articulos','slices'));
        
    }

    public function login()
    {
        return view('login');
    }

    public function all(){
        $Articulos = \inge\Articulos::All();
        return view('Articulos',compact('Articulos'));
    }



   
}
