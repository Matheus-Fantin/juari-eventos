@extends('layouts.app')

@section('title', 'Sobre — Juari Eventos')

@section('content')

    {{-- HERO --}}
    <section class="relative h-[50vh] min-h-[360px] bg-cover bg-center flex items-end"
             style="background-image: url('{{ asset('images/fachada.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-t from-graphite/85 via-graphite/25 to-transparent"></div>
        <div class="relative max-w-6xl mx-auto px-6 pb-12 text-center w-full">
            <p class="font-display font-semibold text-sm tracking-[3px] text-terracotta mb-3">JUARI EVENTOS</p>
            <h1 class="font-display font-extrabold text-3xl md:text-4xl text-cream">Sobre o espaço</h1>
            <p class="text-cream/80 mt-3">Conheça a Juari Eventos, em Sertanópolis — PR.</p>
        </div>
    </section>

    {{-- BLOCO 1 --}}
    <section class="max-w-6xl mx-auto px-6 py-16 grid gap-10 md:grid-cols-2 items-center">
        <div>
            <h2 class="font-display font-semibold text-base tracking-[2px] text-terracotta uppercase mb-4">Um espaço para cada momento</h2>
            <p class="text-graphite/80 text-base leading-relaxed">
                A Juari Eventos nasceu para transformar momentos em memórias inesquecíveis. Nosso espaço foi
                pensado para receber celebrações de todos os tipos — de casamentos elegantes a festas infantis
                cheias de energia, passando por aniversários, formaturas, chás de bebê e confraternizações
                corporativas. Cada detalhe da estrutura é pensado para se adaptar ao seu evento, não o contrário.
            </p>
        </div>
        <div class="rounded-xl overflow-hidden aspect-video bg-graphite-light/10 bg-cover bg-center flex items-center justify-center text-xs text-graphite/40"
             style="background-image: url('{{ asset('images/sobre/espaco-1.jpg') }}');">
            images/sobre/espaco-1.jpg
        </div>
    </section>

    {{-- BLOCO 2 (imagem invertida para a esquerda) --}}
    <section class="max-w-6xl mx-auto px-6 py-16 border-t border-graphite/10 grid gap-10 md:grid-cols-2 items-center">
        <div class="rounded-xl overflow-hidden aspect-video bg-graphite-light/10 bg-cover bg-center flex items-center justify-center text-xs text-graphite/40 md:order-1"
             style="background-image: url('{{ asset('images/sobre/espaco-2.jpg') }}');">
            images/sobre/espaco-2.jpg
        </div>
        <div class="md:order-2">
            <h2 class="font-display font-semibold text-base tracking-[2px] text-terracotta uppercase mb-4">Compromisso com cada detalhe</h2>
            <p class="text-graphite/80 text-base leading-relaxed">
                Nossa equipe acompanha cada etapa da organização para que você não precise se preocupar com nada
                além de aproveitar o seu dia. Do primeiro contato à realização do evento, cuidamos da estrutura,
                do espaço e do suporte necessário para que a celebração saia exatamente como você imaginou.
            </p>
        </div>
    </section>

    {{-- BLOCO 3 --}}
    <section class="max-w-6xl mx-auto px-6 py-16 border-t border-graphite/10 grid gap-10 md:grid-cols-2 items-center">
        <div>
            <h2 class="font-display font-semibold text-base tracking-[2px] text-terracotta uppercase mb-6">Estrutura do espaço</h2>
            <ul class="grid grid-cols-2 gap-y-4 text-base text-graphite/80">
                <li>Salão Amplo</li>
                <li>Área Coberta</li>
                <li>Espaço Kids</li>
                <li>Ar-condicionado</li>
                <li>Fogão a Lenha</li>
                <li>Churrasqueira</li>
                <li>Cozinha de Apoio</li>
                <li>Banheiros</li>
            </ul>
        </div>
        <div class="rounded-xl overflow-hidden aspect-video bg-graphite-light/10 bg-cover bg-center flex items-center justify-center text-xs text-graphite/40"
             style="background-image: url('{{ asset('images/sobre/espaco-3.jpg') }}');">
            images/sobre/espaco-3.jpg
        </div>
    </section>

    {{-- CTA FINAL --}}
    <section class="bg-cream border-t border-graphite/10">
        <div class="max-w-6xl mx-auto px-6 py-16 text-center">
            <h2 class="font-display font-extrabold text-2xl md:text-3xl text-graphite mb-4">
                Vamos planejar o seu evento?
            </h2>
            <p class="text-graphite/70 text-base mb-8">Fale com a nossa equipe e garanta a sua data.</p>
            <a href="{{ url('/') }}#orcamento"
               class="inline-block rounded-md bg-terracotta text-cream px-6 py-3 text-sm font-medium hover:bg-terracotta-dark transition">
                Solicitar orçamento
            </a>
        </div>
    </section>

@endsection