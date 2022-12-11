@if ($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('Orders.store')}}">
   @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Peso Total</label>
      <input type="text" id="title" name="overall_weight" class="form-control" required="" value="{{ $order17->overall_weight }}">

    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Precio Total</label>
      <textarea name="total_price" class="form-control" required="">{{ $order17->total_price }}</textarea>

   
    </div>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>