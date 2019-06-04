<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Ventas_model extends CI_Model{

	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }

		
	function get_ventas()
	{
		//$this->db->select('id, nombre, apellido, username');
        //$query = $this->db->get_where('ventas_cabecera');
        $this->db->select('v.*,u.*');
        $this->db->from('ventas_cabecera v');
        $this->db->join('usuarios u', 'v.id_usuario = u.id_usuario');

        $query = $this->db->get();

		if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }
}