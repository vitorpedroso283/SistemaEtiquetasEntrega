<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportadoras extends Model
{
    use HasFactory;

    protected $table = 'transportadoras';

    protected $fillable = [
        'nome',
        'endereco',
        'email',
        'telefone',
    ];

    /**
     * Cria uma nova transportadora.
     *
     * @param  array  $data
     * @return \App\Models\Transportadoras
     */
    public function createTransportadora($data)
    {
        return $this->create($data);
    }

    /**
     * Atualiza os dados de uma transportadora existente.
     *
     * @param  array  $data
     * @return \App\Models\Transportadoras
     */
    public function updateTransportadora($data)
    {
        $this->fill($data);
        $this->save();
        return $this;
    }

    /**
     * Exclui uma transportadora.
     *
     * @return bool|null
     */
    public function deleteTransportadora()
    {
        return $this->delete();
    }

    /**
     * Retorna todas as transportadoras.
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function getTransportadoras()
    {
        return $this->orderBy('id', 'desc')->get();
    }  

    /**
     * Retorna uma transportadora pelo ID.
     *
     * @param  int  $id
     * @return \App\Models\Transportadoras|null
     */
    public function getTransportadoraById($id)
    {
        return $this->find($id);
    }
}
