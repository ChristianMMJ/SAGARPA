<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class cuestionarios_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }
    
     public function onAgregar($array) {
        try {
            $this->db->insert("cuestionariosesionusuario", $array);
            //print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar($Usuario_ID, $Sesion, $DATA) {
        try {
            $this->db->where('Usuario_ID', $this->session->userdata('ID'));
            $this->db->where('NSesion', $Sesion);
            $this->db->update("cuestionariosesionusuario", $DATA);
            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onEliminar($Sesion) {
        try {
            $this->db->where('Usuario_ID', $this->session->userdata('ID'));
            $this->db->where('NSesion', $Sesion);
            $this->db->update("cuestionariosesionusuario");
//            print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function getCuestionarioByUsuarioBySesion($Sesion) {
        try {
            $this->db->select('*', false);
            $this->db->from('cuestionariosesionusuario');
            $this->db->where('Usuario_ID', $this->session->userdata('ID'));
            $this->db->where('NSesion', $Sesion);
            //$this->db->where_in('U.Estatus', 'Activo');
            $query = $this->db->get();
            /*
             * FOR DEBUG ONLY
             */
            $str = $this->db->last_query();
//        print $str;
            $data = $query->result();
            return $data;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

}
