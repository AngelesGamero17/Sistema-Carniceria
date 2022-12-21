<br>
<br>
<center>
<h2>Editar</h2>
</center>
@if ($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>  
@endif

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('Products.update',$product17)}}">
   @csrf

   @method('put')
   <div class="container">
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
     <div class="form-group">
      <label for="exampleInputEmail1">ID Condicion</label>
      <textarea name="id_condition" class="form-control" required=""> {{ $product17->id_condition}}</textarea>

    </div>
     <div class="form-group">
      <label for="exampleInputEmail1">Status</label>
      <textarea name="status" class="form-control" required=""> {{ $product17->status }}</textarea>

    </div>

    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
  </div>
</div>