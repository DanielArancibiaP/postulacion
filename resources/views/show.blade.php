@extends('app')
  
@section('content')
<div class="row">
    <div class="col-md-10 col-md-offset-1">
        <h2>Informacion ufs
            <button type="button" id="add" data-bs-toggle="modal" data-bs-target="#addnew" class="btn btn-primary pull-right"> Ingresar registro</button>

        </h2>
    </div>
</div>
<div class="row">
    <form action="{{ URL::to('saveDts')}}">
        <h1>Generar grafico</h1>
        <div class="col-lg-4">
            <label for="">Desde</label>
            <input type="date" name="desde" id="" class="form-control"><br>
        </div>
        <div class="col-lg-4">
            <label for="">Hasta</label>
            <input type="date" name="hasta" class="form-control">
        </div><br>
        <input type="submit" class="btn btn-primary" value="Generar grafico">
    </form>
</div>

 <div class="row">
    <div class="col-md-10 col-md-offset-1">
        <table id="myTable" class="display">
            <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>Codigo</th>
                <th>Unidad de medida</th>
                <th>Valor</th>
                <th>Fecha</th>
                <th>Tiempo</th>
                <th>Origen</th>
                <th>Action</th>
            </thead>
            <tbody id="infoBody">
            </tbody>
              
        </table>
    </div>
</div>
@endsection
  
@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
  
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
             
            showInfo();
   
            $('#addForm').on('submit', function(e){
                e.preventDefault();
                var form = $(this).serialize();
                var url = $(this).attr('action');
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: form,
                    dataType: 'json',
                    success: function(){
                        $('#addnew').modal('hide');
                        $('#addForm')[0].reset();
                        showInfo();
                    }
                });
            });
             
            $('#graff').on('submit', function(e){
                e.preventDefault();
                var form = $(this).serialize();
                var url = $(this).attr('action');
                $.ajax({
                    type: 'POST',
                    url: url,
                    data: form,
                    dataType: 'json',
                    success: function(){
                        $('#graff').modal('hide');
                        $('#addForm2')[0].reset();
                        showInfo();
                    }
                });
            });
            $(document).on('click', '.edit', function(event){
                event.preventDefault();
                var id = $(this).data('id');
                var nombreIndicador = $(this).data('nom');
                var codigoIndicador = $(this).data('cod');
                var unidadMedidaIndicador = $(this).data('uni');
                var valorIndicador = $(this).data('val');
                var fechaIndicador = $(this).data('fech');
                var tiempoIndicador = $(this).data('tm');
                var origenIndicador = $(this).data('orig');

                $('#editmodal').modal('show');
                $('#nombreIndicador').val(nombreIndicador);
                $('#codigoIndicador').val(codigoIndicador);
                $('#unidadMedidaIndicador').val(unidadMedidaIndicador);
                $('#valorIndicador').val(valorIndicador);
                $('#fechaIndicador').val(fechaIndicador);
                $('#tiempoIndicador').val(tiempoIndicador);
                $('#origenIndicador').val(origenIndicador);

                $('#memid').val(id);
            });
             
            $(document).on('click', '.delete', function(event){
                event.preventDefault();
                var id = $(this).data('id');
                $('#deletemodal').modal('show');
                $('#deletereg').val(id);
            });
             
            $('#editForm').on('submit', function(e){
                e.preventDefault();
                var form = $(this).serialize();
                var url = $(this).attr('action');
                $.post(url,form,function(data){
                    $('#editmodal').modal('hide');
                    showInfo();
                })
            });
             
            $('#deletereg').click(function(){
                var id = $(this).val();
                $.post("{{ URL::to('delete') }}",{id:id}, function(){
                    $('#deletemodal').modal('hide');
                    showInfo();
                })
            });
    
             
        });
   
        function showInfo(){ 
            $.get("{{ URL::to('show') }}", function(data){ 
                $('#infoBody').empty().html(data);
            })
            showI();
        }
          
        function showI(){ 
            $.get("{{ URL::to('saveDts') }}", function(data){ 
                $('#infografics').empty().html(data);
            })
        }
    </script>
    <script>
        $(document).ready(function () {
    $('table.display').DataTable();
});
<script>
        $(document).ready(function () {
    $('table.display2').DataTable();
});
    </script>
@endsection