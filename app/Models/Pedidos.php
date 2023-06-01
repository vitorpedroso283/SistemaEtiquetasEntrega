<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedidos extends Model
{
    use HasFactory;

    protected $table = 'pedidos';

    protected $fillable = [
        'vendedor_id',
        'produto',
        'quantidade',
        'valor_total',
    ];

    public function vendedor()
    {
        return $this->belongsTo(Vendedores::class, 'vendedor_id');
    }

    public static function createPedido($data)
    {
        return self::create($data);
    }

    public function updatePedido($data)
    {
        $this->fill($data);
        $this->save();
        return $this;
    }

    public function deletePedido()
    {
        return $this->delete();
    }

    public static function getPedidos()
    {
        return self::all();
    }

    public static function getPedidoById($id)
    {
        return self::find($id);
    }
}
