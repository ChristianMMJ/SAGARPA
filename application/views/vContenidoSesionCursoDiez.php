<!--NAVEGACION INTERNA-->
<div id="pnlContenidoSesionCursoDiez" class="animated fadeInLeft">  

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
                    <button id="btnFinalizarSesion" type="button" class="btn btn-raised btn-primary" data-dismiss="modal">FINALIZAR TEMA</button>
                </fieldset>
            </div>
        </div>
    </div>

</div>

<script>
    var Nsesion = getCookie("sesion");
    var master_url = base_url + 'CtrlContenidoSesionCursoDiez/';
    var master_urlCurso = base_url + 'CtrlCurso/';
    var idUsuario = "<?php echo $this->session->userdata('ID'); ?>";

    $(document).ready(function () {

        if (parseInt(Nsesion) !== 10) {
            
            $('#aNotas').addClass('hide');
            $('#btnFinalizarSesion').addClass('hide');
            $('input[type="text"], textarea').attr('readonly', 'readonly');
        } else {

        }
        $('#btnFinalizarSesion').on('click', function () {
           
            HoldOn.open({
                theme: "sk-bounce",
                message: "CARGANDO DATOS..."
            });

            $.ajax({
                url: master_urlCurso + 'onModificar',
                type: "POST",
                data: {
                    Sesion: Nsesion,
                    Observaciones: $("#Notas").val()
                }
            }).done(function (data, x, jq) {
                console.log(data);
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
            });
            
            
            var frm = new FormData();
            frm.append('Usuario_ID', idUsuario);
            frm.append('NSesion', 11);
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
                document.cookie = "sesion=" + 11 + " ";
                window.location.href = "<?php echo base_url('CtrlCurso'); ?>";
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });
        });
    });

</script>