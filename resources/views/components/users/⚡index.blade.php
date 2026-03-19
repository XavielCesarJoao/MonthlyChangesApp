<?php

use App\Models\User;
use Livewire\Attributes\Computed;
use Livewire\Component;
use Livewire\WithPagination;


new class extends Component {
    use WithPagination;

    public $statusFilter;

    #[Computed]
    public function users()
    {
        $users = User::query()
            ->when($this->statusFilter === 'active', function ($q) {
                $q->where('is_active', true);
            })
            ->when($this->statusFilter === 'inactive', function ($q) {
                $q->where('is_active', false);
            })
            ->orderBy('id')
            ->paginate(10);
        return $users;
    }

    public function changeUserStatus(int $userId,  int $status) : void
    {
        sleep(5);
        User::where('id', $userId)
            ->update(['is_active' => !$status]);
        Log::info('Estado do usuario com Id: ' . $userId . ' Atualizado com sucesso para: ' . $status);
        toastr()->success('Data has been saved successfully!', 'Sucesso', ['timeOut' => 5000]);
    }
};
?>

<div class="container-fluid">

    <div wire:loading>
        <div
            style="position: fixed;
           display: flex;
           flex-direction: column;
           width: 100%;
           height: 100%;
           z-index: 1050;
           left: 0;
           top: 0;
           justify-content: center;
           align-items: center;
           background: rgba(0,0,0,.35);">

            <div class="card shadow-sm p-4 text-center" style="min-width: 260px;">
                <i class="fas fa-cogs fa-spin fa-2x text-primary mb-3"></i>

                <div class="font-weight-bold">
                    A executar operação
                </div>

                <small class="text-muted">
                    Por favor aguarde…
                </small>

                <div class="progress mt-3" style="height: 4px;">
                    <div class="progress-bar progress-bar-striped progress-bar-animated w-100"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header -->
    <div class="row mb-3">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">
                <i class="fas fa-users mr-1"></i> Utilizadores
            </h1>
            <small class="text-muted">
                Gestão de utilizadores
            </small>
        </div>

        <div class="col-sm-6 text-right">
            <button class="btn btn-primary" wire:click.debounce="newUser">
                <i class="fas fa-plus mr-1"></i> Novo Utilizador
            </button>
        </div>
    </div>

    <!-- Card -->
    <div class="card card-outline card-primary shadow-sm">
        <div class="card-header d-flex align-items-center">
            <h3 class="card-title mb-0">
                <i class="fas fa-list mr-1"></i> Lista de Utilizadores
            </h3>

            li
            <div class="card-tools ml-auto">
                <div class="card-tools ml-auto d-flex align-items-center">
                    <!-- Filtro de estado -->
                    <select
                        wire:model.live="statusFilter"
                        class="form-control form-control-sm mr-2"
                        style="width: 140px;">
                        <option value="all">Todos</option>
                        <option value="active">Ativos</option>
                        <option value="inactive">Inativos</option>
                    </select>

                    <!-- Search (fica igual) -->
                    <div class="input-group input-group-sm" style="width: 250px;">
                        <input
                            type="text"
                            class="form-control"
                            placeholder="Pesquisar utilizador...">
                        <div class="input-group-append">
                            <button class="btn btn-primary">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Table -->
        <div class="card-body p-0">
            <table class="table table-hover table-striped mb-0">
                <thead class="thead-light">
                <tr>
                    <th style="width: 60px">#</th>
                    <th>Nome</th>
                    <th>Estado</th>
                    <th>Email</th>
                    <th>Perfil</th>
                    <th style="width: 120px" class="text-center">Ações</th>
                </tr>
                </thead>

                <tbody>
                @forelse($this->users as $user)

                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>
                            <strong>{{ $user->name }}</strong>


                        </td>
                        <td>
                            <span class="badge {{ $user->is_active ? 'badge-success' : 'badge-secondary' }}">
                                  {{ $user->is_active ? 'Ativo' : 'Inativo' }}
                             </span>
                        </td>

                        <td>{{ $user->email }}</td>
                        <td>{{ $user->roles->first() ?  $user->roles->first()->title : 'Sem Perfil'}}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-sm">
                                <button class="btn btn-info" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </button>
                                <button class="btn btn-secondary dropdown-toggle dropdown-icon"
                                        data-toggle="dropdown">
                                </button>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a wire:navigate class="dropdown-item" href="{{route('admin.users.edit', $user->id)}}">
                                        <i class="fas fa-user-edit mr-1"></i> Editar
                                    </a>
                                    <button
                                        wire:confirm="Tem a certeza que deseja {{ $user->is_active ? 'desativar' : 'ativar' }} este utilizador ?"

                                        wire:click="changeUserStatus({{ $user->id }}, {{ $user->is_active ? 1 : 0 }})"
                                        class="dropdown-item">

                                        <i class="fas {{ $user->is_active ? 'fa-user-slash text-warning' : 'fa-user-check text-success' }} mr-1"></i>
                                        {{ $user->is_active ? 'Desativar' : 'Ativar' }}
                                    </button>

                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-clipboard-list mr-1"></i> Auditoria
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item text-danger" href="#">
                                        <i class="fas fa-bell mr-1"></i> Notificar
                                    </a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center text-muted p-4">
                            <i class="fas fa-info-circle mr-1"></i>
                            Nenhum utilizador encontrado
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        <!-- Footer (opcional) -->
        <div class="card-footer text-muted small">
            Total de utilizadores: {{ $this->users->count() ?? 0 }}
        </div>
    </div>
</div>
