<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $table = "clientes";

    protected $fillable = [
        'nome', 
        'email', 
        'senha', 
        'telefone', 
        'cpf',
        'endereco_id'
    ];

    protected $hidden=[
        'create_at',
        'update_at',
    ];

    public function endereco(){
        return $this->belongsTo('App\models\Endereco', 'endereco_id');
    }


    public function search($filter = null){
        $results = $this->where(function($query) use($filter) {
            if($filter){
                $query->where('nome', 'LIKE', "%{$filter}%");
            }
        })->paginate(); 
        
        return $results;
    }
}
