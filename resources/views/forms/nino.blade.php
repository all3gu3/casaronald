  
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Formulario de solicitud</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <form class="form-horizontal" id="formulario-solicitud" action="" method="POST" role="form">
                        @csrf

                            <div class="row">
                                <div class="col-md-12">
                                    <center><h4>Datos de solicitud</h4></center>
                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label for="fec_sol" class="input_group">Fecha de solicitud*:</label>
                                            <input type="date" name="name" tab-index="1" required class="form-control" id="fec_sol" placeholder="Fecha">
                                        </div>
                                    <!--/div>
                                    <div class="form-group"-->
                                        <div class="col-md-9">
                                            <label class="input-group" for="estatus">Estatus de la estancia*:</label>
                                            <div class="col-md-4">
                                                <input type="radio" name="estatus" id="Primera" value="Primera vez">
                                                <label for="Primera">Primera vez</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="estatus" id="Prorroga" value="Prorroga" >
                                                <label for="Prorroga">Prorroga</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="estatus" id="Subsecuente" value="Subsecuente" >
                                                <label for="Subsecuente">Subsecuente</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label for="hos" class="input_group">Hospital*:</label>
                                            <input type="text" id="hospital" name="hos" tab-index="1" required class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="serv" class="input_group">Servicio*:</label>
                                            <input type="text" id="servicio" name="serv" tab-index="1" required class="form-control">
                                        </div>
                                    </div>
                                    <center><h4>Datos generales</h4></center>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label class="input-group" for="apellidop">Apellido Paterno:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="apellidop" name="app">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="input-group" for="apellidom">Apellido Materno:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="apellidom" name="apm">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-9">
                                            <label class="input-group" for="nombre">Nombre(s):</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="nombre" name="nombre">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="input-group" for="edad">Edad:</label>
                                            <input tab-index="1" required class="form-control"  type="number" id="edad" name="edad">
                                        </div>
                                    </div>
                                    <!--div class="form-group">
                                        <div class="col-md-6">
                                            <label class="input_group" for="fecnac">Fecha de nacimiento:</label>
                                            <input tab-index="1" required class="form-control"  type="date" id="fecnac" name="fecha_nac">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="inputEmail1" class="input-group">Foto de la familia</label>
                                            <input type="file" classs="form-control-file blockWhenEdit" name="image" id="image" placeholder="Imagen">
                                        </div>
                                    </div-->

                                    <div class="form-group">
                                        <div class="col-md-3">
                                            <label for="fec_sol" class="input_group">Fecha de nacimiento:</label>
                                            <input type="date" name="name" tab-index="1" required class="form-control" id="fec_sol" placeholder="Fecha">
                                        </div>
                                    <!--/div>
                                    <div class="form-group"-->
                                        <div class="col-md-9">
                                            <label class="input-group" for="estatus">Género:</label>
                                            <div class="col-md-4">
                                                <input type="radio" name="sexo" id="Masculino" value="Masculino">
                                                <label class="input_group" for="Masculino">Masculino</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input  type="radio" name="sexo" id="Femenino" value="Femenino" >
                                                <label class="input_group" for="Femenino">Femenino</label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="radio" name="sexo" id="Indefinido" value="Indefinido" >
                                                <label class="input_group" for="Indefinido">Indefinido</label>   
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-md-5">
                                            <label class="input_group" for="esc">Escolaridad:</label>
                                            <select name="esc" size="1" class="form-control customeSelect2 select-escolaridad" multiple="multiple" data-ajax--url="search-escolaridad">
                                                <option value="Sin escuela">Sin escuela</option>
                                                <option value="Maternal">Maternal</option>
                                                <!--option value="Kinder">Kinder</option>
                                                <option value="Primaria">Primaria</option>
                                                <option value="Secundaria">Secundaria</option>
                                                <option value="Preparatoria/Bachiller">Preparatoria/Bachiller</option>
                                                <option value="Carrera Técnica">Carrera Técnica</option>
                                                <option value="Licenciatura">Licenciatura</option>
                                                <option value="Maestría">Maestría</option>
                                                <option value="Doctorado">Doctorado</option>
                                                <option value="Educación inicial">Educación inicial</option-->
                                            </select>
                                        </div>
                                        <div class="col-md-7">
                                            <label class="input_group" for="no_socieco">No. Socieconomico:</label>
                                            <input tab-index="1" required class="form-control"  type="range" name="rango" min="1" max="6" step="1" id="no_socieco" list="no_socieco" oninput="this.nextElementSibling.value = this.value" onreset="3">
                                            <output>3</output>
                                            <datalist id="no_socieco">
                                            <option value="1" label="1">
                                            <option value="2" label="2">
                                            <option value="3" label="3">
                                            <option value="4" label="4">
                                            <option value="5" label="5">
                                            <option value="6" label="6">
                                            </datalist>
                                        </div>
                                    </div>
                                    <center><h4>Dirección</h4></center>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label class="input_group" for="pais">País:</label>
                                            <select name="pais" size="1" class="form-control customeSelect2 select-pais" multiple="multiple" data-ajax--url="search-pais">
                                                <option value="">...</option>
                                                <option value="México">México</option>
                                                <option value="Belice">Belice</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="input_group" for="est">Estado:</label>
                                            <select name="est" size="1" class="form-control customeSelect2 select-estado" multiple="multiple" data-ajax--url="search-estado">
                                                <option value="">...</option>
                                                <option value="Puebla">Puebla</option>
                                                <option value="CDMX">CDMX</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="input_group" for="mun">Municipio:</label>
                                            <select name="mun" size="1" class="form-control customeSelect2 select-mun" multiple="multiple" data-ajax--url="search-mun">
                                                <option value="">...</option>
                                                <option value="Puebla">Puebla</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-5">
                                            <label class="input_group" for="calle">Calle:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="calle" name="calle">
                                        </div>
                                        <div class="col-md-2">
                                            <label class="input_group" for="num_c">Numero:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="num_c" name="num_c">
                                        </div>
                                        <div class="col-md-5">
                                            <label class="input_group" for="col">Colonia:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="col" name="col">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label class="input_group" for="loca">Localidad:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="loca" name="loca">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="input_group" for="cp">CP:</label>
                                            <input tab-index="1" required class="form-control"  type="number" id="cp" name="cp" max="99999" min="9999">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="input_group" for="zona">Zona:</label>
                                            <select name="zona" size="1" class="form-control customeSelect2 select-mun" multiple="multiple" data-ajax--url="search-mun">
                                                <option value="Rural">Rural</option>
                                                <option value="Sub-urbana">Sub-urbana</option>
                                                <option value="Urbana">Urbana</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-4">
                                            <label class="input_group" for="tel1">Teléfono 1:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="tel1" name="tel1">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="input_group" for="tel2">Teléfono 2:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="tel2" name="tel2">
                                        </div>
                                        <div class="col-md-4">
                                            <label class="input_group" for="dial">Dialecto:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="dial" name="dial">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label class="input-group" for="nombre">Medico:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="medico" name="medico">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="input_group" for="diag">Diagnostico:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="diag" name="diag">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label class="input_group" for="sal_min">Salario mínimo:</label>
                                            <select name="sal_min" size="1" class="form-control customeSelect2 select-sal_min" multiple="multiple" data-ajax--url="search-sal_min">
                                                <option value="1">Menor a 1</option>
                                                <option value="2">1 a 2</option>
                                                <option value="3">Mayor a 2</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="input_group" for="trab">Trabajador Social:</label>
                                            <select name="trab" size="1" class="form-control customeSelect2 select-trab" multiple="multiple" data-ajax--url="search-trab">
                                                <option value="Rural">...</option>
                                            </select>
                                        </div>
                                    </div>
                                    <center><h4>Tratamiento</h4></center>
                                    <div class="form-group"> 
                                        <div class="col-md-4">
                                            <input type="checkbox" name="terapia" id="terapia" value=0>
                                            <label class="input_group" for="terapia">Terapia</label><br>
                                                
                                            <input type="checkbox" name="tratamiento" id="tratamiento" value=0>
                                            <label class="input_group" for="tratamiento">Tratamiento</label><br>
                                                
                                            <input type="checkbox" name="est_lab" id="est_lab" value=0>
                                            <label class="input_group" for="est_lab">Estudios de laboratorio</label><br>
                                                
                                            <input type="checkbox" name="val_med" id="val_med" value=0>
                                            <label class="input_group" for="val_med">Valoracion Medica</label><br>
                                                
                                            <input type="checkbox" name="est_gab" id="est_gab" value=0>
                                            <label class="input_group" for="est_gab">Estudios de Gabinete</label><br>
                                                
                                            <input type="checkbox" name="rehab" id="rehab" value=0>
                                            <label class="input_group" for="rehab">Rehabilitacion</label><br>
                                                
                                        </div>

                                        <div class="col-md-4">
                                            <input type="checkbox" name="cons_ext" id="cons_ext" value=0>
                                            <label class="input_group" for="cons_ext">Consulta externa</label><br>
                                                
                                            <input type="checkbox" name="cirugia" id="cirugia" value=0>
                                            <label class="input_group" for="cirugia">Cirugia</label><br>

                                            <input type="checkbox" name="obs_urg" id="obs_urg" value=0>
                                            <label class="input_group" for="obs_urg">Observacion-Urgencias</label><br>
                                                
                                            <input type="checkbox" name="pre_hosp" id="pre_hosp" value=0>
                                            <label class="input_group" for="pre_hosp">Pre-Hospitalizacion</label><br>
                                                
                                            <input type="checkbox" name="hospita" id="hospita" value=0>
                                            <label class="input_group" for="hospita">Hospitalizacion</label><br>

                                            <input type="checkbox" name="ucin" id="ucin" value=0>
                                            <label class="input_group" for="ucin">Terapia UCIN</label><br>

                                        </div>
                                        
                                        <div class="col-md-4">
                                                
                                            <input type="checkbox" name="t_int" id="t_int" value=0>
                                            <label class="input_group" for="t_int">Terapia T int</label><br>
                                                
                                            <input type="checkbox" name="ucia" id="ucia" value=0>
                                            <label class="input_group" for="ucia">Terapia UCIA</label><br>
                                                
                                            <input type="checkbox" name="post" id="post" value=0>
                                            <label class="input_group" for="post">Post-Hospitalizacion</label><br>
                                                
                                            <input type="checkbox" name="otro" id="otro" value=0>
                                            <label class="input_group" for="otro">Otro</label><br>  
                                        </div>    
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-7">
                                            <label class="input_group " for="obs">Observaciones:</label><br>
                                            <textarea name="obs" rows="4" cols="50" placeholder="Observaciones"></textarea>
                                        </div>
                                        <div class="col-md-5">
                                            <label class="input_group " for="diet">Tipo de dieta:</label>
                                            <select name="diet" size="1" class="form-control customeSelect2 select-sal_diet" multiple="multiple" data-ajax--url="search-diet">
                                                <option value="Normal">Normal</option>
                                                <option value="Blanda">Blanda</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-md-6">
                                            <label class="input-group" for="fec_ing">Fecha de ingreso:</label>
                                            <input tab-index="1" required class="form-control"  type="date" id="fec_ing">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="input-group" for="fec_sal">Fecha de salida:</label>
                                            <input tab-index="1" required class="form-control"  type="date" id="fec_sal">
                                        </div>
                                    </div>

                                </div>
                                {{--Needs to be outside column in order to put image on right side--}}
                                <!--div class="col-md-5">
                                    <div class="col-md-3 col-offset-3">
                                        <div class="form-group">
                                            <img id="product_image" src="#" alt="">
                                        </div>
                                    </div>
                                </div-->
                            </div>

                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn botoncito">Guardar</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function readURL(input) {
        alert('aAAAa');
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                var image = new Image();
                image.src = e.target.result;
                image.onload = function(){
                    // console.log(this.width,this.height);
                    if(this.width != this.height)
                    toastr.warning('¡Se recomienda usar imágenes cuadradas!');
                //     //console.log(this.width);
                    $('#product_image').attr('src', this.src);
                };
            }
            reader.readAsDataURL(input.files[0]);
        }
    }
    $('#image').change(function(){
        $('#product_image').css("width", 200);
        // $('#product_image').css("height", 300);
        readURL(this);
    });
</script>