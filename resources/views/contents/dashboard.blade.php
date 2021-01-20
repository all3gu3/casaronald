<input type="checkbox" id="check">
<!--header area start>
<header>
    <div class="row">
        <div class="col-md-6">
            <label for="check">
                <i class="fas fa-bars" id="sidebar_btn"></i>
            </label>
        </div>
        <div class="col-md-6" style="text-align: right; right:10px">
            <br>
            <img src="{{--asset('images/icons/casaronald.png')--}}" height="25px">
        </div>
    </div>
</header>
<!--header area end-->

<div class="container tablita">

    <h1>Familias</h1>

    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>N° de Registro</th>
                <th>Código QR</th>
                <th>País</th>
                <th>Estado</th>
                <th>Municipio</th>
                <th width="100px">Action</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
            

<!--sidebar start-->
<div class="sidebar" id="theTarget">

    <a href="#"><i class="fas"><img src="{{asset('images/icons/w_profile.png')}}" height="25px"></i><span>Perfil</span></a>
    <br>
    <a href="#" id="open_btn"><i class="fas"><img id="checking" src="{{asset('images/icons/w_open.png')}}" height="25px"></i><span>Contraer</span></a>
    
</div>
<!--sidebar end-->

<script>
    $("#open_btn").click(function(){
        //alert("Boton clikado");
        var img_src = $('#checking').attr('src');
        //alert("src de la imagen: "+img_src);

        if(img_src == "http://localhost/casaronald/casaronald/public/images/icons/w_open.png") {
            //alert("is checked!");
            $( "#check" ).prop( "checked", false );
            $('#checking').attr('src',"http://localhost/casaronald/casaronald/public/images/icons/w_close.png");
        }
        else{
            //alert("is NOT checked!");
            $( "#check" ).prop( "checked", true );
            $('#checking').attr('src',"http://localhost/casaronald/casaronald/public/images/icons/w_open.png");
        }
    });
</script>

<script type="text/javascript">

    $(function () {
      var table = $('.data-table').DataTable({
          processing: true,
          serverSide: true,
          ajax: "{{ route('get-familias-datatable') }}",
          columns: [
              {data: 'id', name: 'id'},
              {data: 'qr', name: 'qr'},
              {data: 'pais', name: 'pais'},
              {data: 'estado', name: 'estado'},
              {data: 'municipio', name: 'municipio'},
              {data: 'action', name: 'action', orderable: false, searchable: false},
          ]
      });
    });
  </script>

 