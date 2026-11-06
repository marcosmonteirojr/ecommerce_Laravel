<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';
    protected $primaryKey = 'cod';

    protected $fillable = [
        'tipo',
        'estoque',
        'preco',
        'nome'
    ];
    public function pedidos(){
        return $this->belongsToMany(Pedido::class, 'itens_pedidos', 'produtos_cod', 'pedidos_cod')
                ->withPivo('quantidade')
                ->withTimesTamps();
    }
}
