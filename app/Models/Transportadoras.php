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

    public function createTransportadora($data)
    {
        return $this->create($data);
    }

    public function updateTransportadora($data)
    {
        $this->fill($data);
        $this->save();
        return $this;
    }

    public function deleteTransportadora()
    {
        return $this->delete();
    }

    public function getTransportadoras()
    {
        return $this->all();
    }

    public function getTransportadoraById($id)
    {
        return $this->find($id);
    }
}
