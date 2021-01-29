  
    <!-- Modal -->
    <div class="modal fade" id="operaModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Registro operativo</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <form id="formulario-operativo">
                        @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <center><h4>Datos de registro</h4></center>
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label class="input-group" for="fec_sol">Fecha de registro:</label>
                                            <input type="date" required class="fec_sol" id="fec_sol">
                                        </div>
                                   
                                        <div class="col-md-8">
                                            <label class="nino" for="nino">Niño</label>
                                            <select name="nino" class="form-control">
                                                @foreach($ninos as $n)
                                                    <option value="{{ $n->id }}">{{ $n->nombre_completo }}</option>
                                                @endforeach
                                            </select>
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
                                            <label for="tipo" class="input_group">Tipo de niño:</label>
                                            <select name="tipo" class="form-control">
                                                @foreach($tipos_nino as $t)
                                                    <option value="{{ $t->id }}">{{ $t->tipo_ninio }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-6">
                                            <label class="input-group" for="nombre">Medico que atiende:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="medico" name="medico">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="input_group" for="diag">Diagnostico:</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="diag" name="diag">
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
                                        <div class="col-md-5">
                                            <label class="input-group" for="dias">Días de estancia:</label>
                                            <input tab-index="1" required class="form-control"  type="number" id="dias" name="dias">
                                        </div>
                                        <div class="col-md-7">
                                            <label class="input_group" for="trab">Trabajador Social:</label>
                                            <select name="trab" class="form-control">
                                                @foreach($trabajadores as $t)
                                                    <option value="{{ $t->id }}">{{ $t->trabajador_social }}</option>
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
        $("#formulario-operativo").submit(function(e){
            e.preventDefault();
            $.post("{{route('add-nino')}}", $("#formulario-operativo").serialize(), function(respuesta){
                toastr.success('El registro se realizó exitosamente.', 'Acompañante nuevo agregado', {timeOut: 5000});
                $("#myModal").modal("hide");
                var table = $('.data-table').DataTable();
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