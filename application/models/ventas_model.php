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
    
    function get_detalle()
	{
		$this->db->select('d.*,v.*,p.*');
        $this->db->from('ventas_detalle d');
        $this->db->join('ventas_cabecera v', 'd.id_venta = v.id_venta');
        $this->db->join('productos p', 'd.id_producto = p.id_producto');

        $query = $this->db->get();

		if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }
    }
}