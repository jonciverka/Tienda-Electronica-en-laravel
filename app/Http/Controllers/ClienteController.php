<?php

namespace inge\Http\Controllers;

use inge\User;
use inge\Http\Requests\UserCreateRequest;
use inge\Http\Requests\UserUpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Cookie;

class ClienteController extends Controller
{

      public function __construct(){
            $this->middleware('auth');
            $this->middleware('cliente');
            $this->Listas = array();
            
        }
        /*
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Articulos = \inge\Articulos::where('name','index')->get();
        $slices = \inge\Articulos::where('name','slice')->get();              
        return view('cliente.index',compact('Articulos','slices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $galletas = Cookie::get('Lista_Articulos');
        $id = $request['id'];
        if ($galletas != null) {         
            foreach($galletas as $galleta){
                array_push($this->Listas,$galleta);
            }
        }
        array_push($this->Listas,$id);       
        Cookie::queue('Lista_Articulos',$this->Listas);
        $Articulos = \inge\Articulos::where('name','index')->get();
        $slices = \inge\Articulos::where('name','slice')->get();
        return redirect('cliente')->with('Articulos','slices');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
    public function all_cliente(){
        $Articulos = \inge\Articulos::All(); 
        return view('cliente.Articulos',compact('Articulos'));
    }
    public function carrito(){
        $Articulos = \inge\Articulos::All();
        $Lis = Cookie::get('Lista_Articulos');
        $numero = count($Lis);
        return view('cliente.carrito',compact('Lis','numero','Articulos'));
    }


}
