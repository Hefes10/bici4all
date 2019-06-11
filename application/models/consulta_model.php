<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class consulta_model extends CI_Model{

  /**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }

    /**
    * Retorna todas las consultas
    */
    function get_consultas()
    {
        $query = $this->db->get_where('consultas',array('eliminado' => 'NO'));

        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }
    public function add_consulta($data){
        $this->db->insert('consultas', $data);
    }

    function update_consulta($id, $data){
        $this->db->where('id', $id);
        $query = $this->db->update('consultas', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function not_active_consultas()
    {
        $query = $this->db->get_where('consultas', array('eliminado' => 'SI'));
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }
}