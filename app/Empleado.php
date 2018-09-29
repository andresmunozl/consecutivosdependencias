<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $table ='empleados';
    protected $primaryKey='id';
    public $timestamps=true;
    public $fillable = ['name','cargo_id'];
    public function cargo()
    {
        return $this->belongsTo('App\Cargo','cargo_id')->with('dependencia');
    }
}
