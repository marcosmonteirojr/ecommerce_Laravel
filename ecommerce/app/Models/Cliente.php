<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes';
    protected $primaryKey = 'cod';
    protected $fillable=[
        'cpf',
        'telefone',
        'endereco',
        'nome'
    ];
    public function pedido() {
        return $this->hasMany(Pedido::class, 'cliente_cod', 'cod' );
        
    }
}
