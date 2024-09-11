<!-- Header -->
@extends('layout.layout')
@section('title','Produtos')
@section('conteudo')
@php
 $showCategories = true;   
@endphp
<header class="container d-flex flex-wrap align-items-center mt-5">
    <div class="header-content col-12 col-md-6">
        <h1>Desfrute de uma variedade de 5.000,00 produtos!</h1>
        <p class="text-muted mt-4 mb-5">
            Aprecie o mais vasta gama de opções que lhe oferecemos. Junta-te a nós para fazer a festa dos preços baixos, basta dar uma olhada nas ofertas.
        </p>
        <div class="actions">
            <a href="{{ route('cart.show') }}" class="btn btn-success btn-">Verificar carrinho</a>
        </div>
</header>
<div class="container"><hr></div>
<br>
 <main>
    <div class="container d-flex flex-wrap gap-3 flex-wrap my-5">
      @foreach ($produtos as $produto)
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('assets/images/default.jpg') }}" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">{{ $produto->name }}</h5>
              <p class="card-text">{{ Str::limit($produto->description, 40, '...') }}</p>
              <a href="{{ route('produto.show',['slug'=>$produto->slug]) }}" class="btn btn-primary">Ver mais</a>
            </div>
          </div>
      @endforeach
    </div>
    <div class="container mt-4">
      {{ $produtos->links('custom.pagination') }}
    </div>
</main>
@endsection