<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productosModel extends Model
{
    protected $table= 'productos';
    public $timestamps= false;
    public $fillable = ['nombre_producto','precio','cantidad','fechaDeIngreso','id_tiposProducto'];
}
