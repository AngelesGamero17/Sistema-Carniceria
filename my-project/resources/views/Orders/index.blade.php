<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedidos</title>
</head>
<body>
<ul class="nav nav-tabs card-header-tabs">
<li class="nav-item">
        <a class="nav-link " aria-current="true" href="{{'/home'}}">Inicio</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " aria-current="true" href="{{route('Conditions.index')}}">Condicion</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Maritals.index')}}">Estado Civil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Products.index')}}">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('Users.index')}}">Usuarios</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="{{route('Orders.index')}}">Pedidos</a>
      </li>

      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
      <form class="d-flex">
            <input name=buscarpor class="form-control me-2" type="search" placeholder="Buscar " aria-label="Search" >
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
    </ul>
    
    <center>
                    <table class="table table-secondary table-hover">
                        <thead class="bg-primary text-white">
                          <br>
                        <h1>Pestaña de Pedidos</h1>
                        <br>
                            <thead>
                                <th>Peso Total</th>
                                <th>Precio Total</th>
                                <th>Opciones</th>
                                </thead>
                                <tbody>
                                    @foreach($orders as $order)
                                    <tr>
                                        <td>{{$order->overall_weight}}</td>
                                        <td>{{$order->total_price}}</td>
                                        <td><a href="{{route('Orders.edit',$order->id)}}">Editar</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                 </table>

                                 </table>

            <div class="row mt-3">
           <div class="col-md-4 offset-md-4">
            <div class="d-grid mx-auto">
            <button class="btn btn-dark data-op="1" data-bs-toggle="modal" data-bs-target="texto">
            <a href="{{route('Orders.create')}}" class="fa-solid fa-cicle-plus">Añadir</a>
        </center>
    
</body>
</html>