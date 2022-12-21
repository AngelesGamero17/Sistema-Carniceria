<br>
<br>
<center>
<h2>Crear Pedido </h2>
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
<div class="container" > 
<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('Orders.store')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Peso Total</label>
          <input type="text" id="title" name="overall_weight" class="form-control" required="">

        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Precio Total</label>
          <textarea name="total_price" class="form-control" required=""></textarea>

          <div class="form-group">
          <label for="exampleInputEmail1">Status</label>
          <textarea name="status" class="form-control" required=""></textarea>

        </div>


        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </form>
</div>