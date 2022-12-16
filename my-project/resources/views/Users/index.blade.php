<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuario</title>
</head>
<body>
<ul class="nav nav-tabs card-header-tabs">
<li class="nav-item">
        <a class="nav-link active" aria-current="true" href="{{'/home'}}">Inicio</a>
      </li>

      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="{{route('Conditions.index')}}">Condicion</a>
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
        <a class="nav-link" href="{{route('Orders.index')}}">Pedidos</a>
      </li>

      &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
      <form class="d-flex">
            <input name=buscarpor class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" ">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
          </form>
    </ul>
    <center>
                    <table class="table table-secondary table-hover">
                        <thead class="bg-primary text-white">
                          <br>
                        <h1>Pestaña de Usuarios</h1>
                        <br>
                            <thead>
                                <th>ID</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th>Celular</th>
                                <th>Direccion</th>
                                <th>ID Estado Civil</th>
                                <th>Opciones</th>
                                </thead>
                                <tbody>
                                    @foreach($users as $user)
                                    <tr>
                                        <td>{{$user->id}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->surname}}</td>
                                        <td>{{$user->cell}}</td>
                                        <td>{{$user->address}}</td>
                                        <td>{{$user->id_marital}}</td>
                                        
                                        <td><a href="{{route('Users.edit',$user->id)}}">Editar</a></td>
                                        <td>Delete</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                 </table>

                                 </table>   

            <div class="row mt-3">
           <div class="col-md-4 offset-md-4">
            <div class="d-grid mx-auto">
            <button class="btn btn-dark data-op="1" data-bs-toggle="modal" data-bs-target="texto">
            <a href="{{route('Users.create')}}" class="fa-solid fa-cicle-plus">Nuevo Usuario</a>
           
        </center>
    
</body>
</html>