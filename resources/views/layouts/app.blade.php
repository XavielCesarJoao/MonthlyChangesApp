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
    </style>
@stop


@section('js')
    <script>
        console.log("Hi, I'm using the Laravel-AdminLTE package!");
    </script>
@stop
