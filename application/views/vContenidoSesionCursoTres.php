<!--NAVEGACION INTERNA-->
<div id="pnlContenidoSesionCurso1" class="animated fadeInLeft">  

    <div class="col-md-12 dt-buttons" align="right">
        <a href="<?php print base_url('CtrlCurso'); ?>" type="button" class="btn btn-default">
            <span class="fa fa-arrow-left fa-1x"></span><br>REGRESAR
        </a>
    </div>
    
     <div class="col-md-12" align="center">
        <div class="panel panel-default">

            <div class="panel-body">
                <fieldset>
                    <div class="form-group label-static">
                        <label for="Notas" class="control-label">Notas de la sesión</label>
                        <textarea class="col-md-12 form-control" placeholder="Introduzca aquí alguna observación de la sesión" id="Notas" name="Notas" rows="5" required=""></textarea>
                    </div>
                    <button id="btnCuestionario" type="button" class="btn btn-raised btn-primary" data-dismiss="modal">CAPTURAR CUESTIONARIO</button>
                    <button id="btnFinalizarSesion" type="button" class="btn btn-raised btn-primary" data-dismiss="modal">FINALIZAR TEMA</button>


                </fieldset>
            </div>

        </div>

    </div>
    
</div>

<script>
    var Nsesion = getCookie("sesion");
    var master_url = base_url + 'CtrlContenidoSesionCursoTres/';
    var idUsuario = "<?php echo $this->session->userdata('ID'); ?>";

    $(document).ready(function () {
   
        if (parseInt(Nsesion) !== 3) {
            $('#btnFinalizarSesion').addClass('hide');
            $('input[type="text"], textarea').attr('readonly', 'readonly');
        } else {
            $('#btnFinalizarSesion').removeClass('hide');
            $('input[type="text"], textarea').attr('readonly', false);
        }


        $('#btnFinalizarSesion').on('click', function () {


        });


    });

</script>