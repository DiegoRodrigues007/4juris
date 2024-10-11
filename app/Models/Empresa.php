<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    // Defina os campos que você deseja que sejam preenchíveis
    protected $fillable = ['nome']; // Substitua ou adicione outros campos conforme necessário

    /**
     * Relacionamento com a model Produto
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produtos()
    {
        return $this->hasMany(Produto::class, 'empresa_id', 'id');
    }
}
