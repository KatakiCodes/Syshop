@extends('layout.layout')
@section('title','Detalhes')
@section('conteudo')
<!-- Header -->
<header class="container d-flex flex-wrap align-items-center mt-5">
    <div class="header-image col-12 col-md-5" style="clip-path: circle();">
        <img class="img-fluid" src="../assets/images/default.jpg" alt="default">
    </div>
    <div class="header-content col-12 col-md-7">
        <h1>{{ $produto->name }}</h1>
        <p class=" mt-4"><span style="font-weight: 500;">Descrição: </span>{{ $produto->description }}</p>

        <p class="mt-2">Categoria: {{ $produto->category->name }}</p>
        <h3 class="my-4">Preço: <span class="text-success">{{ number_format($produto->price,2,'.','.') }} kz</span></h3>
        <div class="actions">
            <form action="{{ route('cart.add') }}" method="post" enctype="multipart/form-data">
                @csrf
                <label for="quantity" class="form-label">Quantidade</label>
                <input type="hidden" name="id" value = {{$produto->id}}>
                <input type="hidden" name="name" value = {{$produto->name}}>
                <input type="hidden" name="price" value = {{$produto->price}}>
                <input type="number" name="quantity" id="quantity" class="form-control mb-2" min="1" value="1"
                style="max-width: 176px;"/>
                <button type="submit" class="btn btn-success btn-">Adicionar ao carrinho</button>
            </form>
        </div>
</header>
@endsection

