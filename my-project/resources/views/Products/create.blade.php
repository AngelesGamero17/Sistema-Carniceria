Crear producto


@if ($errors->any())

    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('Products.store')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre</label>
          <input type="text" id="title" name="name" class="form-control" required="">

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Precio Unitario</label>
          <textarea name="unit_price" class="form-control" required=""></textarea>

        </div>
         <div class="form-group">
          <label for="exampleInputEmail1">Stock</label>
          <textarea name="stock" class="form-control" required=""></textarea>

        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">ID Condition</label>
          <textarea name="id_condition" class="form-control" required=""></textarea>

        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>