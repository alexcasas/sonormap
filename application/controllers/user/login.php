<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
*
*
* Controlador de logeo de los usuarios;
* primera puerta de seguridad.
* @Autor Maximiliano - "mxml13
*
*
*
*/

class Login extends CI_Controller {
	
	public function __construct()
	{
   parent::__construct();
	//Do your magic here
   $this->load->library('session');
   $this->load->model('login_model');
         //$this->place=$this->session->flashdata('place');
	}

	public function index()
	{
    $headre="";
    $navegation="";
    $section="";
    $aside="" ;
    $footer="";
       if($this->session->userdata('fallido')){ $aside.=$this->session->userdata('fallido') ;}
     //cargamos los helpers y librerias para los formularios
     $this->load->helper(array('form'));

     $this->load->library('form_validation');
     //reglas para el formulario
     $this->form_validation->set_rules('usr_id', 'Tu ID','required');
     $this->form_validation->set_rules('password', 'Password', 'required');
    //evaluamos la funcion run().
     if ($this->form_validation->run() == FALSE)
        { 
          $men=array('mensaje'=>validation_errors());
          // guardamos las partes del html en variables.
          $header=$this->load->view("spare_part/header_free",'',TRUE);
          $navegation=$this->load->view("spare_part/nav_view",'',TRUE);
          $section=$this->load->view('spare_part/form/login_view',$men, TRUE);
          $aside.='';
          $footer=$this->load->view("spare_part/footer_view",'',TRUE);
           
           $data=array( "metaInfo"=>"",
          					    "header"=>$header,
          					    "navegation"=>$navegation,
          					    "section"=>$section,
          					    "aside"=>$aside,//aqui un no eres usuario?.
          					    "footer"=>$footer
					    ); 

     	   $this->load->view('base_html',$data);
        }
        else
        { 
        	//aqui compruebo entradas., No antes ya las compruebo
          $loging = array(
        	  'usr'=>  $this->input->post('usr_id'),
        	  'pass'=> md5($this->input->post('password'))
              );
         $res=$this->login_model->checkin($loging);

         if ($res->num_rows()>0) 
         {
           $dts=$res->row();
           $hoy=time();

        	 $this->session->set_userdata('autorizado','1');
        	 $this->session->set_userdata('id_user',$dts->alias_usuario);
       	  // $this->session->set_userdata('function_user',$dts->member_role);
      	
           redirect('inici');
   
       }else
       {//si da un error lo guardaremos en la cokie
         if($this->session->userdata('fallido'))
         {
            $intento=$this->session->userdata('fallido');
            $this->session->set_userdata('fallido',$intento+1);
         }else
         {
            $this->session->set_userdata('fallido',1);
         }
        // AQuí debería ir a una página de solo login y un reset pass con inscribite.
 		 redirect('user/login');
        // echo $this->session->userdata('fallido');
    	 }
  	 }   
	}
   
  public function out()
      {
        # code...
        $this->session->sess_destroy();
        redirect('inici');
      }
}

/* End of file login.php */
/* Location: ./application/controllers/user/login.php */
