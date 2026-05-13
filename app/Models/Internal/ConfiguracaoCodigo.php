<?php

namespace App\Models\Internal;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Log;

class ConfiguracaoCodigo extends Model
{
    use HasFactory;

   protected $guarded = [];

    public $timestamps = false;



    public function buscaCodigo(int $empresa) : Array
    {
        try{
            Log::info('Buscando codigo da empresa ' . $empresa);
    
            return self::where('empresa_id', $empresa)->get()->toArray();
        }
        catch(Exception $ex)
        {
            Log::warning('Sem registos para a empresa' . $empresa);

            return [];
        }
      
    }

    public function empresa() : BelongsTo
    {
        return $this->belongsTo(Empresa::class);
    }
    // ESSA TODA BANGUNÇA É PARA LIMPAR , ESTE PROJECTO NAO PODE FICAR SUJO NAO
    private static $codigosMap = [
            // FALTAS (F)
            ['codigo' => 'F01', 'descricao' => 'FALTA JUSTIFICADA (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F02', 'descricao' => 'LICENÇA SEM VENCIMENTO SEM REMUNERAÇÃO (DIAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 30, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F03', 'descricao' => 'FALTA INJUSTIFICADA (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F04', 'descricao' => 'BAIXA MÉDICA (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F07', 'descricao' => 'FALTA JUSTIFICADA SEM REMUNERACAO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F10', 'descricao' => 'FALTA JUSTIFICADA SEM REMUNERAÇÃO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F20', 'descricao' => 'ATOS SINDICAIS SEM REMUNERAÇÃO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F21', 'descricao' => 'ATOS SINDICAIS (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F22', 'descricao' => 'ALEITAÇÃO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F23', 'descricao' => 'ASSISTÊNCIA FAMILIARES E FILHOS (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F24', 'descricao' => 'BAIXA DE SEGURO SEM REMUNERAÇÃO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F25', 'descricao' => 'BAIXA DE SEGURO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F26', 'descricao' => 'BAIXA MÉDICA SEM REMUNERAÇÃO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F27', 'descricao' => 'DESLOCAÇÃO TRANSFERIDO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F28', 'descricao' => 'DOENÇA JUSTIFICADA (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F29', 'descricao' => 'EXAMES ESCOLARES SEM REMUNERAÇÃO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F30', 'descricao' => 'EXAMES ESCOLARES (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F31', 'descricao' => 'FORMAÇÃO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F32', 'descricao' => 'INACTIVIDADE MAU TEMPO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F33', 'descricao' => 'INACTIVIDADE OBRA (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F34', 'descricao' => 'LICENÇA PARTO (DIAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 90, 'maxSomaPeriodo' => 90, 'valorPorDefeito' => null],
            ['codigo' => 'F35', 'descricao' => 'LICENÇA POR TRANSFERÊNCIA (DIAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 30, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F36', 'descricao' => 'OBRIGAÇÕES LEGAIS (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F37', 'descricao' => 'PATERNIDADE (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F38', 'descricao' => 'PRÉ-LICENÇA MATERNIDADE SEM REMUNERAÇÃO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F39', 'descricao' => 'SUSPENSÃO DISCIPLINAR (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F43', 'descricao' => 'OBRIGAÇÕES MILITARES (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F50', 'descricao' => 'GOZO DE FERIAS (DIAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => 1, 'minValorLinha' => 1, 'maxValorLinha' => 30, 'maxSomaPeriodo' => 30, 'valorPorDefeito' => null],
            ['codigo' => 'F51', 'descricao' => 'CASAMENTO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => 1, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => 9, 'valorPorDefeito' => null],
            ['codigo' => 'F61', 'descricao' => 'OBITO (HORAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 9, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'F62', 'descricao' => 'LICENÇA MATERNIDADE SEM REMUNERAÇÃO (DIAS)', 'tipo' => 'F', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 90, 'maxSomaPeriodo' => 90, 'valorPorDefeito' => null],
            
            // HORAS EXTRAS (H)
            ['codigo' => 'H01', 'descricao' => 'HORA EXTRA 50% (HORAS)', 'tipo' => 'H', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 15, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'H02', 'descricao' => 'HORA NOTURNA (HORAS)', 'tipo' => 'H', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 12, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'H03', 'descricao' => 'HORA EXTRA 75% (HORAS)', 'tipo' => 'H', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 15, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'H07', 'descricao' => 'HORA NOTURNA (HORAS)', 'tipo' => 'H', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 12, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'H08', 'descricao' => 'HORA EXTRA 50% (HORAS)', 'tipo' => 'H', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 15, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'H09', 'descricao' => 'HORA EXTRA 50% (HORAS)', 'tipo' => 'H', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 15, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            
            // REMUNERAÇÕES (R)
            ['codigo' => 'R12', 'descricao' => 'AJUDA DE CUSTO COM DESLOCACAO (AKZ)', 'tipo' => 'R', 'maxLinhasPeriodo' => null, 'minValorLinha' => 100, 'maxValorLinha' => 50000, 'maxSomaPeriodo' => null, 'valorPorDefeito' => 500],
            ['codigo' => 'R14', 'descricao' => 'AJUDA DE CUSTO COM DESLOCACAO (AKZ)', 'tipo' => 'R', 'maxLinhasPeriodo' => null, 'minValorLinha' => 100, 'maxValorLinha' => 50000, 'maxSomaPeriodo' => null, 'valorPorDefeito' => 500],
            ['codigo' => 'R16', 'descricao' => 'AJUDA DE CUSTO COM DESLOCACAO (AKZ)', 'tipo' => 'R', 'maxLinhasPeriodo' => null, 'minValorLinha' => 100, 'maxValorLinha' => 50000, 'maxSomaPeriodo' => null, 'valorPorDefeito' => 500],
            ['codigo' => 'R20', 'descricao' => 'PREMIO DE PRODUTIVIDADE (AKZ)', 'tipo' => 'R', 'maxLinhasPeriodo' => null, 'minValorLinha' => 100, 'maxValorLinha' => 100000, 'maxSomaPeriodo' => null, 'valorPorDefeito' => 500],
            ['codigo' => 'R32', 'descricao' => 'ADICIONAL POR TURNO 20% (1)', 'tipo' => 'R', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 1, 'maxSomaPeriodo' => null, 'valorPorDefeito' => 1],
            ['codigo' => 'R33', 'descricao' => 'PREMIO DE PRODUTIVIDADE (AKZ)', 'tipo' => 'R', 'maxLinhasPeriodo' => null, 'minValorLinha' => 100, 'maxValorLinha' => 100000, 'maxSomaPeriodo' => null, 'valorPorDefeito' => 500],
            ['codigo' => 'R42', 'descricao' => 'ADICIONAL POR TURNO 20% (1)', 'tipo' => 'R', 'maxLinhasPeriodo' => null, 'minValorLinha' => 1, 'maxValorLinha' => 1, 'maxSomaPeriodo' => null, 'valorPorDefeito' => 1],
            ['codigo' => 'R67', 'descricao' => 'PREMIO DE PRODUTIVIDADE (AKZ)', 'tipo' => 'R', 'maxLinhasPeriodo' => null, 'minValorLinha' => 100, 'maxValorLinha' => 100000, 'maxSomaPeriodo' => null, 'valorPorDefeito' => 500],
            ['codigo' => 'R70', 'descricao' => 'PRÉMIO DE ASSIDUIDADE 100%', 'tipo' => 'R', 'maxLinhasPeriodo' => 1, 'minValorLinha' => 1, 'maxValorLinha' => 1, 'maxSomaPeriodo' => 1, 'unicoNoPeriodo' => 1, 'valorPorDefeito' => 1],
            ['codigo' => 'R71', 'descricao' => 'PRÉMIO DE ASSIDUIDADE 50%', 'tipo' => 'R', 'maxLinhasPeriodo' => 1, 'minValorLinha' => 1, 'maxValorLinha' => 1, 'maxSomaPeriodo' => 1, 'unicoNoPeriodo' => 1, 'valorPorDefeito' => 1],
            ['codigo' => 'R72', 'descricao' => 'PRÉMIO DE ASSIDUIDADE 25%', 'tipo' => 'R', 'maxLinhasPeriodo' => 1, 'minValorLinha' => 1, 'maxValorLinha' => 1, 'maxSomaPeriodo' => 1, 'unicoNoPeriodo' => 1, 'valorPorDefeito' => 1],
            
            // DESCONTOS (D)
            ['codigo' => 'D001', 'descricao' => 'DEDUCAO DE VALORES JÁ PAGOS (AKZ)', 'tipo' => 'D', 'maxLinhasPeriodo' => null, 'minValorLinha' => 100, 'maxValorLinha' => 50000, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'D06', 'descricao' => 'DEDUCAO DE VALORES JÁ PAGOS (AKZ)', 'tipo' => 'D', 'maxLinhasPeriodo' => null, 'minValorLinha' => 100, 'maxValorLinha' => 50000, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'D07', 'descricao' => 'DEDUCAO DE VALORES JÁ PAGOS (AKZ)', 'tipo' => 'D', 'maxLinhasPeriodo' => null, 'minValorLinha' => 100, 'maxValorLinha' => 50000, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
            ['codigo' => 'D66', 'descricao' => 'DEDUCAO DE VALORES JÁ PAGOS (AKZ)', 'tipo' => 'D', 'maxLinhasPeriodo' => null, 'minValorLinha' => 100, 'maxValorLinha' => 50000, 'maxSomaPeriodo' => null, 'valorPorDefeito' => null],
        ];


    public static function inseriCodigo(int $empresa): bool
    {
        try{

            foreach(self::$codigosMap as $codigo)
                {
                    $codigoExiste = self::where('codigo', $codigo['codigo'])->where('empresa_id', $empresa)->exists();
                    if(!$codigoExiste)
                        {
                            self::create([
                                'codigo' => $codigo['codigo'],
                                'descricao' => $codigo['descricao'],
                                'tipo' => $codigo['tipo'],
                                'maxLinhasPeriodo' => $codigo['maxLinhasPeriodo'],
                                'minValorLinha' => $codigo['minValorLinha'],
                                'maxValorLinha' => $codigo['maxValorLinha'],
                                'maxSomaPeriodo' => $codigo['maxSomaPeriodo'],
                                'valorPorDefeito' => $codigo['valorPorDefeito'],
                                'domingosAndFeriados' => 0,
                                'empresa_id' => $empresa
                                
                            ]);
                        }
                }

                return true;
        }

        catch(Exception $ex)
        {
          
            dd($ex);
        }
            
        
    }
}
