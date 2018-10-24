<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

class DetalleIngreso extends Model
{
    protected $table='detalle_ingresos';

    protected $fillable=[
        'idingreso',
        'idarticulo',
        'cantidad',
        'precio'
    ];

    public $timestamps=false;
}
