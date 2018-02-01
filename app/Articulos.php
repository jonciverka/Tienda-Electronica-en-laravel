<?php

namespace inge;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Articulos extends Model
{
  protected $table = "articulos";
  protected $fillable = [
        'name', 'precio', 'descripcion','path',
    ];	


    public function setPathAttribute($path){
		$name = $path->getClientOriginalName();
		$this->attributes['path'] = $name;
		\Storage::disk('local')->put($name, \File::get($path));
	}
}
