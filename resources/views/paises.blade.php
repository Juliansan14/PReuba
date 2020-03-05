<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>paises</h1>
<tboy>
 <table class="table tabel-bordered">
        <thead>
            <tr>
                <th >pais</th>
                <th >Capital</th>
                <th >moneda</th>
                <th >poblacion</th>
                <th >Ciudades Importante</th>
            </tr>
        </thead>    
    <tbody>
        @foreach ($paises as $pais => $informacion)
            <tr>
                <td rowspan="3"> {{ $pais }} </td>  
                <td rowspan="3"> {{ $informacion ["capital"] }} </td>
                <td rowspan="3"> {{ $informacion ["peso"] }} </td>
                <td rowspan="3"> {{ $informacion ["poblacion"] }} </td>
                <td> {{ $informacion ["ciudades"] [0] }}</td>
             </tr>
             <tr>   
                <td> {{ $informacion ["ciudades"] [1] }}</td>
            </tr>
            <tr>
                <td> {{ $informacion ["ciudades"] [2] }}</td>
            </tr>
        @endforeach
    </tbody>
    </table>
     
</body>
</html>