<!--Confirmacion-->
<div id="mdlConfirmar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmación</h4>
        </div>
        <div class="modal-body">Deseas terminar el intento?</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnTerminar">ACEPTAR</button>
        </div>
    </div>
</div>

<!--MODAL CUESTIONARIO-->
<div id="mdlCapturarExamen" class="modal modalFull fade " tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content modal-dialogFull">
        <div class="modal-header modal-headerFull">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title modal-titleFull">Evaluación Parcial</h4>
        </div>
        <div class="modal-body modal-bodyFull">

        </div>
        <div class="modal-footer modal-footerFull">
            <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" id="btnTerminarCaptura" class="btn btn-raised btn-primary">TERMINAR</button>
        </div>
    </div>
</div>


<!--NAVEGACION INTERNA-->
<div id="pnlContenidoSesionCursoSeis" class="animated fadeInLeft">  
    <div class="col-md-12 dt-buttons" align="right">
        <a href="<?php print base_url('CtrlCurso'); ?>" type="button" class="btn btn-default">
            <span class="fa fa-arrow-left fa-1x"></span><br>REGRESAR
        </a>
    </div>

    <div class="col-md-12" align="center">
        <div class="panel panel-default">
            <div class="panel-body">
                <fieldset>
                    <div class="form-group label-static" id="aNotas">
                        <label for="Notas" class="control-label">Notas de la sesión</label>
                        <textarea class="col-md-12 form-control" placeholder="Introduzca aquí alguna observación de la sesión" id="Notas" name="Notas" rows="5" required=""></textarea>
                    </div>
                    <button id="btnIniciarExamen" type="button" class="btn btn-raised btn-primary" data-dismiss="modal">INICIAR EXAMEN</button>
                </fieldset>
            </div>
        </div>
    </div>

</div>

<script>
    var Nsesion = getCookie("sesion");
    var master_url = base_url + 'CtrlContenidoSesionCursoSeis/';
    var master_urlCurso = base_url + 'CtrlCurso/';
    var idUsuario = "<?php echo $this->session->userdata('ID'); ?>";

    $(document).ready(function () {


        $('#btnTerminar').on('click', function () {
            //Validar calificación
            //Aquí se hace el update de estatus a finalizados de las primeras 3 sesiones y se inserta la 4ta
            $('#mdlConfirmar').modal('hide');

            //Modifcar Estatus Anteriores
            $.ajax({
                url: master_urlCurso + 'onModificarEstatusAnteriores',
                type: "POST",
                data: {
                    Sesion: Nsesion
                }
            }).done(function (data, x, jq) {
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
            });

            var frm = new FormData();
            frm.append('Usuario_ID', idUsuario);
            frm.append('NSesion', 7);
            frm.append('Estatus', 'Activa');
            //Inserta otra sesion
            $.ajax({
                url: master_urlCurso + 'onAgregar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                document.cookie = "sesion=" + 7 + " ";
                window.location.href = "<?php echo base_url('CtrlCurso'); ?>";
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });



        });

        $('#btnTerminarCaptura').on('click', function () {
            $('#mdlCapturarExamen').modal('hide');
            $('#mdlConfirmar').modal('show');

        });

        $('#btnIniciarExamen').on('click', function () {
            //Guarda las observaciones
            $.ajax({
                url: master_urlCurso + 'onModificar',
                type: "POST",
                data: {
                    Sesion: Nsesion,
                    Observaciones: $("#Notas").val()
                }
            }).done(function (data, x, jq) {
                
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
            });



            $('#mdlCapturarExamen').modal('show');

        });

        if (parseInt(Nsesion) !== 6) {

            $('#aNotas').addClass('hide');
            $('#btnFinalizarSesion').addClass('hide');
            $('input[type="text"], textarea').attr('readonly', 'readonly');
        }

    });

</script>