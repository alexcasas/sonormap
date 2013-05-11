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
				$this->security=0;
				$this->username='test_dummy';
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
		
		}
		
		/* End of file inici.php */
		/* Location: ./application/controllers/inici.php */		