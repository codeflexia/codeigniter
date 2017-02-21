<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Neptuno extends CI_Model {
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function get_clients($limites = FALSE)
	{
		if ($limites !== FALSE)
		{
			$this->db->limit($limites['40'],$limiter['1']);
		}
		$query = $this->db->get('cliente');
		return $query->result();
	}

	public function get_pedidos($cliente = FALSE)
	{
		if ($cliente !== FALSE)
		{
			$this->db->where('idCliente',$cliente);
		}
		$query = $this->db->get('pedido');
		return $query->result();
	}

	public function get_detalles($pedido = FALSE)
	{
		if ($pedido !== FALSE) {
			$this->db->where('idPedido',$pedido);
		}
		$query = $this->db->get('detalle_pedido');
		return $query->result();
	}

	public function add_client($cliente)
	{
		$this->db->insert('cliente',$cliente);
	}
}