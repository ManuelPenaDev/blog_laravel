<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

</head>
<body>
<form method="POST" action="{{route('artefacto.store')}}">
@csrf
<div class="mb-3">
    <label for="" class="form-label">Codigo</label>
    <input id="codigo" name="codigo" type="text" class="form-control" tabindexd="1">
</div>

<div class="mb-3">
    <label for="" class="form-label">Descripcion</label>
    <input id="codigo" name="descripcion" type="text" class="form-control" tabindexd="1">
</div>

<div class="mb-3">
    <label for="" class="form-label">Cantidad</label>
    <input id="codigo" name="cantidad" type="text" class="form-control" tabindexd="1">
</div>

<div class="mb-3">
    <label for="" class="form-label">Precio</label>
    <input id="codigo" name="precio" type="text" class="form-control" tabindexd="1">
</div>
<a href="{{route('artefacto') }}" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type='submit' class="btn btn-primary">Guardar</button>


</form>  
</body>
</html>
 
