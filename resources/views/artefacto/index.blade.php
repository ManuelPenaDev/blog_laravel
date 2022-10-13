<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">


<div class='container' >
    <a href="{{route('artefacto.create')}}" class="btn btn-primary">crear artefacto</a>

<table class='table'>
<thead>
    <tr>
        <th scope='col'>Id</th>
        <th scope='col'>Codigo</th>
        <th scope='col'>Descripcion</th>
        <th scope='col'>Cantidad</th>
        <th scope='col'>Precio</th>
        <th scope='col'>Acciones</th>
    </tr>
</thead>

<tbody>
@foreach($artefactos as $artefacto)
<tr>
    <td>{{$artefacto->id}}</td>
    <td>{{$artefacto->codigo}}</td>
    <td>{{$artefacto->descripcion}}</td>
    <td>{{$artefacto->cantidad}}</td>
    <td>{{$artefacto->precio}}</td>
    <td>
    <a href="" class="btn btn-info">Editar</a>
<a href="" class="btn btn-danger">Borrar</a>
    </td>
  </tr>

@endforeach
</tbody>
</table>
 
</div>