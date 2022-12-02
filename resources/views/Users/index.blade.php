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
    <center>
                    <table class="table table-secondary table-hover">
                        <thead class="bg-primary text-white">
                          <br>
                        <h1>Pestaña de Usuarios</h1>
                        <br>
                        <a href="{{route('Users.create')}}">Nuevo Usuario</a>
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

           
        </center>
    
</body>
</html>