<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>
</head>
<body>
    <center>
                    <table class="table table-secondary table-hover">
                        <thead class="bg-primary text-white">
                          <br>
                        <h1>Pestaña de Productos</h1>
                        <br>
                            <thead>
                                <th>Nombre</th>
                                <th>Precio Unitario</th>
                                <th>stock</th>
                                <th>ID Condicion</th>
                                </thead>
                                <tbody>
                                    @foreach($products as $product)
                                    <tr>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->unit_price}}</td>
                                        <td>{{$product->stock}}</td>
                                        <td>{{$product->id_condition}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                 </table>

                                 </table>   

            <div class="row mt-3">
           <div class="col-md-4 offset-md-4">
            <div class="d-grid mx-auto">
            <button class="btn btn-dark data-op="1" data-bs-toggle="modal" data-bs-target="texto">
            <a href="{{route('Products.create')}}" class="fa-solid fa-cicle-plus">Añadir</a>
        </center>
    
</body>
</html>