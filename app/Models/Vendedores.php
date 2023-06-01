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

    public function createVendedor($data)
    {
        return $this->create($data);
    }

    public function updateVendedor($data)
    {
        $this->fill($data);
        $this->save();
        return $this;
    }

    public function deleteVendedor()
    {
        return $this->delete();
    }

    public function getVendedores()
    {
        return $this->all();
    }

    public function getVendedorById($id)
    {
        return $this->find($id);
    }
}
