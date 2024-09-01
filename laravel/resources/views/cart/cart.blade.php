@extends('layout.layout')
@section('title','Carrinho')
@section('conteudo')
<!-- Header -->
 <header class="container mt-5">
    <div class="header-top d-flex gap-2 align-items-center">
        <h3>Carrinho</h3>
        <img style="max-width: 30px; height:30px;" class="img-fluid" src="../assets/images/icons/buying_144px.png" alt="cart-icon">
    </div>
    
 </header>

    <main class="container d-flex flex-wrap align-items-center">
        <form action="#" method="post">
            <button type="submit" class="btn btn-success mt-3">Finalizar venda</button>
        </form>
        <form action="#" method="post">
          <button type="submit" class="btn btn-secondary mt-3 ms-1">Esvaziar carrinho</button>
      </form>
        <table class="table mb-5 mt-4">
            <thead>
              <tr>
                <th scope="col">Produto</th>
                <th scope="col">Categoria</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Plasma - LG HD</th>
                <td>Electronico</td>
                <td>78,000.00 kz</td>
                <td>
                    <div class="action-row d-flex gap-1">
                        <form action="#" class="d-flex gap-1" style="width:60%;">
                            <input type="number" name="quantity" id="quantity" class="form-control" min="1">
                            <button class="btn btn-primary" type="submit"><img src="../assets/images/icons/restart_144px.png" alt="update-icon" style="max-width: 25px;"></button>
                        </form>
                        <form action="#" method="post">
                           <button class="btn btn-danger"type="submit"><img src="../assets/images/icons/delete_trash_144px.png" alt="delete-icon" style="max-width: 25px;"></button> 
                        </form>
                    </div>
                </td>
              </tr>
              <th scope="row">Plasma - LG HD</th>
                <td>Electronico</td>
                <td>78,000.00 kz</td>
                <td>
                    <div class="action-row d-flex gap-1">
                        <form action="#" class="d-flex gap-1" style="width:60%;">
                            <input type="number" name="quantity" id="quantity" class="form-control" min="1">
                            <button class="btn btn-primary" type="submit"><img src="../assets/images/icons/restart_144px.png" alt="update-icon" style="max-width: 25px;"></button>
                        </form>
                        <form action="#" method="post">
                           <button class="btn btn-danger"type="submit"><img src="../assets/images/icons/delete_trash_144px.png" alt="delete-icon" style="max-width: 25px;"></button> 
                        </form>
                    </div>
                </td>
              </tr>
              
              <th scope="row">Plasma - LG HD</th>
                <td>Electronico</td>
                <td>78,000.00 kz</td>
                <td>
                    <div class="action-row d-flex gap-1">
                        <form action="#" class="d-flex gap-1" style="width:60%;">
                            <input type="number" name="quantity" id="quantity" class="form-control" min="1">
                            <button class="btn btn-primary" type="submit"><img src="../assets/images/icons/restart_144px.png" alt="update-icon" style="max-width: 25px;"></button>
                        </form>
                        <form action="#" method="post">
                           <button class="btn btn-danger"type="submit"><img src="../assets/images/icons/delete_trash_144px.png" alt="delete-icon" style="max-width: 25px;"></button> 
                        </form>
                    </div>
                </td>
              </tr>
            </tbody>
        </table>
       <h3>Total: <span class="text-success">220,000,00 Kz</span></h3>
</main>
@endsection