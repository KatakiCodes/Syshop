@extends('layout.layout')
@section('title','Home')
@section('conteudo')
<div class="container">
    {{-- Create-user result --}}
@if ($message = Session::get('sucesso'))
  <div class="alert alert-success" role="alert">
      {{$message}}
  </div>
@else
    @if ($message = Session::get('logFailed'))
      <div class="alert alert-danger" role="alert">
          {{$message}}
      </div>
    @endif
@endif
@if ($errors->any())
    @foreach ($errors->all() as $error)
      <div class="alert alert-danger" role="alert">
          {{$error}}<br/>
      </div>
    @endforeach
@endif
</div>

<!-- Header -->
<header class="container d-flex flex-wrap align-items-center">
    <div class="header-content col-12 col-md-6">
        <h1>Encontre os produtos mais <span class="text-success">autenticos</span> na nossa loja</h1>
        <p class="text-muted mt-4 mb-5">Compre os nossos produtos de qualquer ponto do país e lhe será entregue no melhor tempo posssível, pelos nossos serviços de entrega!</p>
        <div class="actions">
            <a href="{{ route('produto.index') }}" class="btn btn-success btn-">Ver nossos produtos</a>
            @guest
                <a href="#" class="btn btn-outline-success" data-bs-toggle="modal"  data-bs-target="#sign-up-modal">Cadastre-se</a>
            @endguest
        </div>
    </div>
    <div class="row col-12 col-md-6 p-5">
        <img src="../assets/images/icon-cart-transparent.png" alt="cart-icon" class="img-fluid"/>
    </div>
</header>
@push('css')
    <script src="{{ asset('js/app.js') }}"></script> 
@endpush
@endsection