<?php
namespace App;
use App;
use Illuminate\Database\Eloquent\Model;

class Cosmetico extends Model
{

    protected $fillable=[

        'marca_id',
        'categoria_id',
        'codigo',
        'nombre',
        'descripcion',
        'estado'

          ];
          //permite habilitar las marcas de tiemp en la BD


          public function marca()
    {
        return $this->belongsTo('App\Marca','marcas_id');
    }
    public function categoria()
    {
        return $this->belongsTo('App\Categoria','categoria_id');
    }
}
