@foreach($informaciones as $info)
    <tr>
        <td>{{$info->id}}</td>
        <td>{{$info->nombreIndicador}}</td>
        <td>{{$info->codigoIndicador}}</td>
        <td>{{$info->unidadMedidaIndicador}}</td>
        <td>{{$info->valorIndicador}}</td>
        <td>{{$info->fechaIndicador}}</td>
        <td>{{$info->tiempoIndicador}}</td>
        <td>{{$info->origenIndicador}}</td>

        <td><a href='#' class='btn btn-success edit' data-id='{{ $info->id }}' data-nom='{{ $info->nombreIndicador }}' data-cod='{{ $info->codigoIndicador }}'
            data-uni='{{ $info->unidadMedidaIndicador }}' data-val='{{ $info->valorIndicador }}' data-fech='{{ $info->fechaIndicador }}' data-tm='{{ $info->tiempoIndicador }}'
            data-orig='{{ $info->origenIndicador }}'> Editar</a> 
            <a href='#' class='btn btn-danger delete' data-id='{{ $info->id }}'> Borrar</a>
        </td>
    </tr>
@endforeach

