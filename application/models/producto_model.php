<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
class Producto_model extends CI_Model{
		
	/**
    * Constructor de la clase
    */
    public function __construct() {
        parent::__construct();
    }

    /**
    * Retorna todos los productos
    */
    function get_productos()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Retorna todas las bicicletas
    */
    function get_bicicletas()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'id_categoria' => '1'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Retorna todos los scooters
    */
    function get_scooters()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'NO', 'id_categoria' => '2'));
        
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    /**
    * Inserta un producto
    */
    public function add_producto($data){
        $this->db->insert('productos', $data);
    }

    /**
    * Retorna todos los datos de un producto
    */
    function edit_producto($id_producto){

        $query = $this->db->get_where('productos', array('id_producto' => $id_producto),1);
        if($query->num_rows()!=0) {
            return $query;
        } else {
            return FALSE;
        }    
    }

    /**
    * Actualiza los datos de un producto
    */
    function update_producto($id, $data){
        $this->db->where('id_producto', $id);
        $query = $this->db->update('productos', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
    * Eliminación y activación logica de un producto
    */
    function estado_producto($id_producto, $data){
        $this->db->where('id_producto', $id_producto);
        $query = $this->db->update('productos', $data);
        if($query) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    /**
    * Retorna todos los productos inactivos
    */
    function not_active_productos()
    {
        $query = $this->db->get_where('productos', array('eliminado' => 'SI'));
        if($query->num_rows()>0) {
            return $query;
        } else {
            return FALSE;
        }        
    }

    function busqueda($data){

        $this->db->select('*');
        $this->db->from('productos');
        $this->db->like('marca', "$data");
        $this->db->or_like('modelo', "$data");
        $this->db->or_like('descripcion', "$data");
        if($data == 'bicicleta'){
            $this->db->or_like('id_categoria', 1);
        }elseif($data == 'scooter'){
            $this->db->or_like('id_categoria', 2);
        }

        $query = $this->db->get();

        if($query->num_rows() > 0) {
            return $query;
        } else {
            return FALSE;
        }
    }
} 