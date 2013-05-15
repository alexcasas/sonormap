<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 15-05-2013
 * 
 * Controlador que comprueba que 
 * el titulo no este repetido.
 *
 * @autor Maximiliano Fernandez - @ maxm13.
 *
 * 
 */
class Check_title extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
	}
	public function index()
	{   $this->load->model('list_model');
		$title=$this->input->post('titulo');
		$resp= $this->list_model->check_title($title);
		$obj=$resp->result();
		if($resp->num_rows()==0)
		{
          $this->load->view('spare_part/form/select_map_point', '', FALSE);
		}
	}

}

/* End of file check_title.php */
/* Location: ./application/controllers/list/check_title.php */