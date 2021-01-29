
<input type="checkbox" id="check">
<!--sidebar start-->
<div class="sidebar" id="theTarget">
    <br>
    <a href="#" id="open_btn"><i class="fa fa-bars"><img id="checking" src="{{asset('images/icons/w_close.png')}}" height="0px"></i><span>Contraer</span></a>
    <br>
    <a href="http://casaronald.denissereginagarcia.com/public/"><i class="fa fa-home"></i><span>Inicio</span></a>
    <br>
    <a href="{{ route('familias') }}"><i class="fa fa-users"></i><span>Familias</span></a>
    <br>
    <a href="{{ route('registros') }}"><i class="fas fa-address-book"></i><span>Registros</span></a>
    <br>
    <a href="{{ route('operaciones') }}"><i class="fas fa-calendar"></i><span>Operación</span></a>
    
</div>
<!--sidebar end-->

<script>
    $("#open_btn").click(function(){
        //alert("Boton clikado");
        var img_src = $('#checking').attr('src');
        //alert("src de la imagen: "+img_src);

        if(img_src == "http://casaronald.denissereginagarcia.com/public/images/icons/w_open.png") {
            //alert("is checked!");
            $( "#check" ).prop( "checked", false );
            $('.container-2').css({'margin-left':'20%'});
            $('.container').css({'margin-left':'14%'});
            $('#checking').attr('src',"http://casaronald.denissereginagarcia.com/public/images/icons/w_close.png");
        }
        else{
            //alert("is NOT checked!");
            $( "#check" ).prop( "checked", true );
            $('.container-2').css({'margin-left':'12%'});
            $('.container').css({'margin-left':'10%'});
            $('#checking').attr('src',"http://casaronald.denissereginagarcia.com/public/images/icons/w_open.png");
        }
    });
</script>