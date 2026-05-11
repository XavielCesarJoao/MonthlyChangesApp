
<div>
    <x-geral.wire-loading />
    <div class="card shadow-sm mb-3" style="border-radius: 8px; border: 1px solid #dee2e6;">
<div class="px-3 py-2 d-flex justify-content-between align-items-center border-bottom" 
     style="background: linear-gradient(135deg, #f8f9fa 0%, #ffffff 100%);">

    <div class="d-flex align-items-center gap-2">

        <!-- Botão Atualizar -->
        <button class="btn btn-sm border-0" 
                title="Atualizar filtros" 
                wire:click="resetarFiltros"
                style="background: #f1f3f5; color: #495057; width: 34px; height: 34px; border-radius: 5px;">
            <i class="bi bi-arrow-clockwise"></i>
        </button>

        <!-- Botão Exportar Excel -->
        <button class="btn btn-sm border-0" 
                title="Exportar para Excel" 
                wire:click="exportarExcel"
                style="background: #f1f3f5; color: #198754; width: 34px; height: 34px; border-radius: 5px;">
            <i class="bi bi-file-earmark-excel"></i>
        </button>

        <div class="vr mx-1" style="color: #dee2e6;"></div>

        <!-- Botão Enviar para Aprovação -->
        <div class="vr mx-1" style="color: #dee2e6;"></div>
        <!-- Botão Voltar/Recusar -->
        <button class="btn btn-sm" 
            title="Recusar e voltar documento" 
            wire:click="recusarDocumento"
            style="background: #dc3545; color: white; border-radius: 5px; padding: 5px px;">
            <i class="bi bi-arrow-return-left me-1"></i> Voltar/Recusar
          </button>
    <div class="vr mx-1" style="color: #dee2e6;"></div>
    <button class="btn btn-sm" 
            wire:click="enviarAprovacao"
            style="background: #198754; color: white; border-radius: 5px; padding: 5px 12px;">
        <i class="bi bi-send me-1"></i> Enviar aprovação
    </button>
     <div class="vr mx-1" style="color: #dee2e6;"></div>
        <!-- Botão Histórico (opcional) -->
        <button class="btn btn-sm border-0" 
                title="Ver histórico de aprovações" 
                wire:click="verHistorico"
                style="background: #f1f3f5; color: #6c757d; width: 34px; height: 34px; border-radius: 8px;">
            <i class="bi bi-clock-history"></i>
        </button>

    </div>

    <div class="d-flex align-items-center gap-2">
        <!-- Badge de status -->
        @if($statusAprovacao)
            <span class="badge" style="background: #e7f3ff; color: #0c63e4; padding: 5px 10px; border-radius: 20px;">
                <i class="bi bi-info-circle me-1"></i> {{ $statusAprovacao }}
            </span>
        @endif
        
        <!-- Título -->
        <div class="text-muted small fw-semibold">
            <i class="bi bi-calendar3 me-1"></i> Alterações mensais
        </div>
    </div>

</div>

    <!-- BODY -->
    <div class="card-body" style="background-color: #f8f9fa;">

        <div class="row g-2">

            <!-- Empresa -->    
            <div class="col-md-3">
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
                <select class="form-control form-control-sm"
                        wire:model="estadoFiltro"
                        style="border-radius: 6px;">
                    <option value="">Selecione o estado</option>
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
        <div class="bg-white border rounded-3">
        <div class="table-responsive">

            <table class="table table-hover table-sm mb-0" style="font-size:0.9rem">

                <thead class="table-light">
                    <tr>
                        <th class="px-3">Data</th>
                        <th class="px-3">Funcionário</th>
                        <th class="px-3">Tipo de Alteração</th>
                        <th class="px-3">Processamento</th>
                        <th class="px-3">Horas/Valor</th>
                        <th class="px-3 text-center">Obs</th>
                        <th class="px-3">Estado</th>
                        <th class="px-3">Lançado por</th>
                        <th class="px-3 text-end">Ações</th>
                    </tr>
                </thead>

                <tbody>

                    {{-- EXEMPLO DE LINHAS --}}
                    @foreach($linhas ?? [] as $linha)
                    <tr>
                        <td class="px-3">{{ $linha['data'] }}</td>
                        <td class="px-3"><strong>{{ $linha['funcionario'] }}</strong></td>
                        <td class="px-3">{{ $linha['motivo'] }}</td>
                        <td class="px-3">{{ $linha['tipo'] }}</td>
                        <td class="px-3">{{ $linha['valor'] }}</td>
                        <td class="px-3 text-center">!</td>
                        <td class="px-3">Administrativo RH</td>
                        <td class="px-3">RH</td>
                        <td class="px-3 text-end">
                            <button class="btn btn-sm btn-light border"><i class="bi bi-pencil"></i></button>
                            <button class="btn btn-sm btn-light border"><i class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach


                    <!-- ⭐ LINHA EXCEL -->
                    <tr class="linha-insert">

                        <td>
                            <input type="date" class="form-control form-control-sm"
                                   wire:model.defer="nova.data"
                                   wire:keydown.enter="addLinha">
                        </td>

                        <td>
                        <select class="form-control form-control-sm select2-funcionario"
                                wire:model="funcionarioFiltro"
                                style="border-radius: 6px;">
                            <option value="">Todos</option>
                            @foreach ($this->funcionarios as $funcionario)
                                <option value="{{ $funcionario['id'] }}"> {{ $funcionario['numeroFuncionario'] }} - {{ $funcionario['nome'] }}</option>
                            @endforeach
                        </select>
                        </td>

                        <td>
                        <select class="form-control form-control-sm select2-codigos"
                                    wire:model="funcionarioFiltro"
                                    style="border-radius: 6px;">
                                <option value="">Todos</option>
                                @foreach ($this->codigos as $c)
                                    <option value="{{ $c['codigo'] }}"> {{ $c['codigo'] }} - {{ $c['descricao'] }}</option>
                                @endforeach
                            </select>
                        </td>

                        <td>
                            <input type="text" class="form-control form-control-sm"
                                   placeholder="Processamento"
                                   wire:model.defer="nova.tipo"
                                   wire:keydown.enter="addLinha">
                        </td>

                        <td>
                            <input type="number" step="0.01" class="form-control form-control-sm"
                                   placeholder="Horas"
                                   wire:model.defer="nova.valor"
                                   wire:keydown.enter="addLinha">
                        </td>

                        <td colspan="3"></td>

                        <td class="text-end">
                            <button class="btn btn-success btn-sm d-flex align-items-center justify-content-center" 
                                    style="width: 32px; height: 32px; padding: 0; border-radius: 5px;"
                                    wire:click="addLinha"
                                    title="Adicionar nova linha">
                                <i class="bi bi-plus-lg" style="font-size: 1rem;">+</i>
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
                    width: '100%',
                     minimumInputLength: 3,
                    
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
                    width: '100%',
                    minimumInputLength: 3, // Inicia a busca após digitar 2 caracteres

                });
                // Atualiza o valor selecionado no Livewire quando a seleção muda
                $('.select2-funcionario').on('change', function() {
                    var selectedValue = $(this).val();
                    @this.set('funcionario', selectedValue);
                });
            });

            $(document).ready(function() {
                $('.select2-codigos').select2({
                    placeholder: 'Selecione o codigo',
                    width: '100%',
                    minimumInputLength: 3,
                });
                // Atualiza o valor selecionado no Livewire quando a seleção muda
                $('.select2-codigos').on('change', function() {
                    var selectedValue = $(this).val();
                    @this.set('codigoAlteracao', selectedValue);
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