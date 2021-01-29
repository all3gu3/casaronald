<div class="container" style="background-color: white">

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

    <table class="table table-bordered data-table" id="data-table-ninos">
        <thead>
            <tr>
                <th>N°</th>
                <th>Nombre</th>
                <th>Edad</th>
                <th>Procedencia</th>
                <th>QR</th>
                <th>Ver QR</th>
                <th>Acompanantes</th>
                <th>Ver Niño</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
    <br>
</div>
<script>

    function showModal(id){
        $.get("{{route('get-ficha')}}/"+id, function(myData){ 
        }, "json");

        var srcc = "http://casaronald.denissereginagarcia.com/storage/app/public/carnes/"+id+".jpg"
        $('#ficha').attr('src',srcc);
    
    }

    function verAcompanantes(id) {
        var table = $('#data-table-acompanantes').DataTable({
            "destroy": true,
            "processing": true,
            "serverSide": true,
            "paging": false,
            "searching": false,
            "ajax": {
               "url": "{{ route('get-acompanantes-datatable') }}",
               "type": 'GET',
               "data": {"id": id}
            },
            columns: [
                {data: 'id', name: 'id'},
                {data: 'nombre', name: 'nombre'},
                {data: 'edad', name: 'edad'},
                {data: 'sexo', name: 'sexo'},
                {data: 'parentesco', name: 'parentesco'},
                {data: 'foto_a', name: 'foto_a'}
            ]
        });
        table.ajax.reload();
    }   

    $(function () {
      var table = $('#data-table-ninos').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('get-ninos-datatable') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'nombre', name: 'nombre'},
              {data: 'edad', name: 'edad'},
              {data: 'procedencia', name: 'procedencia'},
              {data: 'qr', name: 'qr'},
              {data: 'id', name:'ver_qr2', render:function(data){
                    return '<button class="btn fichita" onClick="showModal('+data+');" data-target="#qrModal" data-toggle="modal" data-backdrop="false"><i class="fa fa-qrcode"></i></button>';
              }},
              {data: 'id', name:'ver_acom', render:function(data){
                    return '<button class="btn verr" onClick="verAcompanantes('+data+');" data-target="#acomModalTable" data-toggle="modal" data-backdrop="false"><i class="fa fa-eye"></i></button><button class="btn agregarr" data-target="#acomModal" data-toggle="modal" data-backdrop="false"><i class="fa fa-user-plus"></i></button>';
              }},
              {data: 'ver_nino', name: 'ver_nino', orderable: false, searchable: false},
          ]
      });
    });   
  </script>

 