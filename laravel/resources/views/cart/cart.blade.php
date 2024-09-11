@extends('layout.layout')
@section('title','Carrinho')
@section('conteudo')
<!-- Header -->
<header class="container mt-5">
    <div class="header-top d-flex gap-2 align-items-center">
        <h3>Carrinho</h3>
        <img style="max-width: 30px; height:30px;" class="img-fluid" src="../assets/images/icons/buying_144px.png" alt="cart-icon">
    </div>
    @if ($items->count() > 0)
    <main class="container d-flex flex-wrap align-items-center">
      <form action="{{ route('cart.clear') }}">
          <a  class="btn btn-success mt-3">Finalizar venda</button>
          </a>
      <form action="#" method="post">
        <button type="submit" class="btn btn-secondary mt-3 ms-1">Esvaziar carrinho</button>
    </form>
      <table class="table mb-5 mt-4">
          <thead>
            <tr>
              <th scope="col">Produto</th>
              <th scope="col">Preço</th>
              <th scope="col">Quantidade</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($items as $item)
            <tr>
              <th scope="row">{{ $item->name }}</th>
              <td>{{ number_format($item->price,2,',','.') }} kz</td>
              <td>
                  <div class="action-row d-flex gap-1">
                      <form action="{{ route('cart.update') }}" method="post" class="d-flex gap-1" style="width:60%;" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" name="id" value={{ $item->id }}>
                          <input type="number" name="quantity" id="quantity" class="form-control" min="1" value="{{ $item->quantity }}">
                          <button class="btn btn-primary" type="submit"><img src="../assets/images/icons/restart_144px.png" alt="update-icon" style="max-width: 25px;"></button>
                      </form>
                      <form action="{{ route('cart.remove') }}" method="post" enctype="multipart/form-data">
                        @csrf
                         <input type="hidden" name="id" value={{ $item->id }}>
                         <button class="btn btn-danger"type="submit"><img src="../assets/images/icons/delete_trash_144px.png" alt="delete-icon" style="max-width: 25px;"></button> 
                      </form>
                  </div>
              </td>
            </tr>
            @endforeach
          </tbody>
      </table>
     <h3>Total: <span class="text-success">{{ number_format(\Cart::getTotal(),2,',','.') }} Kz</span></h3>
    @else
    <div class="alert alert-info" role="alert">
      O seu carrinho está vazio!
    </div>
  @endif
</header>
</main>
@endsection