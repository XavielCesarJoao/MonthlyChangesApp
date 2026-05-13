<?php

use App\Domain\AlteracoesMensais\Actions\Configuracoes;
use App\Models\Internal\ConfiguracaoCodigo;
use App\Models\Internal\Empresa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{

    public $empresa;
    public $departamento;
    public $funcionario;

    public $dataInicial;
    // DATA FINAL DO PERIODO
    public $dataFinal;
    // DATA SELECIONADA NO DATEPICKER
    public $dataAlteracao;
    public $tipoAlteracao;
    public $observacao;
    public $statusAprovacao = true;
    public $codigoAlteracao;


        public function mount()
        {
            $this->empresa = Auth::user()->empresa_id ; 

            $config = new Configuracoes() ;

            $periodo = $config->devolvePeriodo($this->empresa);

            $this->dataInicial = $periodo['inicial'];
            $this->dataFinal = $periodo['final'];

            $this->dataAlteracao = $periodo['inicial'];
        }

        #[Computed] 
        public function buscaEmpresaDepartamentosFuncionariosDoUsuario() : Array
        {
            try
            {
                Log::info('Buscando empresa com id : ' . $this->empresa);
                $empresa = new Empresa();
                return $empresa->buscaEmpresa($this->empresa)->toArray();

            }
            catch(Exception $ex)
            {
                Log::error('Erro ao buscar empresa do usuario: ' . $ex->getMessage());
                return [];
            }
        }

        #[Computed]
        public function funcionarios() : array
        {
            $query = \App\Models\External\Funcionario::query()
                ->where('empresa_id', $this->empresa);

            // só filtra por departamento se existir
            if (!empty($this->departamento)) {
                $query->where('departamento_id', $this->departamento);
            }

            return $query->get()->toArray();
        }

        #[Computed]
        public function codigos() : Array
        {
            $codigos = new ConfiguracaoCodigo();
            return $codigos->buscaCodigo($this->empresa);
        }


        public function addCodigo(){
            
         $codigos = new ConfiguracaoCodigo();
           //  dd($this->empresa);
         $codigos-> inseriCodigo( $this->empresa);
        }


        public function adicionaLinha(){
            dd($this->dataAlteracao);
        }






};
