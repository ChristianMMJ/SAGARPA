<?php

header('Access-Control-Allow-Origin: http://app.ayr.mx/');
defined('BASEPATH') OR exit('No direct script access allowed');
require_once APPPATH . "/third_party/fpdf17/fpdf.php";

class CtrlCurso extends CI_Controller {

    public function __construct() {
        parent::__construct();
        date_default_timezone_set('America/Mexico_City');
        $this->load->library('session');
        $this->load->model('usuario_model');
        $this->load->model('sesion_model');
        $this->load->helper('reportes_helper');
        $this->load->helper('file');
    }

    public function index() {
        if (session_status() === 2 && isset($_SESSION["LOGGED"])) {
            $this->load->view('vEncabezado');
            $this->load->view('vNavegacion');
            $this->load->view('vCurso');
            $this->load->view('vFooter');
        } else {
            $this->load->view('vEncabezado');
            $this->load->view('vSesion');
            $this->load->view('vFooter');
        }
    }

    public function onCursoFinalizado() {

        $this->load->view('vEncabezado');
        $this->load->view('vNavegacion');
        $this->load->view('vFinalCurso');
        $this->load->view('vFooter');
    }

    public function getSesionesActivasByUsuario() {
        try {
            extract($this->input->post());
            $data = $this->sesion_model->getSesionesActivasByUsuario();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function getObservacionesXSesion() {
        try {
            extract($this->input->post());
            $data = $this->sesion_model->getObservacionesXSesion($Sesion);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSesionActivaByUsuario() {
        try {
            extract($this->input->post());
            $data = $this->sesion_model->getSesionActivaByUsuario();
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getSesionByUsuariobySesion() {
        try {
            extract($this->input->post());
            $data = $this->sesion_model->getSesionByUsuariobySesion($Sesion);
            print json_encode($data);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onAgregar() {
        try {
            $this->sesion_model->onAgregar($this->input->post());
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar() {
        try {
            extract($this->input->post());
            $DATA = array(
                'Observaciones' => ($Observaciones !== NULL) ? $Observaciones : NULL
            );
            $this->sesion_model->onModificar($Sesion, $DATA);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificarEstatusAnteriores() {
        try {
            extract($this->input->post());

            $this->sesion_model->onModificarEstatusAnteriores($Sesion);
            $this->sesion_model->onModificarCalificacion($Sesion, $Calificacion);
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
     public function onReporteDiploma() {
   
        try {
          
            // Creación del objeto de la clase heredada
            $pdf = new PDF('L', 'mm', array(279/* ANCHO */, 216/* ALTURA */));
            $pdf->AliasNbPages();
            $pdf->AddPage();
            $pdf->SetAutoPageBreak(false, 300);
            $pdf->SetLineWidth(0.1);

            /* ENCABEZADO */
//            $pdf->Image(base_url() . 'uploads/Clientes/16/T1.png', 5, 3, 270);
//            $pdf->Image(base_url() . 'uploads/Clientes/16/T2.png', 5, 170, 270);
            // Arial bold 15
            $pdf->SetFont('Arial', '', 8.5);
            // Título
            // Movernos a la derecha
            $pdf->SetX(5);
            $pdf->SetTextColor(37, 51, 109);
            $pdf->SetFont('Arial', 'B', 9.5);
            /* CUERPO */

            $pdf->SetY(35);
            $pdf->SetX(50);
           // $pdf->Cell(105, 5, utf8_decode($trabajo[0]->NombreSucursal), 0, 1, 'L');
            $pdf->Cell(105, 5, strtoupper(utf8_decode($this->session->userdata('Nombre').' '.$this->session->userdata('Apellidos')))  , 0, 1, 'L');
            $pdf->SetY(45);
            $pdf->SetX(50);
            $pdf->Cell(105, 5, date("d-m-Y"), 0, 1, 'L');
            


            /* FIN CUERPO */
            $path = 'uploads/Reportes/';
            // print $path;
            if (!file_exists($path)) {
                mkdir($path, 0777, true);
            }
            $file_name = "CONSTANCIA IMPRESA " . " " . date("Y-m-d His");
            $url = $path . '/' . $file_name . '.pdf';
            if (delete_files('uploads/Reportes/')) {
                
            }

            $pdf->Output($url);
            print base_url() . $url;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
    
    

}
