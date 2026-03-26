<?php

namespace App\Models\External;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class Departamento extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function empresa() : BelongsTo
    {
        return $this->belongsTo(Empresa::class, 'empresa_id');
    }

    
}
