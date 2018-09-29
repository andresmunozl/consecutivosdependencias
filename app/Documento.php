<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $table ='documentos';
    protected $primaryKey='id';
    public $timestamps=true;
    public $fillable = ['name','consecutivo'];
}
