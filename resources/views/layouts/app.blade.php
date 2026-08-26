<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Juari Eventos')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-stone-800 bg-white antialiased">

    <header class="border-b border-stone-200">
        <nav class="max-w-6xl mx-auto flex items-center justify-between px-6 py-4">
            <a href="{{ url('/') }}" class="text-lg font-semibold tracking-tight">Juari Eventos</a>
            <ul class="hidden md:flex items-center gap-8 text-sm text-stone-600">
                <li><a href="#sobre" class="hover:text-stone-900">Sobre</a></li>
                <li><a href="#eventos" class="hover:text-stone-900">Eventos</a></li>
                <li><a href="#galeria" class="hover:text-stone-900">Galeria</a></li>
                <li><a href="#faq" class="hover:text-stone-900">FAQ</a></li>
                <li><a href="#contato" class="hover:text-stone-900">Contato</a></li>
            </ul>
            <a href="#orcamento"
               class="inline-flex items-center rounded-md border border-amber-700 px-4 py-2 text-sm font-medium text-amber-800 hover:bg-amber-50 transition">
                Orçamento
            </a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer id="contato" class="border-t border-stone-200 bg-stone-50">
        <div class="max-w-6xl mx-auto px-6 py-10 grid gap-8 md:grid-cols-2 text-sm text-stone-600">
            <div class="space-y-2">
                <p>Endereço completo do espaço — a definir com o cliente</p>
                <p>(00) 00000-0000 · contato@juarieventos.com.br</p>
            </div>
            <div class="rounded-md bg-stone-200 h-40 flex items-center justify-center text-stone-500">
                Mapa (Google Maps)
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-6 pb-8 text-xs text-stone-400">
            &copy; {{ date('Y') }} Juari Eventos. Todos os direitos reservados.
        </div>
    </footer>

    <a href="https://wa.me/5500000000000" target="_blank" rel="noopener"
       class="fixed bottom-6 right-6 flex h-14 w-14 items-center justify-center rounded-full bg-green-600 text-white shadow-lg hover:bg-green-700 transition font-semibold text-xs">
        WhatsApp
    </a>

</body>
</html>