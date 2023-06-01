<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EtiquetasEntrega extends Model
{
    use HasFactory;

    protected $table = 'etiquetas_entrega';

    protected $fillable = [
        'transportadora_id',
        'pedido_id',
        'data_envio',
    ];

    /**
     * Define o relacionamento com o modelo Pedidos.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function pedido()
    {
        return $this->belongsTo(Pedidos::class, 'pedido_id');
    }

    /**
     * Define o relacionamento com o modelo Transportadoras.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transportadora()
    {
        return $this->belongsTo(Transportadoras::class, 'transportadora_id');
    }

    /**
     * Cria uma nova etiqueta de entrega.
     *
     * @param  array  $data
     * @return EtiquetasEntrega
     */
    public static function createEtiqueta($data)
    {
        return self::create($data);
    }

    /**
     * Atualiza os dados da etiqueta de entrega.
     *
     * @param  array  $data
     * @return EtiquetasEntrega
     */
    public function updateEtiqueta($data)
    {
        $this->fill($data);
        $this->save();
        return $this;
    }

    /**
     * Exclui a etiqueta de entrega.
     *
     * @return bool|null
     */
    public function deleteEtiqueta()
    {
        return $this->delete();
    }

    /**
     * Retorna todas as etiquetas de entrega.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function getEtiquetas()
    {
        return self::orderBy('id', 'desc')->get();
    }

    /**
     * Retorna uma etiqueta de entrega pelo ID.
     *
     * @param  int  $id
     * @return EtiquetasEntrega|null
     */
    public static function getEtiquetaById($id)
    {
        return self::find($id);
    }
}
