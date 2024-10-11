<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;


class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'descricao', 'empresa_id']; // Defina os campos aqui

    /**
     * Escopo global para filtrar produtos pela empresa do usuário autenticado.
     */
    protected static function booted()
    {
        static::addGlobalScope('empresa', function (Builder $builder) {
            if (Auth::check()) {
                $builder->where('empresa_id', Auth::user()->empresa_id);
            }
        });
    }

    /**
     * Relacionamento com a model Empresa.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function empresa()
    {
        return $this->belongsTo(Empresa::class, 'empresa_id', 'id');
    }
}
