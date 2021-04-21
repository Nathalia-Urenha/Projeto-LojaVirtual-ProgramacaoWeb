<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'cep',
        'logradouro',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
    ];

   public function clientes(){
       return $this->hasMany('App\models\Cliente', 'endereco_id');
   }

}
