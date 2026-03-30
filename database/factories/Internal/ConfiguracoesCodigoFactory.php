<?php

namespace Database\Factories\Internal;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Internal\ConfiguracaoCodigo>
 */
class ConfiguracoesCodigoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $tipos = ['F', 'H', 'R', 'D'];
        
 $codigosMap = [
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
         $codigoData = $this->faker->randomElement($codigosMap);

                 return [
            'codigo' => $codigoData['codigo'],
            'descricao' => $codigoData['descricao'],
            'tipo' => $codigoData['tipo'],
            'maxLinhasPeriodo' => $codigoData['maxLinhasPeriodo'],
            'minValorLinha' => $codigoData['minValorLinha'],
            'maxValorLinha' => $codigoData['maxValorLinha'],
            'maxSomaPeriodo' => $codigoData['maxSomaPeriodo'],
            'listaValoresPossiveis_id' => null,
            'domingosAndFeriados' => $this->faker->boolean(10), // 10% de chance
            'escondeAteLimite' => null,
            'mostraAteLimite' => null,
            'escondeDesdeLimite' => null,
            'mostraDesdeLimite' => null,
            'dependeDe' => null,
            'unicoNoPeriodo' => $codigoData['unicoNoPeriodo'] ?? null,
            'valorPorDefeito' => $codigoData['valorPorDefeito'],
            'alteracaomensal_type' => $this->getAlteracaoMensalType($codigoData['tipo']),
            'empresa_id' => fake()->numberBetween(1,5),
        ];
    }


    /**
     * Define o tipo de modelo com base no código
     */
    public function getAlteracaoMensalType(string $tipo): string
    {
        return match ($tipo) {
            'F' => 'App\Models\External\PRIMAVERA\Falta',
            'H' => 'App\Models\External\PRIMAVERA\HoraExtra',
            'R' => 'App\Models\External\PRIMAVERA\Remuneracao',
            'D' => 'App\Models\External\PRIMAVERA\Desconto',
            default => 'App\Models\External\PRIMAVERA\Falta',
        };
    }

        /**
     * Configuração para códigos de falta
     */
    public function falta(): static
    {
        return $this->state(fn (array $attributes) => [
            'tipo' => 'F',
            'alteracaomensal_type' => 'App\Models\External\PRIMAVERA\Falta',
            'minValorLinha' => 1,
            'maxValorLinha' => 9,
        ]);
    }

        /**
     * Configuração para horas extras
     */
    public function horaExtra(): static
    {
        return $this->state(fn (array $attributes) => [
            'tipo' => 'H',
            'alteracaomensal_type' => 'App\Models\External\PRIMAVERA\HoraExtra',
            'minValorLinha' => 1,
            'maxValorLinha' => 15,
        ]);
    }

        public function remuneracao(): static
    {
        return $this->state(fn (array $attributes) => [
            'tipo' => 'R',
            'alteracaomensal_type' => 'App\Models\External\PRIMAVERA\Remuneracao',
            'minValorLinha' => 100,
            'maxValorLinha' => 100000,
        ]);
    }

        /**
     * Configuração para descontos
     */
    public function desconto(): static
    {
        return $this->state(fn (array $attributes) => [
            'tipo' => 'D',
            'alteracaomensal_type' => 'App\Models\External\PRIMAVERA\Desconto',
            'minValorLinha' => 100,
            'maxValorLinha' => 50000,
        ]);
    }

        /**
     * Configuração para códigos únicos no período
     */
    public function unicoNoPeriodo(): static
    {
        return $this->state(fn (array $attributes) => [
            'unicoNoPeriodo' => 1,
            'maxLinhasPeriodo' => 1,
        ]);
    }

        /**
     * Configuração para férias
     */
    public function ferias(): static
    {
        return $this->state(fn (array $attributes) => [
            'codigo' => 'F50',
            'descricao' => 'GOZO DE FERIAS (DIAS)',
            'tipo' => 'F',
            'maxLinhasPeriodo' => 1,
            'minValorLinha' => 1,
            'maxValorLinha' => 30,
            'maxSomaPeriodo' => 30,
            'unicoNoPeriodo' => 1,
            'alteracaomensal_type' => 'App\Models\External\PRIMAVERA\Falta',
        ]);
    }

        /**
     * Configuração para prémios de assiduidade
     */
    public function premioAssiduidade(): static
    {
        return $this->state(fn (array $attributes) => [
            'tipo' => 'R',
            'maxLinhasPeriodo' => 1,
            'minValorLinha' => 1,
            'maxValorLinha' => 1,
            'maxSomaPeriodo' => 1,
            'unicoNoPeriodo' => 1,
            'valorPorDefeito' => 1,
            'alteracaomensal_type' => 'App\Models\External\PRIMAVERA\Remuneracao',
        ]);
    }

}
