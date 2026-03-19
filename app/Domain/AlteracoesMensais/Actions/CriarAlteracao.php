<?php

namespace App\Domain\AlteracoesMensais\Actions;

use App\Domain\AlteracoesMensais\DTOs\AlteracaoData;
use App\Models\Registos;

class CriarAlteracao
{

    public function __construct(AlteracaoData $data)
    {
        Registos::query()->create($data);
    }
}
