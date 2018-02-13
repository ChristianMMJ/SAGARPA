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
<!--MODAL VER VIDEO-->
<div id="mdlVideoIntro" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog  modal-content ">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title">Introduccion</h4>
        </div>
        <div class="modal-body">

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
                       <a href="<?php print base_url('CtrlCurso') ?>" type="button" class="btn btn-raised btn-primary pull-right" id="btnEntrar">ENTRAR</a>
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
<!--SCRIPT-->
<SCRIPT>
    var master_url = base_url + 'CtrlCurso/';
    var idUsuario = "<?php echo $this->session->userdata('ID'); ?>";
    
    $(document).ready(function () {
        
        $('#btnIntro').on('click', function () {
            $('#mdlIntroduccion').modal('show');
        });
        $('#btnVerVideo').on('click', function () {
            $('#mdlVideoIntro').modal('show');
        });
        $('#btnContenido').on('click', function () {
            $('#mdlContenido').modal('show');
        });
    });
    
    


    




</SCRIPT>