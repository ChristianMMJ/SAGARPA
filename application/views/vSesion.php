<!--MODALES-->
<div id="mdlNuevo" class="modal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Nuevo Registro</h4>
            </div>

            <form id="frmNuevo">
                <div class="modal-body">
                    <fieldset>
                        <div class="col-6 col-md-6">
                            <div class="form-group label-static">
                                <label for="Usuario" class="control-label">Usuario*</label>    
                                <input type="text" class="form-control" id="Usuario" name="Usuario" required >
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="form-group label-static">
                                <label for="Contrasena" class="control-label">Contraseña*</label>    
                                <input type="password" class="form-control" id="Contrasena" name="Contrasena" required>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group label-static">
                                <label for="Nombre" class="control-label">Nombre*</label>
                                <input type="text" id="Nombre" name="Nombre" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group label-static">
                                <label for="Apellidos" class="control-label">Apellidos*</label>
                                <input type="text" id="Apellidos" name="Apellidos" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="" class="control-label">Estado*</label>
                                <select id="Estado" name="Estado" class="form-control" required="">
                                    <option value=""></option>
                                    <option value="Aguascalientes">Aguascalientes</option>
                                    <option value="Baja California">Baja California </option>
                                    <option value="Baja California Sur">Baja California Sur </option>
                                    <option value="Campeche">Campeche </option>
                                    <option value="Chiapas">Chiapas </option>
                                    <option value="Chihuahua">Chihuahua </option>
                                    <option value="Coahuila">Coahuila </option>
                                    <option value="Colima">Colima </option>
                                    <option value="Distrito Federal">Distrito Federal</option>
                                    <option value="Durango">Durango </option>
                                    <option value="Estado de México">Estado de México </option>
                                    <option value="Guanajuato">Guanajuato </option>
                                    <option value="Guerrero">Guerrero </option>
                                    <option value="Hidalgo">Hidalgo </option>
                                    <option value="Jalisco">Jalisco </option>
                                    <option value="Michoacán">Michoacán </option>
                                    <option value="Morelos">Morelos </option>
                                    <option value="Nayarit">Nayarit </option>
                                    <option value="Nuevo León">Nuevo León </option>
                                    <option value="Oaxaca">Oaxaca </option>
                                    <option value="Puebla">Puebla </option>
                                    <option value="Querétaro">Querétaro </option>
                                    <option value="Quintana Roo">Quintana Roo </option>
                                    <option value="San Luis Potosí">San Luis Potosí </option>
                                    <option value="Sinaloa">Sinaloa </option>
                                    <option value="Sonora">Sonora </option>
                                    <option value="Tabasco">Tabasco </option>
                                    <option value="Tamaulipas">Tamaulipas </option>
                                    <option value="Tlaxcala">Tlaxcala </option>
                                    <option value="Veracruz">Veracruz </option>
                                    <option value="Yucatán">Yucatán </option>
                                    <option value="Zacatecas">Zacatecas</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="Municipio" class="control-label">Municipio*</label>
                                <input type="text" id="Municipio" name="Municipio" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-6 col-md-6">
                            <div class="form-group label-static">
                                <label for="Genero" class="control-label">Género</label>
                                <select id="Genero" name="Genero" class="form-control" >
                                    <option value=""></option>
                                    <option value="Hombre">Hombre</option>
                                    <option value="Mujer">Mujer</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 hide">
                            <input  type="text" id="Registro" name="Registro">
                        </div>
                        <div class="col-md-6">
                            <div class="form-group label-static">
                                <label for="Telefonos" class="control-label">Edad*</label>
                                <input min="18" max="90" maxlength="2" minlength="2" type="number" id="Edad" name="Edad" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group label-static">
                                <label for="Telefonos" class="control-label">Teléfono*</label>
                                <input type="tel" id="Telefonos" name="Telefonos" class="form-control" placeholder="" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group label-static">
                                <label for="Ocupacion" class="control-label">Ocupación*</label>
                                <input type="tel" id="Ocupacion" name="Ocupacion" class="form-control" placeholder="" required>
                            </div>
                        </div>

                    </fieldset>
                    <div class="col-md-12">
                        <br>
                        <h6>Los campos con * son obligatorios</h6>    
                    </div>
                </div>
            </form>

            <div class="modal-footer">
                <button type="button" class="btn btn-raised btn-default" data-dismiss="modal">CANCELAR</button>
                <button type="button" class="btn btn-raised btn-primary" id="btnGuardar">GUARDAR</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div id="mdlOlvideContrasena" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Olvidé Contraseña</h4>
        </div>
        <div class="modal-body">
            <form id="frmEditarContrasena">
                Ingresa el correo con el que accesas a la aplicación:
                <div class="col-md-12">
                    <br>
                </div>
                <div class=" col-6 col-md-12">
                    <input type="email" id="ocUsuario" name="ocUsuario"  class="form-control" required="" placeholder="" >
                </div>
                <div class="col-md-12">
                    <br>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnEnviar">ENVIAR</button>
        </div>
    </div>
</div>

<div id="mdlEnviado" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Mensaje enviado con éxito</h4>
        </div>
        <div class="modal-body">
            Se ha enviado la contraseña al correo especificado. <br>
            En caso de no ver el correo, favor de revisar la bandeja de SPAM.
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal" >ACEPTAR</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="Absolute-Center is-Responsive panel">

            <center>
                <img src="<?php print base_url(); ?>img/logoCliente.jpg" width="200">
                <p>Plataforma de Capacitación para el Emprendimiento
                    en el Sector Productivo Agroalimentario</p>
            </center>
            <form id="frmIngresar" class="form-horizontal">
                <div class="form-group">
                    <input type="email" class="form-control" id="Usuario" name="Usuario" placeholder="Email*" >
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" id="Contrasena" name="Contrasena" placeholder="Contraseña*">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" placeholder="No soy un robot" id="chkRobot" name="chkRobot"> No soy un robot
                    </label>
                </div>
                <div align="right">
                    <button id="btnRegistrarUsuario" type="button"  class="btn btn-raised btn-default">Registro</button>
                    <button id="btnIngresar" type="button" class="btn btn-raised btn-primary">INGRESAR</button>

                    <hr>
                </div>
                <div class=" dt-buttons" align="left">

                    <button id="btnOlvidasteContrasena" type="button"  class="btn btn-default">Olvidaste tu contraseña?</button>

                </div>
            </form>
        </div>
    </div>
</div>

<script>
    var master_url = base_url + "CtrlSesion/";
    var btnResetear = $("#btnResetear");
    var btnIngresar = $("#btnIngresar");
    var Usuario = $("#Usuario");
    var Contrasena = $("#Contrasena");
    var chkRobot = $("#chkRobot");

    var mdlEnviado = $("#mdlEnviado");
    var mdlOlvideContrasena = $("#mdlOlvideContrasena");
    var btnEnviar = $("#btnEnviar");
    var btnOlvidasteContrasena = $("#btnOlvidasteContrasena");

    var mdlNuevo = $("#mdlNuevo");
    var btnGuardar = $("#btnGuardar");
    var btnRegistrarUsuario = $("#btnRegistrarUsuario");
    var currentDate = new Date();

    $(document).ready(function () {

        btnGuardar.on("click", function () {
            $.validator.setDefaults({
                ignore: []
            });
            $('#frmNuevo').validate({
                errorElement: 'span',
                errorClass: 'help-block',
                rules: {
                    Usuario: 'required',
                    Contrasena: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').addClass('has-error');
                },
                unhighlight: function (element, errorClass, validClass) {
                    $(element).closest('.form-group').removeClass('has-error');
                }
            });
            //Regresa si es valido para los select2
            $('select').on('change', function () {
                $(this).valid();
            });
            //Si es verdadero que hacer
            if ($('#frmNuevo').valid()) {
                var frm = new FormData(mdlNuevo.find("#frmNuevo")[0]);
                frm.append('Estatus', 'Inactivo');




                HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
                $.ajax({
                    url: master_url + 'onRegistro',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {


                    if (parseInt(data) === 1) {
                        window.location.href = master_url + 'onRegistroExitoso';
                        mdlNuevo.modal('hide');
                        HoldOn.close();
                    } else if (parseInt(data) === 0) {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'OCURRIÓ UN ERROR, EL CORREO NO FUE ENVIADO', 'danger');
                        HoldOn.close();
                    } else if (parseInt(data) === 2) {
                        onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EL REGISTRO NO SE COMPLETO CORRECTAMENTE, VERIFICA LA INFORMACIÓN', 'danger');
                        HoldOn.close();
                    }



                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {

                });
            }

        });
        btnRegistrarUsuario.on("click", function () {
            mdlNuevo.find("input").val("");
            mdlNuevo.find("textarea").val("");
            mdlNuevo.find("select").select2("val", "");
            mdlNuevo.find("#Registro").datepicker("setDate", currentDate);
            mdlNuevo.modal('show');
        });
        btnIngresar.click(function () {
            //Agregar al if si se quiere poner el check --- && chkRobot.is(':checked')
            if (Usuario.val() !== '' && Contrasena.val() !== '' && chkRobot.is(':checked')) {
                HoldOn.open({
                    theme: 'sk-bounce',
                    message: 'ESPERE...'
                });
                setTimeout(function () {
                    var frm = $("#frmIngresar");
                    $.ajax({
                        url: master_url + "onIngreso",
                        type: "POST",
                        data: {
                            USUARIO: frm.find("#Usuario").val(),
                            CONTRASENA: frm.find("#Contrasena").val()
                        }
                    }).done(function (data, x, jq) {
                        if (parseInt(data) === 1) {
                            location.reload(true);
                        } else {
                            onNotify('<span class="fa fa-exclamation fa-lg"></span>', data, 'danger');
                        }
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });
                }, 1000);
            } else {
            }
        });
        btnOlvidasteContrasena.on("click", function () {
            mdlOlvideContrasena.modal('show');
            $("#ocUsuario").val("");

            btnEnviar.on("click", function () {

                if ($("#ocUsuario").val() !== '') {
                    HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
                    $.ajax({
                        url: master_url + "onSendMail",
                        type: "POST",
                        data: {
                            USUARIO: $("#ocUsuario").val()
                        }
                    }).done(function (data, x, jq) {
                        console.log(data);
                        if (parseInt(data) === 1) {
                            mdlOlvideContrasena.modal('hide');
                            mdlEnviado.modal('show');
                        } else if (parseInt(data) === 0) {
                            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'OCURRIÓ UN ERROR, EL CORREO NO FUE ENVIADO', 'danger');
                        } else if (parseInt(data) === 2) {
                            onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'EL USUARIO NO EXISTE, VERIFICA LA INFORMACIÓN', 'danger');
                        }
                    }).fail(function (x, y, z) {
                        console.log(x, y, z);
                    }).always(function () {
                        HoldOn.close();
                    });

                } else {
                    onNotify('<span class="fa fa-exclamation fa-lg"></span>', 'DEBES INGRESAR EL CORREO DE USUARIO', 'danger');
                }

            });

        });

    });
</script>

