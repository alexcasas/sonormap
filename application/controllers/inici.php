<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
*
*
* Controlador de inicio;
* Carga mapa principal de la libreria que sea y muestra puntos.
*
**/
		
		class Inici extends CI_Controller {
              protected $security;
              protected $username;
			function __construct() {
				  parent::__construct();

				$this->load->library('session');
				$this->security=$this->session->userdata('autorizado');;
				$this->username=$this->session->userdata('id_user');;
			}
		
			public function index()
			{
				//variables generales.
				$header="";
				 $navegation="";
				$section="";
				$aside="";
				$footer="";
               	//seguridad
               	if ($this->security>0) {
               		# code...
               		 $name = array('name' =>$this->username , );
               		$header=$this->load->view('spare_part/header_user',$name, TRUE);
               		  $navegation=$this->load->view('spare_part/nav_usr_view','', TRUE);
               	}else{

               		 $header=$this->load->view('spare_part/header_login','', TRUE);
               		  $navegation=$this->load->view('spare_part/nav_view','', TRUE);
               	}
                
                $section=$this->load->view('maps/inici_map_view','', TRUE);
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

			public function out()
			{
				# code...
				$this->session->sess_destroy();
				redirect('inici');
			}
		
		}
		
		/* End of file inici.php */
		/* Location: ./application/controllers/inici.php */		