<?php

namespace inge\Http\Controllers;
use Auth;
use Session;
use Redirect;
use inge\User;
use Illuminate\Http\Request;
use inge\Http\Requests\LoginRequest;
use Cookie;     
class LogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        Cookie::forget('Lista_Articulos');
        Auth::logout();
        
        return Redirect::to('/');
    }
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LoginRequest $request)
    {
        if(Auth::attempt(['email' => $request['email'],'password' => $request['password']])){
            $odontograma = User::where('email', '=', $request['email'])->get()->first();

            if ($odontograma->tipo == 1) {
                return Redirect::to('admin');
                
            }elseif ($odontograma->tipo == 2) {
                return Redirect::to('empleado');
                
            }elseif ($odontograma->tipo == 3) {
                return Redirect::to('cliente');
                
            }              
        }
        Session::flash('message-error', 'Datos incorrectos');
        return Redirect::to('/login');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
