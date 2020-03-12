<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>crear producto:</h1>

<form action="{{url('guardarproducto')}}" method="post">
 @csrf
 
 nombre: <input type="text" name="nombre"/>
 <br/>
 Valor unitario: <input type="text" name="valor"/>
 <br/>
 <button type="submit">Guardar</button>
</form>
</body>
</html>
