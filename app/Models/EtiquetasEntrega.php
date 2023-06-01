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

    public function pedido()
    {
        return $this->belongsTo(Pedidos::class, 'pedido_id');
    }

    public function transportadora()
    {
        return $this->belongsTo(Transportadoras::class, 'transportadora_id');
    }

    public static function createEtiqueta($data)
    {
        return self::create($data);
    }

    public function updateEtiqueta($data)
    {
        $this->fill($data);
        $this->save();
        return $this;
    }

    public function deleteEtiqueta()
    {
        return $this->delete();
    }

    public static function getEtiquetas()
    {
        return self::all();
    }

    public static function getEtiquetaById($id)
    {
        return self::find($id);
    }
}
