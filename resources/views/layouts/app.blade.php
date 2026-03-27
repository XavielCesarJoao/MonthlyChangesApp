@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <x-header-base/>
@stop

@section('content')
    {{ $slot }}
@stop

@section('css')
    <style>
        /* Ajuste global do tamanho da fonte */
        body {
            font-size: 0.875rem; /* padrão 1rem → um pouco menor */
        }

        /* Sidebar - textos do menu */
        .nav-sidebar .nav-link {
            font-size: 0.85rem;
            padding: 0.4rem 0.8rem;
        }

        /* Ícones do menu */
        .nav-sidebar .nav-icon {
            font-size: 0.9rem;
        }

        /* Header / Navbar */
        .main-header .nav-link {
            font-size: 0.85rem;
        }

        /* Títulos */
        h1 { font-size: 1.4rem; }
        h2 { font-size: 1.25rem; }
        h3 { font-size: 1.1rem; }

        /* Botões */
        .btn {
            font-size: 0.85rem;
            padding: 0.35rem 0.75rem;
        }

        /* Tables */
        .table th,
        .table td {
            font-size: 0.85rem;
        }

        .table td, .table th {
    padding-top: 6px !important;
    padding-bottom: 6px !important;
    vertical-align: middle;
}

.linha-insert {
    position: sticky;
    bottom: 0;
    background: #fff3cd;
    box-shadow: 0 -2px 6px rgba(0,0,0,0.05);
}

            /* Estilização completa do Select2 */
    
    /* Texto do item selecionado */
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        font-size: 0.875rem;  /* 14px - igual ao form-control-sm */
        font-weight: 500;      /* Semi-negrito - ajuste conforme desejar */
        color: #212529;
        line-height: 1.5;
    }
    
    /* Altura e padding do campo */
    .select2-container--default .select2-selection--single {
        height: calc(1.5em + 0.5rem + 2px); /* Altura do form-control-sm */
        border: 1px solid #ced4da;
        border-radius: 6px; /* Mantém seu border-radius */
    }
    
    /* Alinhamento vertical do texto */
    .select2-container--default .select2-selection--single .select2-selection__rendered {
        padding-left: 0.75rem;
        padding-right: 1.5rem;
        line-height: calc(1.5em + 0.5rem);
    }
    
    /* Ajuste da seta */
    .select2-container--default .select2-selection--single .select2-selection__arrow {
        height: calc(1.5em + 0.5rem + 2px);
        right: 6px;
    }
    
    /* Opções do dropdown */
    .select2-container--default .select2-results__option {
        font-size: 0.875rem;
        font-weight: 400;
        padding: 8px 12px;
    }
    
    /* Opção selecionada/hover */
    .select2-container--default .select2-results__option--highlighted {
        background-color: #0d6efd;
        font-weight: 500;
    }
    
    /* Placeholder */
    .select2-container--default .select2-selection--single .select2-selection__placeholder {
        color: #6c757d;
        font-weight: 400;
    }
    
    /* Estado foco */
    .select2-container--default.select2-container--focus .select2-selection--single {
        border-color: #86b7fe;
        outline: 0;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.25);
    }
    </style>

        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@stop


@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>


    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>  
@stop
