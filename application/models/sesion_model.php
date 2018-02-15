<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');

class sesion_model extends CI_Model {

    public function __construct() {
        parent::__construct();
    }

    public function onAgregar($array) {
        try {
            $this->db->insert("sesion", $array);
            //print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    
    
    public function onModificarEstatusAnteriores($Sesion) {
        $DATA = array(
                'Estatus' => 'Finalizado'
            );
        
        try {
            $this->db->where('Usuario_ID', $this->session->userdata('ID'));
            $this->db->where('NSesion <=', $Sesion);
            $this->db->update("sesion",$DATA);
            //print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    public function onModificar($Sesion, $DATA) {
        try {
            $this->db->where('Usuario_ID', $this->session->userdata('ID'));
            $this->db->where('NSesion', $Sesion);
            $this->db->update("sesion", $DATA);
            //print $str = $this->db->last_query();
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }

    
    public function getSesionActivaByUsuario() {
        try {
            $this->db->select('max(NSesion) As NSesion', false);
            $this->db->from('sesion');
            $this->db->where('Usuario_ID', $this->session->userdata('ID'));
            $this->db->where('Estatus', 'Activa');
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
    
    public function getSesionesActivasByUsuario() {
        try {
            $this->db->select('NSesion', false);
            $this->db->from('sesion');
            $this->db->where('Usuario_ID', $this->session->userdata('ID'));
            $this->db->where('Estatus', 'Activa');
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
    
    

    public function getSesionByUsuariobySesion($Sesion) {
        try {
            $this->db->select('*', false);
            $this->db->from('sesion');
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
