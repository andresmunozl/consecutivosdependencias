<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{
    protected $table ='cargos';
    protected $primaryKey='id';
    public $timestamps=true;
    public $fillable = ['name','dependencia_id'];
    public function dependencia()
    {
        return $this->belongsTo('App\Dependencia','dependencia_id');
    }

}
