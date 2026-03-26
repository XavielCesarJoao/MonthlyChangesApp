<?php

namespace App\Models\External;

use App\Models\Internal\Empresa;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Funcionario extends Model
{
    use HasFactory;

    public $with = ['empresa', 'Departamento'];
    public function empresa() : BelongsTo
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    public function Departamento() : BelongsTo
    {
        return $this->belongsTo(Departamento::class, 'departamento_id');
    }

}
