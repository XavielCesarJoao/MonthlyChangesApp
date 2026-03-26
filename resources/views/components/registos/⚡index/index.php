<?php

use App\Models\Internal\Empresa;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Livewire\Attributes\Computed;
use Livewire\Component;

new class extends Component
{

    public $empresa;
    public $departamento;
    public $funcionario;

    public function mount()
    {
        $this->empresa = 4; 
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


    public function enviarAprovacao()
    {
        dd($this->empresa, $this->departamento, $this->funcionario);
        // Aqui você pode adicionar a lógica para enviar os dados para aprovação
    }



};
