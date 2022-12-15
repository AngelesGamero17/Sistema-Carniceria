Editar
@if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('Users.store')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre</label>
          <input type="text" id="title" name="name" class="form-control" required="" value="{{$users2->name}}">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Apellido</label>
          <textarea name="surname" class="form-control" required=""> {{$users2->surname}}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Celular</label>
          <textarea name="cell" class="form-control" required="" >{{$users2->cell}}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Direccion</label>
          <textarea name="address" class="form-control" required="" >{{$users2->address}}</textarea>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">ID Marital</label>
          <textarea name="id_marital" class="form-control" required="" >{{$users2->id_marital}}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>