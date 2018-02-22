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
            <h4 class="modal-title modal-titleFull">Evaluación Parcial 3</h4>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmCuestionario">
                <div class="col-12 col-md-12">
                    <p>1.   Los ingresos del negocio por concepto de ventas se determinan:</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="a" >a)    Al multiplicar el nivel de producción por el precio de venta</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="b" >b)    Al dividir los costos totales entre la cantidad de producción</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="c" >c)   Al sumar los costos fijos con los costos variables</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>2.   Se define como el valor de hoy (es decir, el valor actual) de un flujo de efectivo o una serie de flujos de efectivo en el futuro. </p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Dos"  value="a" >a)    Valor futuro</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Dos"  value="b" >b)    Valor presente</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Dos"  value="c" >c)    Valor del tiempo</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>3.   Se define como la cantidad a la que se incrementará un flujo de efectivo o serie de flujos de efectivo en un periodo determinado cuando se capitaliza a una tasa de interés determinada.</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Tres"  value="a" >a)    Valor futuro</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Tres"  value="b" >b)    Valor presente</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Tres"  value="c" >c)    Valor del tiempo</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <p>4.   Ingreso recibido en una inversión más cualquier cambio en el precio de mercado; generalmente se expresa como porcentaje del precio inicial de mercado de la inversión.</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Cuatro"  value="a" >a) Aversión al riesgo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cuatro"  value="b" >b) Rendimiento</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cuatro"  value="c" >c) Rendimiento esperado</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <p>5.   El promedio ponderado de los rendimientos posibles, donde las ponderaciones o pesos son las probabilidades de ocurrencia.</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Cinco"  value="a" >a)  Rendimiento</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cinco"  value="b" >b)  Rendimiento esperado</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cinco"  value="c" >c)  Riesgo</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>6.   Cantidad de dinero que alguien requiere con certidumbre en un momento para sentirse indiferente entre esa cantidad cierta y una cantidad esperada que se recibirá con riesgo en el mismo momento.</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Seis"  value="a" >a)   Equivalente con certidumbre</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Seis"  value="b" >b)   Aversión al riesgo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Seis"  value="c" >c)   Rendimiento</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>7.   Término que se aplica al inversionista que demanda un rendimiento esperado más alto si el riesgo es más alto.</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Siete"  value="a" >a)  Aversión al riesgo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Siete"  value="b" >b)  Amante del riesgo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Siete"  value="c" >c)  Ninguna de las anteriores</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>8.   Variabilidad de los rendimientos con respecto a los esperados. </p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Ocho"  value="a" >a)   Riesgo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Ocho"  value="b" >b)   Incertidumbre</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Ocho"  value="c" >c)   Ninguna de las anteriores</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>9.   Se refiere a las prácticas de higiene y calidad en los procesos productivos del sector agroalimentario.</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Nueve"  value="a" >a)  Inocuidad</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Nueve"  value="b" >b)  Control de calidad</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Nueve"  value="c" >c)  Limpieza</label>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>10.  Son las dependencias encargadas del control de la inocuidad de los productos agroalimentarios en México.</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Diez"  value="a" >a)   Secretaría de economía y Secretaría de Administración tributaria</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Diez"  value="b" >b)   Secretaría de desarrollo social y secretaría de gobernación</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Diez"  value="c" >c)   Secretaría de Salud y Sagarpa  </label>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="modal-footer modal-footerFull">
            <button type="button" class="btn btn-default" data-dismiss="modal">CANCELAR</button>
            <button type="button" id="btnTerminarCaptura" class="btn btn-raised btn-primary">TERMINAR</button>
        </div>
    </div>
</div>


<!--NAVEGACION INTERNA-->
<div id="pnlContenidoSesionCursoNueve" class="animated fadeInLeft">  
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
    var master_url = base_url + 'CtrlContenidoSesionCursoNueve/';
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
            frm.append('NSesion', 10);
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
                document.cookie = "sesion=" + 10 + " ";
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

        if (parseInt(Nsesion) !== 9) {

            $('#aNotas').addClass('hide');
            $('#btnFinalizarSesion').addClass('hide');
            $('input[type="text"], textarea').attr('readonly', 'readonly');
        }

    });

</script>