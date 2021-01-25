
<input type="checkbox" id="check">
<!--sidebar start-->
<div class="sidebar" id="theTarget">
    <br>
    <a href="#" id="open_btn"><i class="fa fa-bars"><img id="checking" src="{{asset('images/icons/w_open.png')}}" height="0px"></i><span>Contraer</span></a>
    <br>
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

        if(img_src == "http://localhost/casaronald/casaronald/public/images/icons/w_open.png") {
            //alert("is checked!");
            $( "#check" ).prop( "checked", false );
            $('.tablita').css({'margin-left':'12.6%'});
            $('.container').css({'margin-left':'12.6%'});
            $('#checking').attr('src',"http://localhost/casaronald/casaronald/public/images/icons/w_close.png");
        }
        else{
            //alert("is NOT checked!");
            $( "#check" ).prop( "checked", true );
            $('.tablita').css({'margin-left':'7%'});
            $('.container').css({'margin-left':'7%'});
            $('#checking').attr('src',"http://localhost/casaronald/casaronald/public/images/icons/w_open.png");
        }
    });
</script>