<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;
    protected $table = 'pedidos';
    protected $primaryKey = 'cod';
    protected $fillable = ['valor_total', 
    'data_pedido', 'clitente_cod'];

    protected $casts =[
        'data_pedido' => 'date'
    ];
    public function cliente(){
        return $this->belongsTo(Cliente::class, 'cliente_cod', 'cod');
    }
    public function produtos(){
        return $this->belongsToMay(Produto::class, 'itens_pedidos', 'pedidos_cod', 'produto_cod')
        ->withPivot('quantidade')
        ->withTimestamps();
    }
}
