<?php

namespace inge\Http\Controllers;
use inge\User;
use Illuminate\Http\Request;
use inge\Http\Requests\UserCreateRequest;
use inge\Http\Requests\UserUpdateRequest;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect; 

class AdminCreateForm extends Controller
{
    public function storeProductos(Request $request){
        \inge\Articulos::create($request->all());
        return redirect('/empleado');
    }
}
