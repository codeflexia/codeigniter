<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Clientes extends CI_Controller 
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('neptuno');
		$this->load->library('ion_auth');
		if ($this->ion_auth->logged_in() === FALSE)
		{
			redirect('auth/login');
		}
	}

	public function index()
	{
		$data['clientes'] = $this->neptuno->get_clients();
		$data['title'] = 'Listado Clientes';
		$this->load->view('/clientes/cabecera',$data);
		$this->load->view('/clientes/listado_clientes',$data);
		$this->load->view('/clientes/pie');
	}

	public function pedido()
	{
		$this->load->helper('url');
		$idCliente = $this->uri->segment(3);
		$data['pedidos'] = $this->neptuno->get_pedidos($idCliente);
		$data['title'] = 'listado pedidos';
		$this->load->view('/clientes/cabecera',$data);
		$this->load->view('/clientes/listado_pedidos',$data);
		$this->load->view('/clientes/pie');
	}

	public function detalle()
	{
		$this->load->helper('url');
		$idPedido = $this->uri->segment(3);
		$data['title'] = 'listado detalles';
		$data['detalles'] = $this->neptuno->get_detalles($idPedido);
		$this->load->view('/clientes/cabecera',$data);
		$this->load->view('/clientes/listado_detalles',$data);
		$this->load->view('/clientes/pie');
	}
}