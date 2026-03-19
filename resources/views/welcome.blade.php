<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Alterações Mensais</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css','resources/js/app.js'])

</head>

<body class="bg-gray-50 text-gray-800 antialiased">

<!-- NAVBAR -->
<header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

        <h1 class="text-xl font-semibold">
            Alterações Mensais
        </h1>

        <div>

            @auth
                <a href="/home" class="text-sm font-medium text-gray-700 hover:text-black">
                    Dashboard
                </a>
            @else
                <a href="{{ route('login') }}" class="text-sm font-medium text-gray-700 hover:text-black">
                    Login
                </a>
            @endauth

        </div>

    </div>
</header>


<!-- HERO -->
<section class="max-w-7xl mx-auto px-6 py-20 grid md:grid-cols-2 gap-12 items-center">

    <div>

        <h2 class="text-4xl font-bold leading-tight">
            Gestão simples de Alterações Mensais
        </h2>

        <p class="mt-6 text-lg text-gray-600">
            Automatize o controlo de alterações mensais de colaboradores, com integração com Primavera e gestão documental no Filedoc.
        </p>

        <div class="mt-8 flex gap-4">

            <a href="{{ route('login') }}"
               class="px-6 py-3 bg-black text-white rounded-lg text-sm font-semibold">
                Entrar
            </a>

            <a href="#features"
               class="px-6 py-3 border border-gray-300 rounded-lg text-sm font-semibold">
                Ver funcionalidades
            </a>

        </div>

    </div>

    <div class="bg-white shadow-lg rounded-xl p-10">

        <p class="text-sm text-gray-500 mb-2">
            Problema comum nas empresas
        </p>

        <ul class="space-y-3 text-sm">

            <li>❌ Processos manuais em Excel</li>
            <li>❌ Falta de histórico das alterações</li>
            <li>❌ Integração difícil com ERP</li>
            <li>❌ Falta de controlo documental</li>

        </ul>

    </div>

</section>


<!-- FEATURES -->

<section id="features" class="bg-white py-20">

    <div class="max-w-7xl mx-auto px-6">

        <h3 class="text-3xl font-bold text-center">
            Funcionalidades
        </h3>

        <div class="mt-14 grid md:grid-cols-3 gap-10">

            <div class="p-6 border rounded-xl">
                <h4 class="font-semibold">Gestão de Alterações</h4>
                <p class="text-sm text-gray-600 mt-2">
                    Controle alterações mensais de colaboradores com histórico completo.
                </p>
            </div>

            <div class="p-6 border rounded-xl">
                <h4 class="font-semibold">Integração ERP</h4>
                <p class="text-sm text-gray-600 mt-2">
                    Integração direta com o ERP
                    :contentReference[oaicite:2]{index=2}.
                </p>
            </div>

            <div class="p-6 border rounded-xl">
                <h4 class="font-semibold">Gestão Documental</h4>
                <p class="text-sm text-gray-600 mt-2">
                    Envio automático de documentos para
                    :contentReference[oaicite:3]{index=3}.
                </p>
            </div>

        </div>

    </div>

</section>


<!-- CTA -->

<section class="py-20 text-center">

    <h3 class="text-3xl font-bold">
        Pronto para simplificar as alterações mensais?
    </h3>

    <p class="text-gray-600 mt-4">
        Centralize processos, automatize integrações e reduza erros.
    </p>

    <div class="mt-8">

        <a href="{{ route('login') }}"
           class="px-8 py-4 bg-black text-white rounded-lg font-semibold">
            Começar agora
        </a>

    </div>

</section>


<!-- FOOTER -->

<footer class="bg-white border-t py-6 text-center text-sm text-gray-500">

    © {{ date('Y') }} Alterações Mensais

</footer>

</body>
</html>
