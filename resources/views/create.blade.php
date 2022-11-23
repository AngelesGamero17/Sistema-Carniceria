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

 <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{route('product.store')}}">
       @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <input type="text" id="title" name="name" class="form-control" required="">
    
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Unite price</label>
          <textarea name="unit_price" class="form-control" required=""></textarea>
     
        </div>
         <div class="form-group">
          <label for="exampleInputEmail1">stock</label>
          <textarea name="stock" class="form-control" required=""></textarea>

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>