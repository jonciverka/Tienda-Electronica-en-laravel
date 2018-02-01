<?php

namespace inge\Http\Controllers;

use Illuminate\Http\Request;
use inge\User;
use inge\Http\Requests\UserCreateRequest;
use inge\Http\Requests\UserUpdateRequest;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class EmpleadoController extends Controller
{

      public function __construct(){
           $this->middleware('auth');
           $this->middleware('empleado');
        }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = \inge\User::All(); 
        $Articulos = \inge\Articulos::All();
        return view('empleado.index',compact('users','Articulos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleado.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        \inge\Articulos::create($request->all());
        return redirect('/empleado');
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
