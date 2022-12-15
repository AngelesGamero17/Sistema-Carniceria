
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
      <input type="text" id="title" name="name" class="form-control" required="" value="{{ $product17->name }}">

    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Precio Unitario</label>
      <textarea name="unit_price" class="form-control" required="">{{ $product17->unit_price }}</textarea>

    </div>
     <div class="form-group">
      <label for="exampleInputEmail1">stock</label>
      <textarea name="stock" class="form-control" required=""> {{ $product17->stock }}</textarea>

    </div>

    </div>
     <div class="form-group">
      <label for="exampleInputEmail1">ID Condicion</label>
      <textarea name="id_condition" class="form-control" required=""> {{ $product17->stock }}</textarea>

    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>