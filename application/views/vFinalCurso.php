<!--NAVEGACION INTERNA-->
<div id="pnlFinalCurso" class="animated fadeInLeft">  

    <div class="col-md-12 dt-buttons" align="right">
        <a href="<?php print base_url(); ?>" type="button" class="btn btn-default">
            <span class="fa fa-home fa-1x"></span><br>IR AL INICIO
        </a>
    </div>

    <div class="col-md-12" align="center">
        <div class="panel panel-default">
            <div class="panel-body">
                <h3>¡GRACIAS POR SU PARTICIPACIÓN!</h3>
                <fieldset>
                    <button id="btnExpedirDiploma" onclick="onReporteDiploma();" type="button" class="btn btn-raised btn-primary" data-dismiss="modal">EXPEDIR CONSTANCIA</button>
                </fieldset>
            </div>
        </div>
    </div>

</div>
<script>

    var master_url = base_url + 'CtrlCurso/';

    function onReporteDiploma() {

        HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
        $.ajax({
            url: master_url + 'onReporteDiploma',
            type: "POST"
        }).done(function (data, x, jq) {
            if (data.length > 0) {
                onNotify('<span class="fa fa-check fa-lg"></span>', 'DIPLOMA GENERADO', 'success');
                window.open(data, '_blank');
            } else {
                onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'NO EXISTEN DATOS PARA EL DIPLOMA', 'danger');
            }
        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
            HoldOn.close();
        });
    }
</script>