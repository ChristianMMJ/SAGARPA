<!--MODAL INTRODUCCION-->
<div id="mdlIntroduccion" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Objetivo</h4>
        </div>
        <div class="modal-body">
            <p style="text-align: justify;">
                El curso de capacitación para emprendedores del sector agroalimentario 
            tiene como objetivo brindar los conocimientos y herramientas necesarias para la 
            formalización del proceso de desarrollo de un proyecto productivo, 
            orientando en los procedimientos y requerimientos relevantes 
            para una adecuada gestión del negocio, proporcionando además las bases técnicas y 
            estrategias que permitirán generar las ventajas competitivas para insertarse 
            de manera adecuada en el mercado de los agronegocios.     
            </p>
            <hr>
            <h4>Proceso General </h4>
            <p style="text-align: justify;">
                El curso tiene una duración aproximada de 40 horas en total, 
                está conformado en cuatro etapas, las cuales a su vez se dividen 
                en 12 sesiones en total (3 sesiones por etapa).
            </p>
            <p style="text-align: justify;">
                El usuario contará con un periodo máximo de cuatro semanas para 
                completar el curso (se estima un aproximado de 10 horas por semana 
                (2 horas en plataforma – 8 horas revisión de información complementaria).
            </p>
            <p style="text-align: justify;">
                Cada una de las cuatro etapas cuenta con un apartado de evaluación, 
                que consta de 10 preguntas relacionadas con el contenido revisado.
            </p>
            <p style="text-align: justify;">
                Sólo se emitirá constancia a los usuarios que hayan completado el 
                cien por ciento de las sesiones y hayan logrado obtener una 
                calificación aprobatoria mínima de 8.0 en los exámenes. 
            </p>
            <br>
            <hr>
            <h3>¡Buena Suerte!</h3>
            
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">CERRAR</button>
        </div>
    </div>
</div>
<!--MODAL VER CONTENIDO-->
<div id="mdlContenido" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Contenido del curso</h4>
        </div>
        <div class="modal-body">
       
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-raised btn-primary" data-dismiss="modal">CERRAR</button>
        </div>
    </div>
</div>
<!--MODAL CAMBIAR CONTRASENA-->
<div id="mdlCambiarContrasena" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Cambiar Contraseña</h4>
        </div>
        <div class="modal-body">
            <form id="frmEditarContrasena">
                Ingresa la nueva contraseña
                <div class="col-md-12">
                    <br>
                </div>
                <input type="text" id="ID" name="ID" class="form-control hide" >
                <div class=" col-6 col-md-12">
                    <label for="">Usuario</label>
                    <input type="text" id="Usuario" name="Usuario"  class="form-control" readonly="" placeholder="" >
                </div>
                <div class=" col-6 col-md-12">
                    <label for="">Nueva Contraseña*</label>
                    <input type="password" id="Contrasena" name="Contrasena"  class="form-control"  placeholder="" >
                </div>
                <div class="col-md-12">
                    <br>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal" >CANCELAR</button>
            <button type="button" class="btn btn-raised btn-primary" id="btnModificar">ACEPTAR</button>
        </div>
    </div>
</div>
<!--NAVEGACION PRNCIPAL-->
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php print base_url(); ?>">
                <img src="<?php print base_url(); ?>img/Logo.png" width="180px">
            </a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse navbar-responsive-collapse" id="">
            <ul class="nav navbar-nav">
            </ul>
            <ul class="nav navbar-nav navbar-right">

                <li class="hide"><a href="<?php print base_url('CtrlUsuario') ?>">Usuarios</a></li>

                <li class="dropdown">
                    <a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        Bienvenido: <?php echo $this->session->userdata('Nombre') . ' ' . $this->session->userdata('Apellidos'); ?>
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li onclick="onCambiarContrasena();"><a href="#" >Cambiar Contraseña</a></li>
                        <li><a href="">Reportar un problema</a></li>
                        <li class="divider"></li>
                        <li><a href="<?php print base_url('CtrlSesion/onSalir'); ?>">Salir</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
<!--NAVEGACION INTERNA-->
<div id="pnlNavegacion" class="animated fadeInLeft">  
<div class="row">
    <div class="col-md-3"> 
        <div class="thumbnail">
            <img src="<?php print base_url(); ?>img/bienvenida.jpg" alt="Bienvenida thumbnail" class="img-responsive"> 
            <div class="caption"> 
                <h3>Mensaje de Bienvenida</h3>
                <p>Curso de capacitación para emprendedores del sector agroalimentario.
                    </p>
                <hr>
                <div class="dt-buttons">
                    <button type="button" class="btn btn-default pull-left" id="btnIntro">INTRODUCCIÓN</button>
                    <button type="button" class="btn btn-raised btn-primary pull-right" id="btnVerVideo">VER VIDEO</button>
                </div>
                <br>
                <br>
                </p> 
            </div>
        </div>
    </div>

    <div class="col-md-4"> 
        <div class="thumbnail"> 
            <img src="<?php print base_url(); ?>img/logo_sagarpa.jpg" alt="Curso thumbnail" class="img-responsive">  
            <div class="caption">  
                <h3>Mi Curso</h3>
                <p>Plataforma virtual para la capacitación en el Sector Productivo Agroalimentario</p>
                <p>
                <hr>
                <div class="dt-buttons">
                    <button type="button" class="btn btn-default pull-left" id="btnContenido">CONTENIDO</button>
                    <button type="button" class="btn btn-raised btn-primary pull-right" id="btnEntrar">ENTRAR</button>
                </div>
                <br>
                <br>
                </p> 
            </div>
        </div>
    </div>

    <div class="col-md-3">

    </div>


    <div class="col-md-2">
        <div class="panel panel-default">
            <div class="panel-body">
                <img src="<?php print base_url(); ?>img/editprofile.png" alt="Curso thumbnail" width="200" class="img-responsive">  
                <div class="caption">
                    <h3>Mi perfil</h3>
                    <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>  
                        <a href="#">Información Personal</a>
                    </p>
                </div>
            </div>
            <table class="table" style="padding: 0; margin: 0;">
                <tr>
                    <td>Nombre</td>
                    <td>Christian Medina Juárez</td>
                </tr>
                <tr>
                    <td>Edad</td>
                    <td>25 Años</td>
                </tr>
                <tr>
                    <td>Genero</td>
                    <td>Hombre</td>
                </tr>
            </table>
            <div class="panel-body">
                <div class="dt-buttons">
                    <button type="button" class="btn btn-raised btn-primary pull-right" id="btnEditar">EDITAR</button>
                </div>
            </div>
        </div>
    </div>

</div>  
</div>




<script>
    //var TipoAcceso = "<?php echo $this->session->userdata('TipoAcceso'); ?>";

    var master_url = base_url + 'CtrlSesion/';
    $(document).ready(function () {
        
        $('#btnIntro').on('click', function(){
            $('#mdlIntroduccion').modal('show');
            
        });
        
        
        $('.dropdown-submenu a.multinivel').on("click", function (e) {
            $(this).next('ul').toggle();
            e.stopPropagation();
            e.preventDefault();
        });
        $('#btnModificar').on("click", function () {
            var frm = new FormData($('#mdlCambiarContrasena').find("#frmEditarContrasena")[0]);
            $.validator.setDefaults({
                ignore: []
            });
            jQuery.validator.messages.required = 'Esta campo es obligatorio';
            jQuery.validator.messages.number = 'Esta campo debe ser numérico';
            jQuery.validator.messages.email = 'Correo no válido';
            $('#frmEditarContrasena').validate({
                errorElement: 'span',
                errorClass: 'errorForms',
                rules: {
                    Contrasena: 'required'
                },
                highlight: function (element, errorClass, validClass) {
                    console.log(element);
                    var elem = $(element);
                    elem.addClass(errorClass);
                },
                unhighlight: function (element, errorClass, validClass) {
                    var elem = $(element);
                    elem.removeClass(errorClass);
                }
            });
            //Si es verdadero que hacer
            if ($('#frmEditarContrasena').valid()) {
                HoldOn.open({theme: 'sk-bounce', message: 'ESPERE...'});
                $.ajax({
                    url: master_url + 'onCambiarContrasena',
                    type: "POST",
                    cache: false,
                    contentType: false,
                    processData: false,
                    data: frm
                }).done(function (data, x, jq) {
                    $('#mdlCambiarContrasena').modal('hide');
                    onNotify('<span class="fa fa-check fa-lg"></span>', 'CONTRASEÑA MODIFICADA EXITOSAMENTE', 'success');
                    onRegistrarAccion('CAMBIO CONTRASEÑA');
                }).fail(function (x, y, z) {
                    console.log(x, y, z);
                }).always(function () {
                    HoldOn.close();
                });
            }
        });
    });
    function onCambiarContrasena() {
        $('#mdlCambiarContrasena').modal('show');
        $("#Contrasena").val("");
        $("#Usuario").val("<?php echo $this->session->userdata('USERNAME'); ?>");
        $("#ID").val("<?php echo $this->session->userdata('ID'); ?>");
    }








</script>