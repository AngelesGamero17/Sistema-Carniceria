<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Condicion</title>
</head>
<body>
    <center>
                    <table class="table table-secondary table-hover">
                        <thead class="bg-primary text-white">
                          <br>
                        <h1>Pestaña de Condicion</h1>
                        <br>
                            <thead>
                                <th>Condicion</th>
                                </thead>
                                <tbody>
                                    @foreach($conditions as $condition)
                                    <tr>
                                        <td>{{$condition->conditions_products}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                 </table>

        </center>
    
</body>
</html>