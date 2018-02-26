<!--Confirmacion-->
<div id="mdlConfirmar" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Confirmación</h4>
        </div>
        <div class="modal-body">Deseas terminar la encuensta?</div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" id="btnCancelarTerminar" >CANCELAR</button>
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
            <h4 class="modal-title modal-titleFull">Encuesta de Percepción</h4>
        </div>
        <div class="modal-body modal-bodyFull">
            <form id="frmCuestionario">
                <div class="col-12 col-md-12">
                    <p>¿Cómo considera que ha sido la estructura del curso-taller?</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="1" >1)    Excelente</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="2" >2)    Muy Bueno</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="3" >3)    Bueno</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="4" >4)    Regular</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Uno"  value="5" >5)    Malo</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>¿Cómo considera que ha sido el nivel de los contenidos?</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Dos"  value="1" >1)    Excelente</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Dos"  value="2" >2)    Muy Bueno</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Dos"  value="3" >3)    Bueno</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Dos"  value="4" >4)    Regular</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Dos"  value="5" >5)    Malo</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>¿Al terminar este curso-taller considera que ha mejorado su conocimiento acerca de la creación de agronegocios?.</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Tres"  value="1" >1)   Totalmente de acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Tres"  value="2" >2)   Muy de acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Tres"  value="3" >3)   De acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Tres"  value="4" >4)   En desacuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Tres"  value="5" >5)   Muy en desacuerdo</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <p>¿El curso-taller ha incrementado su interés por desarrollar un agronegocio?</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Cuatro"  value="1" >1)   Totalmente de acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cuatro"  value="2" >2)   Muy de acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cuatro"  value="3" >3)   De acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cuatro"  value="4" >4)   En desacuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cuatro"  value="5" >5)   Muy en desacuerdo</label>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-12">
                    <p>¿Considera que le será de utilidad la información proporcionada para la creación de su negocio?</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Cinco"  value="1" >1)   Totalmente de acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cinco"  value="2" >2)   Muy de acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cinco"  value="3" >3)   De acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cinco"  value="4" >4)   En desacuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Cinco"  value="5" >5)   Muy en desacuerdo</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>¿Cómo considera que han sido los formatos utilizados para que usted describiera su proyecto?</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Seis"  value="1" >1)    Excelente</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Seis"  value="2" >2)    Muy Bueno</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Seis"  value="3" >3)    Bueno</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Seis"  value="4" >4)    Regular</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Seis"  value="5" >5)    Malo</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>¿Cómo considera que ha sido la duración del curso-taller?</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Siete"  value="1" >1)    Excelente</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Siete"  value="2" >2)    Muy Bueno</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Siete"  value="3" >3)    Bueno</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Siete"  value="4" >4)    Regular</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Siete"  value="5" >5)    Malo</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>¿Considera que la funcionalidad de la plataforma del curso-taller en línea ha sido adecuada?</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Ocho"  value="1" >1)   Totalmente de acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Ocho"  value="2" >2)   Muy de acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Ocho"  value="3" >3)   De acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Ocho"  value="4" >4)   En desacuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Ocho"  value="5" >5)   Muy en desacuerdo</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>¿Recomendaría este curso-taller a un amigo o conocido?</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Nueve"  value="1" >1)   Totalmente de acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Nueve"  value="2" >2)   Muy de acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Nueve"  value="3" >3)   De acuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Nueve"  value="4" >4)   En desacuerdo</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Nueve"  value="5" >5)   Muy en desacuerdo</label>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12">
                    <p>¿En general cómo considera que ha sido su experiencia al tomar este curso-taller?</p>
                    <div class="form-group label-static ">
                        <div class="radio">
                            <label><input type="radio" name="Diez"  value="1" >1)    Excelente</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Diez"  value="2" >2)    Muy Bueno</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Diez"  value="3" >3)    Bueno</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Diez"  value="4" >4)    Regular</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="Diez"  value="5" >5)    Malo</label>
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
<div id="pnlContenidoSesionCursoTres" class="animated fadeInLeft">  
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
                    <center><h4>POR ÚLTIMO, LO INVITAMOS A RESPONDER UNA ENCUESTA DE PERCEPCIÓN, DONDE CALIFICARÁS EL CONTENIDO DEL CURSO</h4></center>
                    <button id="btnIniciarExamen" type="button" class="btn btn-raised btn-primary" data-dismiss="modal">INICIAR ENCUESTA</button>
                </fieldset>
            </div>
        </div>
    </div>

</div>

<script>
    var Nsesion = getCookie("sesion");
    var master_url = base_url + 'CtrlContenidoSesionCursoDoce/';
    var master_urlCurso = base_url + 'CtrlCurso/';
    var idUsuario = "<?php echo $this->session->userdata('ID'); ?>";

    $(document).ready(function () {
        getObservacionesXSesion();

        $('#btnCancelarTerminar').on('click', function () {
            $('#mdlConfirmar').modal('hide');
            $('#mdlCapturarExamen').modal('show');


        });

        $('#btnTerminar').on('click', function () {
            //Validar calificación
            //Aquí se hace el update de estatus a finalizados de las primeras 3 sesiones y se inserta la 4ta
            $('#mdlConfirmar').modal('hide');



            var frm = new FormData($("#frmCuestionario")[0]);
            frm.append('Usuario_ID', idUsuario);
            frm.append('NSesion', 12);
            //Inserta otra sesion
            $.ajax({
                url: master_url + 'onAgregar',
                type: "POST",
                cache: false,
                contentType: false,
                processData: false,
                data: frm
            }).done(function (data, x, jq) {
                
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
                HoldOn.close();
            });


            //Modifcar Estatus Anteriores
            $.ajax({
                url: master_urlCurso + 'onModificarEstatusAnteriores',
                type: "POST",
                data: {
                    Sesion: Nsesion
                }
            }).done(function (data, x, jq) {
                document.cookie = "sesion=" + 0 + " ";
                window.location.href = "<?php echo base_url('CtrlCurso/onCursoFinalizado'); ?>";
            }).fail(function (x, y, z) {
                console.log(x, y, z);
            }).always(function () {
            });


        });

        $('#btnTerminarCaptura').on('click', function () {
            $.validator.setDefaults({
                ignore: []
            });
            $('#frmCuestionario').validate({
                errorElement: 'span',
                errorClass: 'help-block',

                rules: {
                    Uno: 'required',
                    Dos: 'required',
                    Tres: 'required',
                    Cuatro: 'required',
                    Cinco: 'required',
                    Seis: 'required',
                    Siete: 'required',
                    Ocho: 'required',
                    Nueve: 'required',
                    Diez: 'required'

                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error has-errorTest');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error has-errorTest');
                }
            });
            //Regresa si es valido para los select2
            $('select').on('change', function () {
                $(this).valid();
            });
            if ($('#frmCuestionario').valid()) {
                $('#mdlCapturarExamen').modal('hide');
                $('#mdlConfirmar').modal('show');

            }

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

        if (parseInt(Nsesion) !== 12) {

            $('#aNotas').addClass('hide');
            $('#btnFinalizarSesion').addClass('hide');
            $('input[type="text"], textarea').attr('readonly', 'readonly');
        }

    });


    function getObservacionesXSesion() {

        $.ajax({
            url: master_urlCurso + 'getObservacionesXSesion',
            type: "POST",
            dataType: "JSON",
            data: {
                Sesion: Nsesion
            }
        }).done(function (data, x, jq) {
            console.log(data);
            $('#Notas').val(data[0].Observaciones);

        }).fail(function (x, y, z) {
            console.log(x, y, z);
        }).always(function () {
        });


    }

</script>