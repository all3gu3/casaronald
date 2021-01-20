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

    <h1>Expediente | Niños</h1>
    <br>
    <div class="row">
        <div class="col-md-6">
            <p>Concentrado general de niños albergados en casa Ronald McDonald Puebla</p>
        </div>
        <div class="col-md-6" style="text-align: right;"> 
            <button class="btn botoncito">Agregar Niño<i class="fa fa-user-plus"></i></button>
        </div>
    </div>
    <br>

    <table class="table table-bordered data-table">
        <thead>
            <tr>
                <th>N° de Registro</th>
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
</div>
            

<!--sidebar start-->
<div class="sidebar" id="theTarget">
    <br>
    <a href="#"><i class="fa fa-user-circle"></i><span>Perfil</span></a>
    <br>
    <a href="#"><i class="fa fa-users"></i><span>Familias</span></a>
    <br>
    <a href="#"><i class="fas fa-address-book"></i><span>Registros</span></a>
    <br>
    <a href="#"><i class="fas fa-calendar"></i><span>Operación</span></a>
    <br>
    <a href="#" id="open_btn"><i class="fa fa-bars"><img id="checking" src="{{asset('images/icons/w_open.png')}}" height="0px"></i><span>Contraer</span></a>
    
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
            $('.tablita').css({'margin-left':'12.6%'});
            $('#checking').attr('src',"http://localhost/casaronald/casaronald/public/images/icons/w_close.png");
        }
        else{
            //alert("is NOT checked!");
            $( "#check" ).prop( "checked", true );
            $('.tablita').css({'margin-left':'7%'});
            $('#checking').attr('src',"http://localhost/casaronald/casaronald/public/images/icons/w_open.png");
        }
    });
</script>

<script type="text/javascript">

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
              {data: 'ver_qr', name: 'ver_qr', orderable: false, searchable: false},
              {data: 'ver_nino', name: 'ver_nino', orderable: false, searchable: false},
          ]
      });
    });
  </script>

 