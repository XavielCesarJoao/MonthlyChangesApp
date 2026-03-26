
<div>
    <x-geral.wire-loading />
    <div class="card shadow-sm mb-3" style="border-radius: 8px; border: 1px solid #dee2e6;">
    
<div class="px-3 py-2 d-flex justify-content-between align-items-center"
     style="background: #f1f3f5; border-bottom: 1px solid #dee2e6; border-radius: 8px 8px 0 0;">
    
    <div class="fw-semibold" style="color:#34495e;">
        Filtros
    </div>

    <div class="d-flex align-items-center gap-3">

        <button class="btn btn-light border d-flex align-items-center justify-content-center"
                style="width:36px; height:36px; margin-right: 8px;"
                title="Limpar filtros">
            <i class="bi bi-arrow-clockwise"></i>
        </button>

        <button class="btn btn-primary d-flex align-items-center justify-content-center"
                style="width:36px; height:36px; margin-right: 8px;"
                title="Exportar Excel">
            <i class="bi bi-file-earmark-excel"></i>
        </button>

        <button class="btn btn-success d-flex align-items-center justify-content-center"
                style="width:36px; height:36px;"
                title="Enviar para aprovação" wire:click="enviarAprovacao">
            <i class="bi bi-send"></i>
        </button>

    </div>
</div>

    <!-- BODY -->
    <div class="card-body" style="background-color: #f8f9fa;">

        <div class="row g-2">

            <!-- Empresa -->    
            <div class="col-md-3">
                <label class="form-label fw-semibold mb-1" style="font-size: 0.8rem; color:#495057;">
                    Empresa
                </label>
                <select class="form-control form-control-sm "
                        wire:model="empresa"
                        style="border-radius: 6px;">
                    @foreach ($this->buscaEmpresaDepartamentosFuncionariosDoUsuario as $empresa)
                        <option value="{{ $empresa['id'] }}"> {{ $empresa['nomeEmpresa'] }}</option> 
                    @endforeach
                  
                </select>
            </div>

            <!-- Departamento -->
            <div class="col-md-3">
                <label class="form-label fw-semibold mb-1" style="font-size: 0.8rem; color:#495057;">
                    Departamento
                </label>
                <select class="form-control form-control-sm select2-departamento"
                        wire:model="departamento"
                        style="border-radius: 6px;">
                        <option value="">Todos</option>
                        @foreach ($this->buscaEmpresaDepartamentosFuncionariosDoUsuario[0]['departamentos'] as $departamento)
                            <option value="{{ $departamento['id'] }}"> {{ $departamento['nomeDepartamento'] }}</option>  
                        @endforeach
                </select>
            </div>

            <!-- Funcionário -->
            <div class="col-md-3">
                <label class="form-label fw-semibold mb-1" style="font-size: 0.8rem; color:#495057;">
                    Funcionário
                </label>
                <select class="form-control form-control-sm select2-funcionario"
                        wire:model="funcionarioFiltro"
                        style="border-radius: 6px;">
                    <option value="">Todos</option>
                    @foreach ($this->funcionarios as $funcionario)
                        <option value="{{ $funcionario['id'] }}"> {{ $funcionario['numeroFuncionario'] }} - {{ $funcionario['nome'] }}</option>
                    @endforeach
                </select>
            </div>

            <!-- Estado -->
            <div class="col-md-3">
                <label class="form-label fw-semibold mb-1" style="font-size: 0.8rem; color:#495057;">
                    Estado
                </label>
                <select class="form-control form-control-sm"
                        wire:model="estadoFiltro"
                        style="border-radius: 6px;">
                    <option value="">Todos</option>
                    <option>Administrativo RH</option>
                    <option>Aprovado</option>
                    <option>Rejeitado</option>
                </select>
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
                                <span style="color: #6c757d;">- Osvaldo XPTO </span>
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

@push('js')
    <script>

        function inizializaSelec2() {
            $(document).ready(function() {
                $('.select2-departamento').select2({
                    placeholder: 'Selecione um departamento',
                    width: '100%'
                });
                // Atualiza o valor selecionado no Livewire quando a seleção muda
                $('.select2-departamento').on('change', function() {
                    var selectedValue = $(this).val();
                    @this.set('departamento', selectedValue);
                });
            });

            
            $(document).ready(function() {
                $('.select2-funcionario').select2({
                    placeholder: 'Selecione um funcionário',
                    width: '100%'
                });
                // Atualiza o valor selecionado no Livewire quando a seleção muda
                $('.select2-funcionario').on('change', function() {
                    var selectedValue = $(this).val();
                    @this.set('funcionario', selectedValue);
                });
            });

            
        }

        document.addEventListener('livewire:initialized', function() {
            inizializaSelec2();
            Livewire.hook('morph.updated', ({ el, component }) => {
                   inizializaSelec2();
            })
        })

    </script>
@endpush