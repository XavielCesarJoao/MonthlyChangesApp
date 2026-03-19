<?php

use Livewire\Component;

new class extends Component
{
    public $name = 'XAVIEL JOAO';

};
?>

<div>
    {{-- FILTROS --}}
    <div class="card shadow-sm mb-3" style="border-radius: 8px; border: 1px solid #e9ecef;">
        <div class="card-body" style="background-color: #f8f9fa; border-radius: 8px;">

            <div class="row">
                <!-- Primeira linha de filtros -->
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-semibold" style="color: #495057; font-size: 0.9rem;">Empresa</label>
                    <select class="form-control form-control-sm" wire:model="empresa" style="border: 1px solid #ced4da; border-radius: 6px;">
                        <option value="">Todas</option>
                        <option>Engevia Construção Civil</option>
                    </select>
                </div>

                <div class="col-md-3 mb-2">
                    <label class="form-label fw-semibold" style="color: #495057; font-size: 0.9rem;">Departamento</label>
                    <select class="form-control form-control-sm" wire:model="departamento" style="border: 1px solid #ced4da; border-radius: 6px;">
                        <option value="">Todos</option>
                    </select>
                </div>

                <div class="col-md-3 mb-2">
                    <label class="form-label fw-semibold" style="color: #495057; font-size: 0.9rem;">Funcionário</label>
                    <select class="form-control form-control-sm" wire:model="funcionarioFiltro" style="border: 1px solid #ced4da; border-radius: 6px;">
                        <option value="">Todos</option>
                    </select>
                </div>

                <div class="col-md-3 mb-2">
                    <label class="form-label">&nbsp;</label>
                    <button class="btn btn-success form-control form-control-sm" style="background-color: #28a745; border: none; border-radius: 6px; font-weight: 500;">
                        Enviar para aprovação
                    </button>
                </div>

                <!-- Segunda linha de filtros -->
                <div class="col-md-3 mb-2">
                    <label class="form-label fw-semibold" style="color: #495057; font-size: 0.9rem;">Estado</label>
                    <select class="form-control form-control-sm" wire:model="estadoFiltro" style="border: 1px solid #ced4da; border-radius: 6px;">
                        <option value="">TODOS</option>
                        <option>Administrativo RH</option>
                        <option>Aprovado</option>
                        <option>Rejeitado</option>
                    </select>
                </div>

                <div class="col-md-2 mb-2">
                    <label class="form-label">&nbsp;</label>
                    <button class="btn btn-primary form-control form-control-sm" style="background-color: #007bff; border: none; border-radius: 6px; font-weight: 500;">
                        Exportar Excel
                    </button>
                </div>
            </div>

        </div>
    </div>

    {{-- TABELA --}}
    <div class="card shadow-sm" style="border-radius: 8px; border: 1px solid #e9ecef;">
        <div class="card-body p-0" style="border-radius: 8px; overflow: hidden;">

            <div class="table-responsive">
                <table class="table table-hover table-sm mb-0" style="font-size: 0.9rem;">
                    
                    <thead style="background-color: #e9ecef; color: #495057; border-bottom: 2px solid #dee2e6;">
                        <tr>
                            <th class="py-2 px-3 fw-semibold">Data</th>
                            <th class="py-2 px-3 fw-semibold">Funcionário</th>
                            <th class="py-2 px-3 fw-semibold">Tipo de Alteração</th>
                            <th class="py-2 px-3 fw-semibold">Processamento</th>
                            <th class="py-2 px-3 fw-semibold">Horas/Valor</th>
                            <th class="py-2 px-3 fw-semibold text-center">Observações</th>
                            <th class="py-2 px-3 fw-semibold">Estado</th>
                            <th class="py-2 px-3 fw-semibold">Lançado por</th>
                            <th class="py-2 px-3 fw-semibold text-end">Ações</th>
                        </tr>
                    </thead>

                    <tbody>
                        <tr style="border-bottom: 1px solid #e9ecef;">
                            <td class="py-2 px-3" style="color: #212529;">04-03-2026</td>
                            <td class="py-2 px-3">
                                <strong style="color: #2c3e50;">0020591</strong> 
                                <span style="color: #6c757d;">- Fernando João Focola</span>
                            </td>
                            <td class="py-2 px-3" style="color: #212529;">F28 - Doença Justificada</td>
                            <td class="py-2 px-3" style="color: #212529;">Vencimento</td>
                            <td class="py-2 px-3" style="color: #212529;">9.00</td>
                            <td class="py-2 px-3 text-center">
                                <span class="badge bg-warning text-dark" style="background-color: #ffc107; color: #212529; padding: 4px 8px; border-radius: 4px;">!</span>
                            </td>
                            <td class="py-2 px-3">
                                <span class="badge bg-info" style="background-color: #17a2b8; color: white; padding: 4px 8px; border-radius: 4px;">
                                    Administrativo RH
                                </span>
                            </td>
                            <td class="py-2 px-3" style="color: #212529;">Recursos Humanos</td>
                            <td class="py-2 px-3 text-end">
                                <button class="btn btn-sm btn-danger me-1" style="padding: 4px 8px; border-radius: 4px;">
                                    <i class="bi bi-trash"></i>
                                </button>
                                <button class="btn btn-sm btn-warning" style="padding: 4px 8px; border-radius: 4px;">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                        </tr>
                        
                        <!-- Repetir linhas conforme necessário -->
                        <tr style="border-bottom: 1px solid #e9ecef;">
                            <td class="py-2 px-3" style="color: #212529;">04-03-2026</td>
                            <td class="py-2 px-3">
                                <strong style="color: #2c3e50;">0020591</strong> 
                                <span style="color: #6c757d;">- {{ $name }}</span>
                            </td>
                            <td class="py-2 px-3" style="color: #212529;">F28 - Doença Justificada</td>
                            <td class="py-2 px-3" style="color: #212529;">Vencimento</td>
                            <td class="py-2 px-3" style="color: #212529;">9.00</td>
                            <td class="py-2 px-3 text-center">
                                <span class="badge bg-warning text-dark" style="background-color: #ffc107; color: #212529; padding: 4px 8px; border-radius: 4px;">!</span>
                            </td>
                            <td class="py-2 px-3">
                                <span class="badge bg-info" style="background-color: #17a2b8; color: white; padding: 4px 8px; border-radius: 4px;">
                                    Administrativo RH
                                </span>
                            </td>
                            <td class="py-2 px-3" style="color: #212529;">Recursos Humanos</td>
                            <td class="py-2 px-3 text-end">
                                <button class="btn btn-sm btn-danger me-1" style="padding: 4px 8px; border-radius: 4px;">
                                    <i class="bi bi-trash"></i>
                                </button>
                                <button class="btn btn-sm btn-warning" style="padding: 4px 8px; border-radius: 4px;">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                        </tr>
                        
                        <tr style="border-bottom: 1px solid #e9ecef;">
                            <td class="py-2 px-3" style="color: #212529;">04-03-2026</td>
                            <td class="py-2 px-3">
                                <strong style="color: #2c3e50;">0020591</strong> 
                                <span style="color: #6c757d;">- Fernando João Focola</span>
                            </td>
                            <td class="py-2 px-3" style="color: #212529;">F28 - Doença Justificada</td>
                            <td class="py-2 px-3" style="color: #212529;">Vencimento</td>
                            <td class="py-2 px-3" style="color: #212529;">9.00</td>
                            <td class="py-2 px-3 text-center">
                                <span class="badge bg-warning text-dark" style="background-color: #ffc107; color: #212529; padding: 4px 8px; border-radius: 4px;">!</span>
                            </td>
                            <td class="py-2 px-3">
                                <span class="badge bg-info" style="background-color: #17a2b8; color: white; padding: 4px 8px; border-radius: 4px;">
                                    Administrativo RH
                                </span>
                            </td>
                            <td class="py-2 px-3" style="color: #212529;">Recursos Humanos</td>
                            <td class="py-2 px-3 text-end">
                                <button class="btn btn-sm btn-danger me-1" style="padding: 4px 8px; border-radius: 4px;">
                                    <i class="bi bi-trash"></i>
                                </button>
                                <button class="btn btn-sm btn-warning" style="padding: 4px 8px; border-radius: 4px;">
                                    <i class="bi bi-pencil"></i>
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>