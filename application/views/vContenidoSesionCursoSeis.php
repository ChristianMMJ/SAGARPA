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
            <h4 class="modal-title modal-titleFull">Evaluación Parcial 2</h4>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmCuestionario">
                <div class="col-12 col-md-12">
                    <p>1.   Son los costos asociados exclusivamente a aquellos insumos que son fijos en el corto plazo.  </p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="a" >a)    Costos variables</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="b" >b)    Costos totales</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="c" >c)    Costos fijos</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>2.   Son los costos asociados con aquellos insumos que pueden cambiar en el corto plazo.</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="a" >a)    Costos variables</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="b" >b)    Costos totales</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="c" >c)    Costos fijos</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>3.   El costo medio, también conocido como costo unitario es:  </p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Tres"  value="a" >a)   Los ingresos de la empresa divididos entre el nivel de producción</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Tres"  value="b" >b)   Los costos totales divididos entre el nivel de producción de la empresa</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Tres"  value="c" >c)   El costo variable dividido entre el nivel de ingresos de la empresa</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <p>4.   El beneficio económico es:</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Cuatro"  value="a" >a) Representa la diferencia entre los costos fijos y los costos variables</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cuatro"  value="b" >b) Representan la diferencia entre los ingresos totales de una empresa y sus costos económicos totales</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cuatro"  value="c" >c) Representa la manera en que el empresario se beneficia de las utilidades que genera</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <p>5.   Representa la cantidad de unidades ‘Q’ a producir y vender, de manera que los ingresos obtenidos cubran en su totalidad los costos incurridos y una utilidad igual a cero.</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Cinco"  value="a" >a)  El beneficio económico</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cinco"  value="b" >b)  El punto de quiebre</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cinco"  value="b" >c)  El punto de equilibrio</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>6.   Es un sistema en el que se integran de manera directa o indirecta los diferentes actores que participan en la comercialización y distribución de un producto o servicio hasta que llega al consumidor final..</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Seis"  value="a" >a)   Cadena de suministro</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Seis"  value="b" >b)   Cadena de valor</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Seis"  value="c" >c)  Ninguno de los anteriores</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>7.   Los costos de la empresa se pueden clasificar principalmente en dos tipos:</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Siete"  value="a" >a)  Costos de material y costos de obra</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Siete"  value="b" >b)  Costos de capital y costos administrativos</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Siete"  value="c" >c)  Costos de fijos y costos variables</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>8.   Representan una condicionante estructural para la viabilidad del negocio, por lo que deben reducirse al máximo cuando no son necesarios:</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Ocho"  value="a" >a)   Costos variables</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Ocho"  value="b" >b)   Costos fijos</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Ocho"  value="c" >c)   Ninguno de los anteriores </label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>9.   Representan los costos relacionados con las transacciones que se desarrollan intrínsecamente en la gestión de la empresa.</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Nueve"  value="a" >a)  Costos integrados</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Nueve"  value="b" >b)  Costos de transacción</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Nueve"  value="c" >c)  Costos asociados</label>
                        </div>

                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>10.  El diseño de las estrategias competitivas para el posicionamiento de la empresa se fundamenta en tres componentes principalmente:</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Diez"  value="a" >a)   Posicionamiento en el mercado, capacidad de los recursos y la legislación aplicable.</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Diez"  value="b" >b)   Los ingresos, los costos y las utilidades</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Diez"  value="c" >c)   Ninguno de los anteriores. </label>
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