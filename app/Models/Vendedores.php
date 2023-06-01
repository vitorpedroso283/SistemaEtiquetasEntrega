<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendedores extends Model
{
    use HasFactory;

    protected $table = 'vendedores';

    protected $fillable = [
        'nome',
        'endereco',
        'email',
        'telefone',
    ];

    /**
     * Cria um novo vendedor.
     *
     * @param array $data
     * @return Vendedores
     */
    public function createVendedor($data)
    {
        return $this->create($data);
    }

    /**
     * Atualiza um vendedor existente.
     *
     * @param array $data
     * @return Vendedores
     */
    public function updateVendedor($data)
    {
        $this->fill($data);
        $this->save();
        return $this;
    }

    /**
     * Exclui um vendedor.
     *
     * @return bool|null
     */
    public function deleteVendedor()
    {
        return $this->delete();
    }

    /**
     * Retorna todos os vendedores.
     *
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getVendedores()
    {
        return $this->orderBy('id', 'desc')->get();
    }

    /**
     * Retorna um vendedor pelo ID.
     *
     * @param int $id
     * @return Vendedores|null
     */
    public function getVendedorById($id)
    {
        return $this->find($id);
    }
}
