<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    protected $table ='dependencias';
    protected $primaryKey='id';
    public $timestamps=true;
    public $fillable = ['name'];

}
