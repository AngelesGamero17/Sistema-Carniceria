<!doctype html>
<html lang="ar" dir="rtl">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css" integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title>Carniceria-Angeles</title>
  </head>
  <body>


        <div class="container mt-4">
            <div class="row justify-content-md-center">
                <div class="col-auto">
                    <h1>C-A-R-N-I-C-E-R-I-A</h1>
                    <br>
               
                <table class="table table-dark table-hover">
                        <thead class="bg-primary text-white">

                            <thead>
                                <th>Usuario</th>
                                <th>Apellido</th>
                                <th>Celular</th>
                                <th>Direccion</th>

                                </thead>
                                <tbody>
                                    @foreach($users as $registro)
                                    <tr>
                                        <td>{{$registro->name}}</td>
                                        <td>{{$registro->surname}}</td>
                                        <td>{{$registro->cell}}</td>
                                        <td>{{$registro->address}}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                                
                            <br>


                        <div class="container mt-4">
                            <div class="row justify-content-md-center">
                                <div class="col-auto">
                                       
                                <table class="table table-dark table-hover">
                                    <thead class="bg-primary text-white">
                            <th>Productos</th>
                            <th>Precio Unitario</th>
                            <th>stock</th>

                            
                        </thead>
                        <tbody>
                            @foreach($products as $registro)
                            <tr>
                                <td>{{$registro->name}}</td>
                                <td>{{$registro->unit_price}}</td>
                                <td>{{$registro->stock}}</td>
                            </tr>
                            @endforeach 
                        </tbody>
                    </table>

                        <br>
                        <div class="container mt-4">
                            <div class="row justify-content-md-center">
                                <div class="col-auto">
                                       
                                <table class="table table-dark table-hover">
                                    <thead class="bg-primary text-white">        
                        <thead>
                        <th>Peso Total</th>
                        <th>Precio Total </th>
                        </thead>
                        <tbody>
                            @foreach($orders as $registro)
                            <tr>
                                <td>{{$registro->overall_weight}}</td>
                                <td>{{$registro->total_price}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                        <div class="container mt-4">
                            <div class="row justify-content-md-center">
                                <div class="col-auto">
                                       
                                <table class="table table-dark table-hover">
                                    <thead class="bg-primary text-white"> 
                            <thead>
                                <th>Condicion</th>
                                </thead>
                                <tbody>
                                    @foreach($conditions as $registro)
                                    <tr>
                                        <td>{{$registro->conditions_products}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                        </table>

                        </table>
                        <div class="container mt-4">
                            <div class="row justify-content-md-center">
                                <div class="col-auto">
                                       
                                <table class="table table-dark table-hover">
                                    <thead class="bg-primary text-white"> 
                            <thead>
                                <th>ESTADO CIVIL</th>
                                </thead>
                                <tbody>
                                    @foreach($maritals as $registro)
                                    <tr>
                                        <td>{{$registro->users_marital}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                
                        </table>
                        
                        
    
                    
 
                </div>
            </div>  
        </div>
        <!-- -----------separador---------- -->


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  </body>
</html>