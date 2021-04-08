<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = [
        'nome', 'email', 'senha', 'telefone', 'cpf'
    ];

    public function search($filter = null){
        $results = $this->where(function($query) use($filter) {
            if($filter){
                $query->where('nome', 'LIKE', "%{$filter}%");
            }
        })->paginate(); 
        
        return $results;
    }
}
