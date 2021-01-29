  
<!-- Modal -->
<div class="modal fade" id="qrModal"  role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Ficha con código qr</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12">
                            <center><h4>Descargue la ficha para imprimirla</h4></center>
                        </div>
                        {{--Needs to be outside column in order to put image on right side--}}
                        <div class="col-md-12">
                            <div style="text-align: center">
                                <img id="ficha" width="600" src="http://casaronald.denissereginagarcia.com/storage/app/public/carnes/A1B2C3.jpg?_=6" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn botoncito">Descargar</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
