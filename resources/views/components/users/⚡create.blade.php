<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>

<div class="container-fluid">

    {{-- LOADING GLOBAL --}}
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
                    A guardar alterações
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

    {{-- HEADER --}}
    <div class="row mb-3">
        <div class="col-sm-6">
            <h1 class="m-0 text-dark">
                <i class="fas fa-user-edit mr-1"></i> Editar Utilizador
            </h1>
            <small class="text-muted">
                Atualização de dados do utilizador
            </small>
        </div>

        <div class="col-sm-6 text-right">
            <a wire:navigate href="{{ route('admin.users.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left mr-1"></i> Voltar
            </a>
        </div>
    </div>

    <form wire:submit.prevent="save">

        <div class="row">

            {{-- DADOS PRINCIPAIS --}}
            <div class="col-md-8">
                <div class="card card-outline card-primary shadow-sm">

                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-id-card mr-1"></i> Dados do Utilizador
                        </h3>
                    </div>

                    <div class="card-body">

                        {{-- Nome --}}
                        <div class="form-group">
                            <label>Nome</label>
                            <input
                                type="text"
                                wire:model.defer="user.name"
                                class="form-control @error('user.name') is-invalid @enderror">

                            @error('user.name')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Email --}}
                        <div class="form-group">
                            <label>Email</label>
                            <input
                                type="email"
                                wire:model.defer="user.email"
                                class="form-control @error('user.email') is-invalid @enderror">

                            @error('user.email')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="form-group">
                            <label>Nova Palavra-passe</label>
                            <input
                                type="password"
                                wire:model.defer="password"
                                class="form-control @error('password') is-invalid @enderror">

                            <small class="text-muted">
                                Deixe em branco para manter a atual
                            </small>

                            @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>

            {{-- ESTADO / METADADOS --}}
            <div class="col-md-4">
                <div class="card card-outline card-secondary shadow-sm">

                    <div class="card-header">
                        <h3 class="card-title">
                            <i class="fas fa-toggle-on mr-1"></i> Estado
                        </h3>
                    </div>

                    <div class="card-body">

                        {{-- Ativo --}}
                        <div class="form-group">
                            <label>Estado do Utilizador</label>
                            <select
                                wire:model.defer="user.is_active"
                                class="form-control">
                                <option value="1">Ativo</option>
                                <option value="0">Inativo</option>
                            </select>
                        </div>

                        {{-- Email verificado --}}
                        <div class="form-group">
                            <label>Email Verificado</label>
                            <input
                                type="text"
                                class="form-control"
                                {{--                                value="{{ $user->email_verified_at ? $user->email_verified_at->format('d/m/Y H:i') : 'Não verificado' }}"--}}
                                disabled>
                        </div>

                        {{-- Criado em --}}
                        <div class="form-group">
                            <label>Criado em</label>
                            <input
                                type="text"
                                class="form-control"
                                {{--                                value="{{ $user->created_at->format('d/m/Y H:i') }}"--}}
                                disabled>
                        </div>

                    </div>
                </div>
            </div>

        </div>

        {{-- FOOTER ACTIONS --}}
        <div class="card shadow-sm">
            <div class="card-body text-right">
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-save mr-1"></i> Guardar Alterações
                </button>
            </div>
        </div>

    </form>
</div>

