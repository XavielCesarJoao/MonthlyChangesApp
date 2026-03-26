<?php

namespace App\Models\Internal;

use App\Models\External\Departamento;
use App\Models\External\Funcionario;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Empresa extends Model
{
    use HasFactory;


    public $with = ['departamentos'];
    public function buscaEmpresa($emoresa_id) : Collection
    {
        return self::where('id', $emoresa_id)->get();
    }

    public function departamentos(): HasMany
    {
        return $this->hasMany(Departamento::class, 'empresa_id');
    }

    public function funcionarios(): HasMany
    {
        return $this->hasMany(Funcionario::class, 'empresa_id');
    }
}
