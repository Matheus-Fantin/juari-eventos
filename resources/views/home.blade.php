@extends('layouts.app')

@section('title', 'Juari Eventos — O espaço ideal para o seu evento')

@section('content')

    {{-- HERO --}}
    <section class="max-w-6xl mx-auto px-6 py-16 text-center">
        <div class="h-56 md:h-72 rounded-xl bg-stone-200 flex items-center justify-center text-stone-500 mb-8">
            Foto do espaço em tela cheia (placeholder)
        </div>
        <h1 class="text-3xl md:text-4xl font-semibold tracking-tight mb-3">
            O espaço ideal para o seu evento
        </h1>
        <p class="text-stone-600 max-w-xl mx-auto mb-8">
            Texto de posicionamento da marca — a definir com o cliente.
        </p>
        <div class="flex items-center justify-center gap-4">
            <a href="#orcamento" class="rounded-md border-2 border-amber-700 text-amber-800 px-6 py-3 text-sm font-medium hover:bg-amber-50 transition">
                Solicitar orçamento
            </a>
            <a href="#galeria" class="rounded-md bg-stone-800 text-white px-6 py-3 text-sm font-medium hover:bg-stone-700 transition">
                Ver galeria
            </a>
        </div>
    </section>

    {{-- ESTRUTURA --}}
    <section id="sobre" class="max-w-6xl mx-auto px-6 py-12 border-t border-stone-200">
        <h2 class="text-sm font-semibold text-stone-500 uppercase tracking-wide mb-6">Estrutura do espaço</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center text-sm text-stone-600">
            <div>Capacidade</div>
            <div>Estacionamento</div>
            <div>Ar-condicionado</div>
            <div>Wi-Fi</div>
        </div>
    </section>

    {{-- TIPOS DE EVENTO --}}
    <section id="eventos" class="max-w-6xl mx-auto px-6 py-12 border-t border-stone-200">
        <h2 class="text-sm font-semibold text-stone-500 uppercase tracking-wide mb-6">Tipos de evento</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <div class="rounded-lg bg-stone-100 p-6 text-center">Casamentos</div>
            <div class="rounded-lg bg-stone-100 p-6 text-center">Aniversários</div>
            <div class="rounded-lg bg-stone-100 p-6 text-center">Corporativo</div>
        </div>
    </section>

    {{-- GALERIA --}}
    <section id="galeria" class="max-w-6xl mx-auto px-6 py-12 border-t border-stone-200">
        <h2 class="text-sm font-semibold text-stone-500 uppercase tracking-wide mb-6">Galeria</h2>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-3">
            @for ($i = 0; $i < 8; $i++)
                <div class="aspect-square rounded-md bg-stone-200"></div>
            @endfor
        </div>
    </section>

    {{-- DEPOIMENTOS --}}
    <section class="max-w-6xl mx-auto px-6 py-12 border-t border-stone-200">
        <h2 class="text-sm font-semibold text-stone-500 uppercase tracking-wide mb-6">Depoimentos</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="rounded-lg bg-stone-100 p-6 text-sm text-stone-600">
                "Depoimento do cliente sobre o evento realizado." — Nome, tipo de evento
            </div>
            <div class="rounded-lg bg-stone-100 p-6 text-sm text-stone-600">
                "Depoimento do cliente sobre o evento realizado." — Nome, tipo de evento
            </div>
        </div>
    </section>

    {{-- FORMULÁRIO DE ORÇAMENTO --}}
    <section id="orcamento" class="bg-amber-50 border-t border-amber-100">
        <div class="max-w-6xl mx-auto px-6 py-12">
            <h2 class="text-sm font-semibold text-amber-800 uppercase tracking-wide mb-6">Solicitar orçamento</h2>
            <form method="POST" action="{{ url('/orcamento') }}" class="grid grid-cols-1 md:grid-cols-2 gap-4 max-w-2xl">
                @csrf
                <input type="text" name="nome" placeholder="Nome" class="rounded-md border border-stone-300 px-4 py-2 text-sm">
                <input type="text" name="telefone" placeholder="WhatsApp" class="rounded-md border border-stone-300 px-4 py-2 text-sm">
                <input type="date" name="data_evento" class="rounded-md border border-stone-300 px-4 py-2 text-sm">
                <select name="event_type_id" class="rounded-md border border-stone-300 px-4 py-2 text-sm">
                    <option value="">Tipo de evento</option>
                </select>
                <button type="submit" class="md:col-span-2 rounded-md bg-amber-800 text-white px-6 py-3 text-sm font-medium hover:bg-amber-900 transition">
                    Enviar solicitação
                </button>
            </form>
        </div>
    </section>

    {{-- FAQ --}}
    <section id="faq" class="max-w-6xl mx-auto px-6 py-12 border-t border-stone-200">
        <h2 class="text-sm font-semibold text-stone-500 uppercase tracking-wide mb-6">Perguntas frequentes</h2>
        <div class="space-y-3 max-w-2xl">
            <div class="rounded-md bg-stone-100 px-4 py-3 text-sm">Qual a capacidade do espaço?</div>
            <div class="rounded-md bg-stone-100 px-4 py-3 text-sm">É possível levar buffet próprio?</div>
        </div>
    </section>

@endsection