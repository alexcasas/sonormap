<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registrar extends CI_Controller {

		 protected $security;
         protected $username;

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->library('session');
		$this->security=$this->session->userdata('autorizado');
		$this->username=$this->session->userdata('id_user');

	}
	public function index()
	{
		// Cargamos el ayudante de fecha.
		$this->load->helper('birthday_helper');
		if ($this->security>0) {
			
			 $name = array('name' =>$this->username , );
			$header=$this->load->view('spare_part/header_user',$name, TRUE);
      		$navegation=$this->load->view('spare_part/nav_usr_view','', TRUE);
		}else{
			$header=$this->load->view('spare_part/header_login','', TRUE);
    	    $navegation=$this->load->view('spare_part/nav_view','', TRUE);
		}

		
 		
		$section=$this->load->view('spare_part/form/singup_form','', TRUE);
		$aside="";
        $footer=$this->load->view('spare_part/footer_view','', TRUE);
		//array con el contenido
		$data = array(  'header' =>$header ,
						'section'=>$section,
						'navegation'=>$navegation,
						'aside'=>$aside,
						'footer'=>$footer 
						);
		//monto la pagina segun petición.
		$this->load->view('base_html', $data, FALSE);
	}

}

/* End of file registrar.php */
/* Location: ./application/controllers/registrar.php */
