<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<form action="{{route('Orders.store')}}" method="POST">
@csrf
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">Peso Total</label>
    <input type="text" name="overall_weight" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1"  class="form-label">Precio Total</label>
    <input type="text" name="total_price" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>

  <button type="submit" class="btn btn-primary">Guardar</button>
</form>  

<div class="row mt-3">
           <div class="col-md-4 offset-md-4">
            <div class="d-grid mx-auto">
            <button class="btn btn-dark data-op="1" data-bs-toggle="modal" data-bs-target="texto">
            <a href="{{route('Orders.index')}}" class="fa-solid fa-cicle-plus"">Lista de Pedidos</a>
 
            </button>
        </div>
    </div>