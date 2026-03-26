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
        $this->empresa = Auth()->user()->empresa_id; 
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

    public function enviarAprovacao()
    {
        dd($this->empresa);
        // Aqui você pode adicionar a lógica para enviar os dados para aprovação
    }

};
