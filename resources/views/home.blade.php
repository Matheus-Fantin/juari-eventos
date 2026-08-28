@extends('layouts.app')

@section('title', 'Juari Eventos — Transformando momentos em memórias inesquecíveis')

@section('content')

    {{-- HERO --}}
    <section class="relative h-[65vh] min-h-[460px] bg-cover bg-center flex items-end"
             style="background-image: url('{{ asset('images/fachada.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-t from-graphite/90 via-graphite/30 to-transparent"></div>
        <div class="relative max-w-6xl mx-auto px-6 pb-12 text-center w-full">
            <p class="font-display font-semibold text-sm tracking-[3px] text-terracotta mb-3">SERTANÓPOLIS · PR</p>
            <h1 class="font-display font-extrabold text-4xl md:text-5xl text-cream mb-3">
                JUARI <span class="text-cream/75">EVENTOS</span>
            </h1>
            <p class="text-cream/80 max-w-xl mx-auto mb-8">
                Transformando momentos em memórias inesquecíveis.
            </p>
            <div class="flex items-center justify-center gap-4 mb-10">
                <a href="#orcamento" class="rounded-md bg-terracotta text-cream px-6 py-3 text-sm font-medium hover:bg-terracotta-dark transition">
                    Solicitar orçamento
                </a>
                <a href="{{ url('/galeria') }}" class="rounded-md border border-cream/50 text-cream px-6 py-3 text-sm font-medium hover:border-cream transition">
                    Ver galeria
                </a>
            </div>

            <div class="flex flex-wrap items-center justify-center gap-x-8 gap-y-3 text-cream/90 text-sm border-t border-cream/15 pt-6">
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-terracotta" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg>
                    Até 200 convidados
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-terracotta" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="7" width="18" height="13" rx="2"></rect><path d="M3 11h18"></path><path d="M8 3v4M16 3v4"></path>
                    </svg>
                    Área coberta e externa
                </div>
                <div class="flex items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-terracotta" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M21 10c0 6-9 12-9 12S3 16 3 10a9 9 0 0 1 18 0Z"></path><circle cx="12" cy="10" r="3"></circle>
                    </svg>
                    Fácil acesso
                </div>
            </div>
        </div>
    </section>

    {{-- ESTRUTURA --}}
    <section id="sobre" class="max-w-6xl mx-auto px-6 py-16">
        <h2 class="font-display font-semibold text-sm tracking-[3px] text-terracotta uppercase mb-8">Estrutura do espaço</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-sm text-graphite/70">
            <div>Salão Amplo</div>
            <div>Área Coberta</div>
            <div>Espaço Kids</div>
            <div>Ar-condicionado</div>
            <div>Fogão a Lenha</div>
            <div>Churrasqueira</div>
            <div>Cozinha de Apoio</div>
            <div>Buffet</div>
        </div>
    </section>

    {{-- TIPOS DE EVENTO --}}
    <section id="eventos" class="max-w-6xl mx-auto px-6 py-16 border-t border-graphite/10">
        <h2 class="font-display font-semibold text-sm tracking-[3px] text-terracotta uppercase mb-8">Tipos de evento</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm transition hover:shadow-md hover:-translate-y-0.5">Casamentos</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm transition hover:shadow-md hover:-translate-y-0.5">Festas Infantis</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm transition hover:shadow-md hover:-translate-y-0.5">15 Anos</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm transition hover:shadow-md hover:-translate-y-0.5">Corporativo</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm transition hover:shadow-md hover:-translate-y-0.5">Aniversários</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm transition hover:shadow-md hover:-translate-y-0.5">Chá de Bebê</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm transition hover:shadow-md hover:-translate-y-0.5">Formaturas</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm transition hover:shadow-md hover:-translate-y-0.5">Outros</div>
        </div>
    </section>

    {{-- GASTRONOMIA --}}
    <section id="gastronomia" class="max-w-6xl mx-auto px-6 py-16 border-t border-graphite/10">
        <h2 class="font-display font-semibold text-sm tracking-[3px] text-terracotta uppercase mb-3">Gastronomia</h2>
        <p class="text-graphite/70 text-sm max-w-xl mb-8">
            Sabores que completam a experiência do seu evento, com opções para todos os estilos de celebração.
        </p>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @for ($i = 1; $i <= 4; $i++)
                @php $img = 'images/gastronomia/prato-' . $i . '.jpg'; $existe = file_exists(public_path($img)); @endphp
                <div class="aspect-square rounded-lg overflow-hidden {{ $existe ? 'bg-cover bg-center' : 'bg-graphite-light/10 animate-pulse flex items-center justify-center text-xs text-graphite/40' }}"
                     @if($existe) style="background-image: url('{{ asset($img) }}');" @endif>
                    @unless($existe) Em breve @endunless
                </div>
            @endfor
        </div>
    </section>

    {{-- COMO FUNCIONA --}}
    <section class="bg-cream border-t border-graphite/10">
        <div class="max-w-6xl mx-auto px-6 py-16">
            <h2 class="font-display font-semibold text-sm tracking-[3px] text-terracotta uppercase text-center mb-2">Simples e transparente</h2>
            <p class="font-display font-extrabold text-2xl md:text-3xl text-graphite text-center mb-12">Do primeiro contato ao dia do evento</p>

            <div class="flex flex-col md:grid md:grid-cols-4 gap-8 md:text-center max-w-md md:max-w-none mx-auto">
                <div class="flex gap-4 md:flex-col md:items-center">
                    <div class="h-11 w-11 shrink-0 rounded-full bg-terracotta text-cream font-display font-bold flex items-center justify-center md:mb-4">1</div>
                    <div>
                        <p class="font-medium text-sm mb-1">Conte sobre seu evento</p>
                        <p class="text-xs text-graphite/60">Informe a data, o tipo e o número aproximado de convidados.</p>
                    </div>
                </div>
                <div class="flex gap-4 md:flex-col md:items-center">
                    <div class="h-11 w-11 shrink-0 rounded-full bg-terracotta text-cream font-display font-bold flex items-center justify-center md:mb-4">2</div>
                    <div>
                        <p class="font-medium text-sm mb-1">Consulte a disponibilidade</p>
                        <p class="text-xs text-graphite/60">Nossa equipe verifica a data e retorna com as opções.</p>
                    </div>
                </div>
                <div class="flex gap-4 md:flex-col md:items-center">
                    <div class="h-11 w-11 shrink-0 rounded-full bg-terracotta text-cream font-display font-bold flex items-center justify-center md:mb-4">3</div>
                    <div>
                        <p class="font-medium text-sm mb-1">Conheça o espaço</p>
                        <p class="text-xs text-graphite/60">Agende uma visita e veja de perto a estrutura completa.</p>
                    </div>
                </div>
                <div class="flex gap-4 md:flex-col md:items-center">
                    <div class="h-11 w-11 shrink-0 rounded-full bg-terracotta text-cream font-display font-bold flex items-center justify-center md:mb-4">4</div>
                    <div>
                        <p class="font-medium text-sm mb-1">Reserve sua data</p>
                        <p class="text-xs text-graphite/60">Alinhe os detalhes finais e garanta a sua celebração.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- GALERIA (prévia) --}}
    <section class="max-w-6xl mx-auto px-6 py-16 border-t border-graphite/10">
        <div class="flex items-center justify-between mb-8">
            <h2 class="font-display font-semibold text-sm tracking-[3px] text-terracotta uppercase">Galeria</h2>
            <a href="{{ url('/galeria') }}" class="text-sm text-terracotta hover:text-terracotta-dark transition">Ver todas as fotos →</a>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
            @for ($i = 0; $i < 8; $i++)
                <div class="aspect-square rounded-md bg-graphite-light/10 animate-pulse"></div>
            @endfor
        </div>
    </section>

    {{-- DEPOIMENTOS --}}
    <section class="max-w-6xl mx-auto px-6 py-16 border-t border-graphite/10">
        <h2 class="font-display font-semibold text-sm tracking-[3px] text-terracotta uppercase mb-8">Depoimentos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
            @php
                $depoimentos = [
                    ['nome' => 'Nome do Cliente', 'evento' => 'Casamento', 'texto' => 'Depoimento do cliente sobre o evento realizado no espaço.'],
                    ['nome' => 'Nome do Cliente', 'evento' => '15 Anos', 'texto' => 'Depoimento do cliente sobre o evento realizado no espaço.'],
                ];
            @endphp
            @foreach ($depoimentos as $d)
                <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6">
                    <div class="flex text-terracotta mb-3">
                        @for ($s = 0; $s < 5; $s++)
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2Z"></path>
                            </svg>
                        @endfor
                    </div>
                    <p class="text-sm text-graphite/70 mb-4">&ldquo;{{ $d['texto'] }}&rdquo;</p>
                    <div class="flex items-center gap-3">
                        <div class="h-9 w-9 rounded-full bg-terracotta/15 text-terracotta font-display font-bold text-xs flex items-center justify-center">
                            {{ strtoupper(substr($d['nome'], 0, 1)) }}
                        </div>
                        <div>
                            <p class="text-sm font-medium text-graphite">{{ $d['nome'] }}</p>
                            <p class="text-xs text-graphite/50">{{ $d['evento'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <p class="text-xs text-graphite/40 text-center">
            Depoimentos fictícios utilizados para demonstração — serão substituídos por avaliações reais antes da publicação.
        </p>
    </section>

    {{-- FORMULÁRIO DE ORÇAMENTO --}}
    <section id="orcamento" class="grid grid-cols-1 md:grid-cols-2">
        <div class="hidden md:block bg-cover bg-center min-h-[420px]"
             style="background-image: url('{{ asset('images/fachada.jpg') }}');"></div>

        <div class="bg-graphite px-6 py-16 md:px-12 flex items-center">
            <div class="max-w-md w-full mx-auto">
                <h2 class="font-display font-extrabold text-2xl md:text-3xl text-cream mb-3">
                    Vamos planejar o seu evento juntos?
                </h2>
                <div class="w-14 h-0.5 bg-terracotta mb-4"></div>
                <p class="text-cream/70 text-sm mb-8">
                    Preencha o formulário abaixo para receber nosso contato.
                </p>

                <form method="POST" action="{{ url('/orcamento') }}" class="flex flex-col gap-4">
                    @csrf
                    <input type="text" name="nome" placeholder="Nome completo"
                           class="rounded-md border border-cream/20 bg-graphite-light text-cream placeholder:text-cream/40 px-4 py-3 text-sm">
                    <input type="text" name="telefone" placeholder="WhatsApp"
                           class="rounded-md border border-cream/20 bg-graphite-light text-cream placeholder:text-cream/40 px-4 py-3 text-sm">
                    <input type="email" name="email" placeholder="E-mail"
                           class="rounded-md border border-cream/20 bg-graphite-light text-cream placeholder:text-cream/40 px-4 py-3 text-sm">
                    <input type="date" name="data_evento"
                           class="rounded-md border border-cream/20 bg-graphite-light text-cream placeholder:text-cream/40 px-4 py-3 text-sm">
                    <input type="number" name="numero_convidados" placeholder="Nº de convidados" min="1"
                           class="rounded-md border border-cream/20 bg-graphite-light text-cream placeholder:text-cream/40 px-4 py-3 text-sm">
                    <select name="event_type_id"
                            class="rounded-md border border-cream/20 bg-graphite-light text-cream px-4 py-3 text-sm">
                        <option value="">Tipo de evento</option>
                        <option value="casamentos">Casamentos</option>
                        <option value="festas-infantis">Festas Infantis</option>
                        <option value="15-anos">15 Anos</option>
                        <option value="corporativo">Corporativo</option>
                        <option value="aniversarios">Aniversários</option>
                        <option value="cha-de-bebe">Chá de Bebê</option>
                        <option value="formaturas">Formaturas</option>
                        <option value="outros">Outros</option>
                    </select>
                    <textarea name="mensagem" placeholder="Detalhes adicionais (não obrigatório)" rows="3"
                              class="rounded-md border border-cream/20 bg-graphite-light text-cream placeholder:text-cream/40 px-4 py-3 text-sm resize-none"></textarea>

                    <button type="submit"
                            class="rounded-md bg-terracotta text-cream px-6 py-3 text-sm font-medium hover:bg-terracotta-dark transition mt-2">
                        Enviar solicitação
                    </button>
                </form>
            </div>
        </div>
    </section>

    {{-- FAQ --}}
    <section id="faq" class="max-w-6xl mx-auto px-6 py-16 grid gap-10 md:grid-cols-[1fr_2fr]">
        <div>
            <p class="font-display font-semibold text-sm tracking-[3px] text-terracotta uppercase mb-3">Dúvidas frequentes</p>
            <h2 class="font-display font-extrabold text-2xl md:text-3xl text-graphite mb-4">Tudo o que você precisa saber</h2>
            <p class="text-graphite/60 text-sm mb-6">Se ainda houver alguma dúvida, fale com nossa equipe.</p>
            <a href="https://wa.me/5543996497714" target="_blank" rel="noopener"
               class="inline-flex items-center gap-2 text-terracotta text-sm font-medium hover:text-terracotta-dark transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 24 24" fill="currentColor">
                    <path d="M12 2a10 10 0 0 0-8.6 15l-1.2 4.4 4.5-1.2A10 10 0 1 0 12 2Zm0 18a8 8 0 0 1-4.1-1.1l-.3-.2-2.7.7.7-2.6-.2-.3A8 8 0 1 1 12 20Zm4.4-5.5c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1-.2.2-.6.8-.7.9-.1.2-.3.2-.5.1-.2-.1-1-.4-2-1.2-.7-.6-1.2-1.4-1.4-1.6-.1-.2 0-.4.1-.5l.4-.4c.1-.1.2-.2.2-.4.1-.1 0-.3 0-.4-.1-.1-.5-1.2-.7-1.7-.2-.4-.4-.4-.5-.4h-.5c-.1 0-.4.1-.6.3-.2.2-.8.8-.8 1.9s.8 2.2 1 2.4c.1.1 1.6 2.5 3.9 3.5.5.2.9.4 1.3.5.5.2 1 .1 1.3-.1.4-.2 1.4-.6 1.6-1.1.2-.6.2-1 .1-1.1-.1-.1-.2-.2-.4-.2Z"></path>
                </svg>
                Conversar pelo WhatsApp
            </a>
        </div>

        <div class="divide-y divide-graphite/10">
            @php
                $faqs = [
                    'Qual a capacidade do espaço?' => 'O espaço comporta até 200 convidados. A quantidade ideal pode variar conforme a montagem e o tipo de evento.',
                    'É possível levar buffet próprio?' => 'Sim, o espaço permite a contratação de fornecedores externos de buffet.',
                    'Como funciona a reserva de data?' => 'A reserva é feita mediante contato pelo WhatsApp e confirmação da disponibilidade da data.',
                    'O espaço possui área kids?' => 'Sim, contamos com um espaço kids dedicado para festas infantis.',
                    'Existe horário limite para o evento?' => 'O horário é combinado previamente conforme o tipo e a duração do evento contratado.',
                    'Como é feito o pagamento do orçamento?' => 'As condições de pagamento são definidas diretamente com nossa equipe no momento do orçamento.',
                ];
            @endphp
            @foreach ($faqs as $pergunta => $resposta)
                <details class="group py-4" @if($loop->first) open @endif>
                    <summary class="cursor-pointer list-none flex items-center justify-between text-sm md:text-base font-medium text-graphite">
                        {{ $pergunta }}
                        <span class="text-terracotta text-lg leading-none transition group-open:rotate-45">+</span>
                    </summary>
                    <p class="text-sm text-graphite/60 mt-3 pr-8">{{ $resposta }}</p>
                </details>
            @endforeach
        </div>
    </section>

@endsection