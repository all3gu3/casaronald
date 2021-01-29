  
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
                        <form id="formulario-solicitud">
                        @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <center><h4>Datos de solicitud</h4></center>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="fec_sol" class="input_group">Fecha de solicitud*:</label>
                                            <input type="date" name="fec_sol" tab-index="1" required class="form-control" id="fec_sol" placeholder="Fecha">
                                        </div>
                                   
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
                                    
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="hos" class="input_group">Hospital:</label>
                                            <select name="hos" class="form-control">
                                                @foreach($hospitales as $h)
                                                    <option value="{{ $h->id }}">{{ $h->hospital }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="serv" class="input_group">Servicio:</label>
                                            <input type="text" id="servicio" name="serv" tab-index="1" required class="form-control">
                                        </div>
                                    </div>

                                    <center><h4>Datos generales</h4></center>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="input-group" for="apellidop">Apellido Paterno:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="apellidop" name="app">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="input-group" for="apellidom">Apellido Materno:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="apellidom" name="apm">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-9">
                                            <label class="input-group" for="nombre">Nombre(s):</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="nombre" name="nombre">
                                        </div>
                                        <div class="col-md-3">
                                            <label class="input-group" for="edad">Edad:</label>
                                            <input tab-index="1" required class="form-control"  type="number" id="edad" name="edad">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="fec_nac" class="input_group">Fecha de nacimiento:</label>
                                            <input type="date" name="fec_nac" tab-index="1" required class="form-control" id="fec_nac" placeholder="Fecha">
                                        </div>
                                   
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
                                    <center><h4>Dirección</h4></center>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label class="input_group" for="pais">País:</label>
                                            <select name="pais" class="form-control">
                                                @foreach($paises as $p)
                                                    <option value="{{ $p->id }}">{{ $p->pais }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="input_group" for="est">Estado:</label>
                                            <select name="est" class="form-control">
                                                @foreach($estados as $e)
                                                    <option value="{{ $e->id }}">{{ $e->estado }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label class="input_group" for="mun">Municipio:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="mun" name="mun">
                                        </div>
                                    </div>
                                    <div class="form-group row">
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
                                    <div class="form-group row">
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
                                            <select name="zona" class="form-control">
                                                @foreach($zonas as $z)
                                                    <option value="{{ $z->id }}">{{ $z->zona }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
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
                                    <center><h4>Datos socio económicos</h4></center>
                                    <div class="form-group row">
                                        <div class="col-md-5">
                                            <label class="input_group" for="esc">Escolaridad:</label>
                                            <select name="esc" class="form-control">
                                                @foreach($escolaridades as $e)
                                                    <option value="{{ $e->id }}">{{ $e->escolaridad }}</option>
                                                @endforeach
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
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="input_group" for="sal_min">Salario mínimo:</label>
                                            <select name="sal_min" class="form-control">
                                                @foreach($salario as $s)
                                                    <option value="{{ $s->id }}">{{ $s->salario_minimo }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="input_group" for="trab">Trabajador Social:</label>
                                            <select name="trab" class="form-control">
                                                @foreach($trabajadores as $t)
                                                    <option value="{{ $t->id }}">{{ $t->trabajador_social }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <center><h4>Datos médicos</h4></center>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="input-group" for="nombre">Medico:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="medico" name="medico">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="input_group" for="diag">Diagnostico:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="diag" name="diag">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label for="ale_alim" class="input_group">Alergias en alimentos:</label>
                                            <input type="text" id="ale_alim" name="ale_alim" tab-index="1" class="form-control">
                                        </div>
                                        <div class="col-md-6">
                                            <label for="ale_med" class="input_group">Alergias en medicamentos:</label>
                                            <input type="text" id="ale_med" name="ale_med" tab-index="1" class="form-control">
                                        </div>
                                    </div>
                                    <center><h4>Tratamiento</h4></center>
                                    <div class="form-group row"> 
                                        <div class="col-md-4">
                                            <input type="checkbox" name="tt" id="tt_terapia" value=1>
                                            <label class="input_group" for="tt_terapia">Terapia</label><br>
                                                
                                            <input type="checkbox" name="tt" id="tt_tratamiento" value=2>
                                            <label class="input_group" for="tt_tratamiento">Tratamiento</label><br>
                                                
                                            <input type="checkbox" name="tt" id="tt_est_lab" value=3>
                                            <label class="input_group" for="tt_est_lab">Estudios de laboratorio</label><br>
                                                
                                            <input type="checkbox" name="tt" id="tt_val_med" value=4>
                                            <label class="input_group" for="tt_val_med">Valoracion Medica</label><br>
                                                
                                            <input type="checkbox" name="tt" id="tt_est_gab" value=5>
                                            <label class="input_group" for="tt_est_gab">Estudios de Gabinete</label><br>
                                                
                                            <input type="checkbox" name="tt" id="tt_rehab" value=6>
                                            <label class="input_group" for="tt_rehab">Rehabilitacion</label><br>
                                                
                                        </div>

                                        <div class="col-md-4">
                                            <input type="checkbox" name="tt" id="tt_cons_ext" value=7>
                                            <label class="input_group" for="tt_cons_ext">Consulta externa</label><br>
                                                
                                            <input type="checkbox" name="tt" id="tt_cirugia" value=8>
                                            <label class="input_group" for="tt_cirugia">Cirugia</label><br>

                                            <input type="checkbox" name="tt" id="tt_obs_urg" value=9>
                                            <label class="input_group" for="tt_obs_urg">Observacion-Urgencias</label><br>
                                                
                                            <input type="checkbox" name="tt" id="tt_pre_hosp" value=10>
                                            <label class="input_group" for="tt_pre_hosp">Pre-Hospitalizacion</label><br>
                                                
                                            <input type="checkbox" name="tt" id="tt_hospita" value=11>
                                            <label class="input_group" for="tt_hospita">Hospitalizacion</label><br>

                                            <input type="checkbox" name="tt" id="tt_ucin" value=12>
                                            <label class="input_group" for="tt_ucin">Terapia UCIN</label><br>

                                        </div>
                                        
                                        <div class="col-md-4">
                                                
                                            <input type="checkbox" name="tt" id="tt_t_int" value=13>
                                            <label class="input_group" for="tt_t_int">Terapia T int</label><br>
                                                
                                            <input type="checkbox" name="tt" id="tt_ucia" value=14>
                                            <label class="input_group" for="tt_ucia">Terapia UCIA</label><br>
                                                
                                            <input type="checkbox" name="tt" id="tt_post" value=15>
                                            <label class="input_group" for="tt_post">Post-Hospitalizacion</label><br>
                                                
                                            <input type="checkbox" name="tt" id="tt_otro" value=16>
                                            <label class="input_group" for="tt_otro">Otro</label><br>  
                                        </div>    
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <label class="input_group " for="obs">Observaciones:</label><br>
                                            <textarea name="obs" rows="4" cols="50" placeholder="Observaciones"></textarea>
                                        </div>
                                        <div class="col-md-5">
                                            <label class="input_group " for="diet">Tipo de dieta:</label>
                                            <select name="diet" class="form-control">
                                                @foreach($dietas as $d)
                                                    <option value="{{ $d->id }}">{{ $d->tipo_dieta }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="input-group" for="fec_ing">Fecha de ingreso:</label>
                                            <input tab-index="1" name="fec_ing" class="form-control"  type="date" id="fec_ing">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="input-group" for="fec_sal">Fecha de salida:</label>
                                            <input tab-index="1" name="fec_sal" class="form-control"  type="date" id="fec_sal">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <label for="imagen" class="input-group">Foto del niño</label>
                                            <input type="file" classs="form-control-file" name="image" id="image" placeholder="Imagen">
                                        </div>
                                        <div class="col-md-5">
                                            <div class="col-md-3 col-offset-3">
                                                <div class="form-group row">
                                                    <img id="product_image" src="#" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="col-md-12" style="text-align: center;"> 
                                        <button type="submit" id="guarda-form" class="btn botoncito">Guardar</button>
                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="modal-footer">
                    <h4>© RMHC</h4>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#formulario-solicitud").submit(function(e){
            e.preventDefault();
            $.post("{{route('add-nino')}}", $("#formulario-solicitud").serialize(), function(respuesta){
                toastr.success('El registro se realizó exitosamente.', 'Niño nuevo agregado', {timeOut: 5000});
                $("#myModal").modal("hide");
                var table = $('#data-table-ninos').DataTable();
                table.ajax.reload();
            }); 
        });
    });

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