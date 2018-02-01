<?php

namespace inge\Http\Controllers;
use inge\User;
use Illuminate\Http\Request;
use inge\Http\Requests\UserCreateRequest;
use inge\Http\Requests\UserUpdateRequest;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect; 
class AdminController extends Controller
{
    
        public function __construct(){
            $this->middleware('auth');
            $this->middleware('admin');
        }
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        
        $users = \inge\User::All();   
        return view('admin.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        User::create([
        'name' => $request['name'],
        'email' => $request['email'],
        'password' =>$request['password'],
        'tipo' => $request['tipo'],
        ]);
       return redirect('/admin')->with('message','Usuario agregado correctamente');
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
        $user = User::find($id);
        return view('admin.edit',['user'=>$user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::where('id', 1);
        $user->fill($request->all());
        $user->save();
        Session::flash('message','Usuario editado correctamente');
        return Redirect::to('/admin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        Session::flash('message','Usuario eliminado correctamente');
        return Redirect::to('/admin');
    }
    

    public function productos(){
        return view('admin.productos');
    }
    public function storeProductos(Request $request){
        \inge\Articulos::create($request->all());
        return redirect('/admin');
    }
}
