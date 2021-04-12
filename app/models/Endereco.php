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

}
