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
    
    public function getSesionesActivasByUsuario() {
        try {
            extract($this->input->post());
            $data = $this->sesion_model->getSesionesActivasByUsuario();
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

}
