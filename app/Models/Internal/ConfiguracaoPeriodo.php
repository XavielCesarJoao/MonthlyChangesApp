<?php

namespace App\Models\Internal;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfiguracaoPeriodo extends Model
{
    use HasFactory;

    public function periodo(int $empresaId)
    {
        return self::where('empresa_id', $empresaId)->get();
    }
}
