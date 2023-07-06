<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipos_productoModel extends Model
{
    protected $table= 'tipos_producto';
    public $timestamps= false;
    public $fillable = ['tipo'];
}
