<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Juari Eventos')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@600;800&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans text-graphite bg-cream antialiased">

    <header class="absolute top-0 inset-x-0 z-30 bg-gradient-to-b from-graphite/60 to-transparent">
        <nav class="max-w-6xl mx-auto flex items-center justify-between px-6 py-5">
            <a href="{{ url('/') }}" class="leading-none relative z-40">
                <span class="font-display font-extrabold text-2xl text-cream">JUARI</span>
                <span class="font-display font-semibold text-xs tracking-[3px] text-cream/75 block">EVENTOS</span>
            </a>

            <ul class="hidden md:flex items-center gap-8 text-sm text-cream/80">
                <li>
                    <a href="{{ url('/') }}" class="flex items-center gap-1.5 hover:text-cream transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 11l9-8 9 8"/>
                            <path d="M5 10v10h14V10"/>
                        </svg>
                        Início
                    </a>
                </li>
                <li><a href="{{ url('/sobre') }}" class="hover:text-cream transition">Sobre</a></li>
                <li><a href="{{ url('/') }}#eventos" class="hover:text-cream transition">Eventos</a></li>
                <li><a href="{{ url('/galeria') }}" class="hover:text-cream transition">Galeria</a></li>
                <li><a href="{{ url('/') }}#faq" class="hover:text-cream transition">FAQ</a></li>
                <li><a href="{{ url('/') }}#contato" class="hover:text-cream transition">Contato</a></li>
            </ul>

            <a href="{{ url('/') }}#orcamento"
               class="hidden md:inline-flex items-center rounded-md bg-terracotta px-4 py-2 text-sm font-medium text-cream hover:bg-terracotta-dark transition">
                Orçamento
            </a>

            {{-- Botão hambúrguer (só aparece no mobile) --}}
            <button id="menu-toggle" type="button"
                    class="md:hidden relative z-40 text-cream p-2 -mr-2"
                    aria-label="Abrir menu">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </nav>

        {{-- Painel do menu mobile --}}
        <div id="menu-mobile" class="hidden md:hidden bg-graphite px-6 pb-6">
            <ul class="flex flex-col gap-4 text-sm text-cream/90 pt-2">
                <li><a href="{{ url('/') }}" class="flex items-center gap-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M3 11l9-8 9 8"/><path d="M5 10v10h14V10"/>
                        </svg>
                        Início
                </a></li>
                <li><a href="{{ url('/sobre') }}">Sobre</a></li>
                <li><a href="{{ url('/') }}#eventos">Eventos</a></li>
                <li><a href="{{ url('/galeria') }}">Galeria</a></li>
                <li><a href="{{ url('/') }}#faq">FAQ</a></li>
                <li><a href="{{ url('/') }}#contato">Contato</a></li>
                <li>
                    <a href="{{ url('/') }}#orcamento"
                       class="inline-block rounded-md bg-terracotta px-4 py-2 text-cream font-medium">
                        Solicitar orçamento
                    </a>
                </li>
            </ul>
        </div>
    </header>

    <main>
        @yield('content')
    </main>

    <footer id="contato" class="bg-graphite">
        <div class="max-w-6xl mx-auto px-6 py-12 grid gap-8 md:grid-cols-2 text-sm text-stone-muted">
            <div class="space-y-4">
                <p class="font-display font-extrabold text-lg text-cream mb-1">JUARI EVENTOS</p>
                <p>Rua Antonio da Aparecida Parisoto Loureiro, 200 — Sertanópolis, PR</p>

                <a href="https://wa.me/5543996497714" target="_blank" rel="noopener"
                   class="flex items-center gap-2 hover:text-cream transition w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                        <path d="M12 2a10 10 0 0 0-8.6 15l-1.2 4.4 4.5-1.2A10 10 0 1 0 12 2Zm0 18a8 8 0 0 1-4.1-1.1l-.3-.2-2.7.7.7-2.6-.2-.3A8 8 0 1 1 12 20Zm4.4-5.5c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1-.2.2-.6.8-.7.9-.1.2-.3.2-.5.1-.2-.1-1-.4-2-1.2-.7-.6-1.2-1.4-1.4-1.6-.1-.2 0-.4.1-.5l.4-.4c.1-.1.2-.2.2-.4.1-.1 0-.3 0-.4-.1-.1-.5-1.2-.7-1.7-.2-.4-.4-.4-.5-.4h-.5c-.1 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2 1 2.4c.1.1 1.6 2.5 3.9 3.5.5.2.9.4 1.3.5.5.2 1 .1 1.3-.1.4-.2 1.4-.6 1.6-1.1.2-.6.2-1 .1-1.1-.1-.1-.2-.2-.4-.2Z"/>
                    </svg>
                    (43) 99649-7714
                </a>

                <a href="https://www.instagram.com/juarieventos" target="_blank" rel="noopener"
                   class="flex items-center gap-2 hover:text-cream transition w-fit">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                        <rect x="3" y="3" width="18" height="18" rx="5"/>
                        <circle cx="12" cy="12" r="4"/>
                        <circle cx="17.5" cy="6.5" r="1"/>
                    </svg>
                    @juarieventos
                </a>
            </div>

            <div class="rounded-md overflow-hidden h-48">
                <iframe
                    src="https://www.google.com/maps?q=Rua+Antonio+da+Aparecida+Parisoto+Loureiro,+200,+Sertan%C3%B3polis+-+PR&output=embed"
                    width="100%" height="100%" style="border:0" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
        <div class="max-w-6xl mx-auto px-6 pb-8 text-xs text-stone-muted/60">
            &copy; {{ date('Y') }} Juari Eventos. Todos os direitos reservados.
        </div>
    </footer>

    <a href="https://wa.me/5543996497714" target="_blank" rel="noopener"
       class="fixed bottom-6 right-6 z-40 flex h-14 w-14 items-center justify-center rounded-full bg-green-600 text-white shadow-lg hover:bg-green-700 hover:scale-105 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 24 24" fill="currentColor">
            <path d="M12 2a10 10 0 0 0-8.6 15l-1.2 4.4 4.5-1.2A10 10 0 1 0 12 2Zm0 18a8 8 0 0 1-4.1-1.1l-.3-.2-2.7.7.7-2.6-.2-.3A8 8 0 1 1 12 20Zm4.4-5.5c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1-.2.2-.6.8-.7.9-.1.2-.3.2-.5.1-.2-.1-1-.4-2-1.2-.7-.6-1.2-1.4-1.4-1.6-.1-.2 0-.4.1-.5l.4-.4c.1-.1.2-.2.2-.4.1-.1 0-.3 0-.4-.1-.1-.5-1.2-.7-1.7-.2-.4-.4-.4-.5-.4h-.5c-.1 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2 1 2.4c.1.1 1.6 2.5 3.9 3.5.5.2.9.4 1.3.5.5.2 1 .1 1.3-.1.4-.2 1.4-.6 1.6-1.1.2-.6.2-1 .1-1.1-.1-.1-.2-.2-.4-.2Z"/>
        </svg>
    </a>

    {{-- Botão "voltar ao topo" (aparece só ao rolar a página) --}}
    <button id="back-to-top" type="button" aria-label="Voltar ao topo"
            class="hidden fixed bottom-24 right-6 z-40 h-11 w-11 items-center justify-center rounded-full bg-graphite text-cream shadow-lg hover:bg-graphite-light transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M12 19V5M5 12l7-7 7 7"/>
        </svg>
    </button>

    <script>
        // Menu mobile
        const menuToggle = document.getElementById('menu-toggle');
        const menuMobile = document.getElementById('menu-mobile');
        if (menuToggle && menuMobile) {
            menuToggle.addEventListener('click', () => menuMobile.classList.toggle('hidden'));
        }

        // Botão voltar ao topo
        const backToTop = document.getElementById('back-to-top');
        if (backToTop) {
            window.addEventListener('scroll', () => {
                if (window.scrollY > 500) {
                    backToTop.classList.remove('hidden');
                    backToTop.classList.add('flex');
                } else {
                    backToTop.classList.add('hidden');
                    backToTop.classList.remove('flex');
                }
            });
            backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
        }
    </script>

</body>
</html>