<?php

namespace App\Domain\AlteracoesMensais\DTOs;

class AlteracaoData
{
    public $data;
    public $funcionario;
    public $tipoAlteracao;
    public $processamento;
    public $horaValor;
    public $observacao;
    public $estado;
    public $lancadoPor;
    // filtros
    public $empresa = '';
    public $departamento = '';
    public $funcionarioFiltro = '';
    public $estadoFiltro = '';
}
