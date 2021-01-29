  
    <!-- Modal -->
    <div class="modal fade" id="acomModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Formulario para el registro de acompañantes</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="col-md-12">
                        <form id="formulario-acompanante">
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
                                                    <option value="{{ $n->id }}">{{ $n->nombre." ".$n->apellido_paterno." ".$n->apellido_materno." [".$n->qr."]" }}</option>
                                                @endforeach
                                            </select>
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
                                        <div class="col-md-5">
                                            <label class="input-group" for="nombre">Nombre(s):</label>
                                            <input tab-index="1" required class="form-control"  type="text" id="nombre" name="nombre">
                                        </div>
                                        <div class="col-md-3">
                                            <label for="edoSalud" class="input_group">Estado de salud:</label>
                                            <select name="edoSalud" class="form-control">
                                                @foreach($edosSalud as $e)
                                                    <option value="{{ $e->id }}">{{ $e->estado_salud}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-3">
                                            <label for="fec_nac" class="input_group">Fecha de nacimiento:</label>
                                            <input type="date" name="fec_nac" tab-index="1" required class="form-control" id="fec_nac" placeholder="Fecha">
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <label for="paren" class="input_group">Parentesco:</label>
                                            <select name="paren" class="form-control">
                                                @foreach($parentescos as $p)
                                                    <option value="{{ $p->id }}">{{ $n->parentesco}}</option>
                                                @endforeach
                                            </select>
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

                                    <center><h4>Datos socioeconómicos</h4></center>
                                    
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label class="input_group" for="esc">Escolaridad:</label>
                                            <select name="esc" class="form-control">
                                                @foreach($escolaridades as $e)
                                                    <option value="{{ $e->id }}">{{ $e->escolaridad }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="input-group" for="trab">Trabaja:</label>
                                            <div class="col-md-6">
                                                <input type="radio" name="trab" id="trab_s" value="1">
                                                <label class="input_group" for="trab_s">Si</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="trab" id="trab_n" value="0">
                                                <label class="input_group" for="trab_n">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label class="input_group" for="ocu">Ocupación:</label>
                                            <select name="ocu" class="form-control">
                                                @foreach($ocupaciones as $o)
                                                    <option value="{{ $o->id }}">{{ $o->ocupacion }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-8">
                                            <label class="input-group" for="goce">Goce de sueldo:</label>
                                            <div class="col-md-6">
                                                <input type="radio" name="goce" id="goce_s" value="1">
                                                <label class="input_group" for="goce_s">Si</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="goce" id="goce_n" value="0">
                                                <label class="input_group" for="goce_n">No</label>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label class="input-group" for="dep_ec">Dependientes económicos:</label>
                                            <input tab-index="1" required class="form-control"  type="number" id="dep_ec" name="dep_ec">
                                        </div>
                                        <div class="col-md-8">
                                            <label class="input-group" for="seg">Seguro médico:</label>
                                            <div class="col-md-6">
                                                <input type="radio" name="seg" id="seg_s" value="1">
                                                <label class="input_group" for="seg_s">Si</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="seg" id="seg_n" value="0">
                                                <label class="input_group" for="seg_n">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label class="input-group" for="rent">Renta o mensualidad:</label>
                                            <input tab-index="1" required class="form-control"  type="number" id="rent" name="rent">
                                        </div>
                                        <div class="col-md-8">
                                            <label class="input-group" for="casa">Casa propia:</label>
                                            <div class="col-md-6">
                                                <input type="radio" name="casa" id="casa_s" value="1">
                                                <label class="input_group" for="casa_s">Si</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="casa" id="casa_n" value="0">
                                                <label class="input_group" for="casa_n">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-4">
                                            <label class="input-group" for="ing">Ingreso mensual:</label>
                                            <input tab-index="1" required class="form-control"  type="number" id="ing" name="ing">
                                        </div>
                                        <div class="col-md-8">
                                            <label class="input-group" for="asist">Asistencia financiera:</label>
                                            <div class="col-md-6">
                                                <input type="radio" name="asist" id="asist_s" value="1">
                                                <label class="input_group" for="asist_s">Si</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="radio" name="asist" id="asist_n" value="0">
                                                <label class="input_group" for="asist_n">No</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-12">
                                            <label class="input_group " for="obs">Observaciones:</label><br>
                                            <textarea name="obs" rows="4" cols="50" placeholder="Observaciones"></textarea>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group row">
                                        <div class="col-md-7">
                                            <label for="imagen" class="input-group">Foto del Acompañante</label>
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
        $("#formulario-acompanante").submit(function(e){
            e.preventDefault();
            $.post("{{route('add-acompanante')}}", $("#formulario-acompanante").serialize(), function(respuesta){
                toastr.success('El registro se realizó exitosamente.', 'Acompañante nuevo agregado', {timeOut: 5000});
                $("#acomModal").modal("hide");
                var table = $('#data-table-acompanantes').DataTable();
                table.ajax.reload();
            }); 
        });
    });

    function readURL(input) {
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