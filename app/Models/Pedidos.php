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

    /**
     * Obtém o vendedor associado ao pedido.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vendedor()
    {
        return $this->belongsTo(Vendedores::class, 'vendedor_id');
    }

    /**
     * Cria um novo pedido.
     *
     * @param array $data
     * @return Pedidos
     */
    public static function createPedido($data)
    {
        return self::create($data);
    }

    /**
     * Atualiza os dados de um pedido existente.
     *
     * @param array $data
     * @return Pedidos
     */
    public function updatePedido($data)
    {
        $this->fill($data);
        $this->save();
        return $this;
    }

    /**
     * Exclui um pedido.
     *
     * @return bool|null
     */
    public function deletePedido()
    {
        return $this->delete();
    }

    /**
     * Obtém todos os pedidos.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public static function getPedidos()
    {
        return self::orderBy('id', 'desc')->get();
    }

    /**
     * Obtém um pedido pelo seu ID.
     *
     * @param int $id
     * @return Pedidos|null
     */
    public static function getPedidoById($id)
    {
        return self::find($id);
    }
}
