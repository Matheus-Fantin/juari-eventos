@extends('layouts.app')

@section('title', 'Juari Eventos — Transformando momentos em memórias inesquecíveis')

@section('content')

    {{-- HERO --}}
    <section class="relative h-[50vh] min-h-[360px] bg-cover bg-center flex items-end"
             style="background-image: url('{{ asset('images/fachada.jpg') }}');">
        <div class="absolute inset-0 bg-gradient-to-t from-graphite/85 via-graphite/25 to-transparent"></div>
        <div class="relative max-w-6xl mx-auto px-6 pb-12 text-center w-full">
            <p class="font-display font-semibold text-sm tracking-[3px] text-terracotta mb-3">SERTANÓPOLIS · PR</p>
            <h1 class="font-display font-extrabold text-3xl md:text-4xl text-cream mb-3">
                JUARI <span class="text-cream/75">EVENTOS</span>
            </h1>
            <p class="text-cream/80 max-w-xl mx-auto mb-8">
                Transformando momentos em memórias inesquecíveis.
            </p>
            <div class="flex items-center justify-center gap-4">
                <a href="#orcamento" class="rounded-md bg-terracotta text-cream px-6 py-3 text-sm font-medium hover:bg-terracotta-dark transition">
                    Solicitar orçamento
                </a>
                <a href="{{ url('/galeria') }}" class="rounded-md border border-cream/50 text-cream px-6 py-3 text-sm font-medium hover:border-cream transition">
                    Ver galeria
                </a>
            </div>
        </div>
    </section>

    {{-- ESTRUTURA --}}
    <section id="estrutura" class="max-w-6xl mx-auto px-6 py-16">
        <h2 class="font-display font-semibold text-sm tracking-[3px] text-terracotta uppercase mb-8">Estrutura do espaço</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-sm text-graphite/70">
            <div>Salão Amplo</div>
            <div>Área Coberta</div>
            <div>Espaço Kids</div>
            <div>Ar-condicionado</div>
            <div>Fogão a Lenha</div>
            <div>Churrasqueira</div>
            <div>Cozinha de Apoio</div>
            <div>Banheiros</div>
        </div>
    </section>

    {{-- TIPOS DE EVENTO --}}
    <section id="eventos" class="max-w-6xl mx-auto px-6 py-16 border-t border-graphite/10">
        <h2 class="font-display font-semibold text-sm tracking-[3px] text-terracotta uppercase mb-8">Tipos de evento</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm">Casamentos</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm">Festas Infantis</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm">15 Anos</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm">Corporativo</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm">Aniversários</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm">Chá de Bebê</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm">Formaturas</div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-center text-sm">Outros</div>
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
                <div class="aspect-square rounded-md bg-graphite-light/10"></div>
            @endfor
        </div>
    </section>

    {{-- DEPOIMENTOS --}}
    <section class="max-w-6xl mx-auto px-6 py-16 border-t border-graphite/10">
        <h2 class="font-display font-semibold text-sm tracking-[3px] text-terracotta uppercase mb-8">Depoimentos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-sm text-graphite/70">
                "Depoimento do cliente sobre o evento realizado." — Nome, tipo de evento
            </div>
            <div class="rounded-lg bg-white shadow-sm border border-graphite/5 p-6 text-sm text-graphite/70">
                "Depoimento do cliente sobre o evento realizado." — Nome, tipo de evento
            </div>
        </div>
    </section>

    {{-- FORMULÁRIO DE ORÇAMENTO --}}
    <section id="orcamento" class="bg-graphite-light">
        <div class="max-w-6xl mx-auto px-6 py-16">
            <h2 class="font-display font-semibold text-sm tracking-[3px] text-terracotta uppercase mb-8">Solicitar orçamento</h2>
            <form method="POST" action="{{ url('/orcamento') }}" class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-2xl">
                @csrf
                <input type="text" name="nome" placeholder="Nome"
                       class="rounded-md border border-graphite/15 bg-white px-4 py-2 text-sm">
                <input type="text" name="telefone" placeholder="WhatsApp"
                       class="rounded-md border border-graphite/15 bg-white px-4 py-2 text-sm">
                <input type="date" name="data_evento"
                       class="rounded-md border border-graphite/15 bg-white px-4 py-2 text-sm">
                <select name="event_type_id" class="rounded-md border border-graphite/15 bg-white px-4 py-2 text-sm">
                    <option value="">Tipo de evento</option>
                </select>
                <button type="submit"
                        class="md:col-span-2 rounded-md bg-terracotta text-cream px-6 py-3 text-sm font-medium hover:bg-terracotta-dark transition">
                    Enviar solicitação
                </button>
            </form>
        </div>
    </section>

    {{-- FAQ --}}
    <section id="faq" class="max-w-6xl mx-auto px-6 py-16">
        <h2 class="font-display font-semibold text-sm tracking-[3px] text-terracotta uppercase mb-8">Perguntas frequentes</h2>
        <div class="space-y-3 max-w-2xl">
            <div class="rounded-md bg-white border border-graphite/5 px-4 py-3 text-sm">Qual a capacidade do espaço?</div>
            <div class="rounded-md bg-white border border-graphite/5 px-4 py-3 text-sm">É possível levar buffet próprio?</div>
            <div class="rounded-md bg-white border border-graphite/5 px-4 py-3 text-sm">Como funciona a reserva de data?</div>

            <details class="group">
                <summary class="cursor-pointer list-none text-sm text-terracotta hover:text-terracotta-dark transition py-2 flex items-center gap-1">
                    Ver mais perguntas
                    <span class="transition group-open:rotate-180">⌄</span>
                </summary>
                <div class="space-y-3 mt-3">
                    <div class="rounded-md bg-white border border-graphite/5 px-4 py-3 text-sm">O espaço possui área kids?</div>
                    <div class="rounded-md bg-white border border-graphite/5 px-4 py-3 text-sm">Existe horário limite para o evento?</div>
                    <div class="rounded-md bg-white border border-graphite/5 px-4 py-3 text-sm">Como é feito o pagamento do orçamento?</div>
                </div>
            </details>
        </div>
    </section>

@endsection