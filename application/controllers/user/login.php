<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*
*
* Controlador de logeo de los usuarios;
*primera puerta de sguridad.
*
*
*
*/

class Login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		 $this->load->helper('url');
         $this->load->library('session');
       //  $this->load->model('login_model');
         $this->place=$this->session->flashdata('place');

	}

	public function index()
	{

	//cargamos los helpers y librerias para los formularios
	       $this->load->helper(array('form'));

	       $this->load->library('form_validation');
	       //reglas para el formulario
	       $this->form_validation->set_rules('user_id', 'Tu ID','required');
	       $this->form_validation->set_rules('pass_value', 'Password', 'required');
	      //evaluamos la funcion run().
	       if ($this->form_validation->run() == FALSE)
        { 
        //si da un error lo guardaremos en la cokie
            
           $contenido=validation_errors();
           $contenido.=$this->load->view('spare_part/login_view','', TRUE);
           
           $data=array("metaInfo"=>"",
					    "header"=>$this->load->view("spare_part/header_login",'',TRUE),
					    "vavigation"=>$this->load->view("spare_part/nav_view",'',TRUE),
					    "section"=>$contenido,
					    "aside"=>"",//aqui un no eres usuario?.
					    "footer"=>$this->load->view("spare_part/footer_view",'',TRUE)
					    ); 

     	   $this->load->view('base_html',$data);
        }
        else
        { 
        	//aqui compruebo entradas., No antes ya las compruebo
        	  $member=  $this->input->post('user_id');
        	  $clave= $this->input->post('pass_value');
           //   $res=$this->login_model->checkin();

         if ($res->num_rows()>0) 
         {
	           $dts=$res->row();
	           $hoy=time();
          	   $this->session->set_userdata('autorizado','true');
          	   $this->session->set_userdata('id_user',$dts->member_id);
         	   $this->session->set_userdata('function_user',$dts->member_role);
        	
                redirect($this->place);
   
       }else
       {
         if($this->session->userdata('fallido'))
         {
            $intento=$this->session->userdata('fallido');
            $this->session->set_userdata('fallido',$intento+1);
         }else
         {
            $this->session->set_userdata('fallido',1);
         }
        // AQuí debería ir a una pagina de solo login y un reset pass con inscribite.
 		 redirect('inici');
    	 }
  	 }   
	}
}

/* End of file login.php */
/* Location: ./application/controllers/user/login.php */
