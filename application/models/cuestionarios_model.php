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
            $this->db->insert("encuesta", $array);
            //print $str = $this->db->last_query();
            $query = $this->db->query('SELECT LAST_INSERT_ID()');
            $row = $query->row_array();
            $LastIdInserted = $row['LAST_INSERT_ID()'];
            return $LastIdInserted;
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }
    
    public function onEliminar($Usuario_ID) {
        try {

            $this->db->where('Usuario_ID', $Usuario_ID);
            $this->db->delete("encuesta");
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
    }




  

}
