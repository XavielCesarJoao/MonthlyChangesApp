<?php

namespace App\Domain\AlteracoesMensais\Actions;

use App\Models\Internal\ConfiguracaoPeriodo;
use Illuminate\Support\Carbon;

class Configuracoes
{
    public function devolvePeriodo($empresaId): array
    {
        $configuracao = new ConfiguracaoPeriodo();
      
        $mesAtual = (int) date('m');
        $mesAnterior = (int) $mesAtual == 1 ? 12 : $mesAtual - 1;
        $anoAtual = now()->year;
    

        $dataInicial = Carbon::create(
            $anoAtual, $mesAnterior, 16
        )->startOfDay();

        $dataFinal = Carbon::create(
            $anoAtual, $mesAtual, 15
        )->endOfDay();

        

        return $periodo = 
            [
                'inicial' => $dataInicial->format('Y-m-d'),
                'final'   => $dataFinal->format('Y-m-d'),
            ];

    }


    // Nao vou usar, mas deixo aqui para o caso de precisar de algo mais complexo no futuro
    public function anoParaMes(int $mes): int 
    {
        $mesAtual = (int) date('m');
        $anoAtual = (int) date('Y');

        if($mes == 12 && $mesAtual == 1){
            return $anoAtual - 1;
        }

        if($mes == 1 && $mesAtual == 12 ){
            return $anoAtual + 1;
        }
        return $anoAtual;   
    }
} 