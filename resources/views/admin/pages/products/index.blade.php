{{-- Recurso de stack para atribuir css --}}
@push('styles')
    <style>
        .last{
            background: #515151;
        }
    </style>
@endpush

@extends('admin.layouts.app')<!-- Extende o app.blade -->

@section('title', 'Gestão de Produtos')

@section('content')
    <h1>Exibindo produtos</h1>
    <a href="{{ route('products.create') }}">Cadastrar</a>
    <hr>

    {{-- Exibindo components --}}
    @component('admin.components.card')
        @slot('title')
            <h1>Título Card</h1>
        @endslot
        Um card de exemplo
    @endcomponent
    {{--  --}}
    <hr />
    {{-- Incluindo outros camponentes  --}}
    @include('admin.includes.alerts', ['content' => 'Alerta de preços'])
    <hr />
    {{--  --}}
    
    @isset($products)
        @foreach ($products as $product)
            <p class="@if($loop->last) last @endif">{{ $product}}</p>
        @endforeach
    @endisset

    <hr>

    @forelse ($products as $product)
        <p>{{$product}}</p>
    @empty
        <p>Não existe produtos cadastrados</p>
    @endforelse

    <hr>

    {{-- Verificação --}}
    @if ($test === 123)
        É igual
    @else
        É diferente
    @endif
    
    {{-- {{ $test }} --}}

    {{-- Só vai entrar se for falço --}}
    @unless ($test === 12)
        fdsfsdfsd
    @endunless

    @isset($test)
        <br>A variável existe
    @endisset

    {{-- Verifica se está vazio --}}
    @empty($record)
        <br>Está vazio
    @endempty

    {{-- Se estiver autenticado --}}
    @auth
        <p>Autenticado</p>
            
        @else
            <p>Não está autenticado</p>
    @endauth

    @guest
        <p>Não está autenticado</p>
    @endguest

    @switch($test)
        @case(123)
            <p>Op 1</p>
            @break

            @case(2)
            <p>Op 2</p>
            
            @break
        @default
            
    @endswitch

@endsection

@push('scripts')
    <script>
        document.body.style.background = '#999'
    </script>
@endpush
