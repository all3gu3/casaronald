<div class="container tablita">

    <h1>Expediente | Niños</h1>
    <br>
    <div class="row">
        <div class="col-md-6">
            <p>Concentrado general de niños albergados en casa Ronald McDonald Puebla</p>
        </div>
        <div class="col-md-6" style="text-align: right;"> 
            <button type="button" class="btn btn-lg botoncito" data-toggle="modal" data-target="#myModal">Agregar Niño<i class="fa fa-user-plus"></i></button>
        </div>
    </div>
    <br>

    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Sexo</th>
                <th>Escolaridad</th>
                <th>Estado</th>
                <th>Municipio</th>
                <th>QR</th>
                <th>Ver QR</th>
                <th>Ver Niño</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <br>

<script>

    function showModal(id){
        $.get("{{route('get-ficha')}}/"+id, function(myData){ 
        }, "json");

        var srcc = "http://localhost/casaronald/casaronald/storage/app/public/carnes/"+id+".jpg"
        $('#ficha').attr('src',srcc);
    
    }

    $(function () {
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('get-ninos-datatable') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'nombre', name: 'nombre'},
              {data: 'edad', name: 'edad'},
              {data: 'sexo', name: 'sexo'},
              {data: 'escolaridad', name: 'escolaridad'},
              {data: 'estado', name: 'estadp'},
              {data: 'municipio', name: 'municipio'},
              {data: 'qr', name: 'qr'},
              {data: 'id', name:'ver_qr2', render:function(data){
                            return '<button class="btn fichita" onClick="showModal('+data+');" data-target="#qrModal" data-toggle="modal" data-backdrop="false"><i class="fa fa-qrcode"></i></button>';
                        }},
              {data: 'ver_nino', name: 'ver_nino', orderable: false, searchable: false},
          ]
      });
    });   
  </script>

 