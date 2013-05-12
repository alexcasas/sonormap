<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registro extends CI_Controller {
     /*
     *
     * Guarda un usuario y envia un mail al admin.
     *
     *
     */
     
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		 $this->load->helper(array('form'));
		   $this->load->library('form_validation');
	}

	
	public function index(){
  
                   //reglas para el formulario
                   $this->form_validation->set_rules('user', 'Nom','required|is_unique[usuario.alias_usuario]');
                   $this->form_validation->set_rules('mail', 'Email', 'required|valid_mail');
                   //$this->form_validation->set_rules('user', 'Nom','required|is_unique[usuario.alias_usuario]');
                  //evaluamos la funcion run().
                   if ($this->form_validation->run() == FALSE)
                   {

                    echo  $contenido=validation_errors();
                   }else{
                   
					$this->load->model('user_model');
                   	$sql_data=$this->input->post('anio')."-".$this->input->post('mes')."-".$this->input->post('dia');
       				 $pass_key=md5($this->input->post('pass'));
         		     $data = array('id' => $this->input->post('user'),
            				      'clave'=>$pass_key,
		            				'mailing'=>1,
		                            //usaremos el update para saber si quiere recibir mail.
		            				'activa'=>1,
		                            'name'=>$this->input->post('nom'),
		                            'apell1'=>$this->input->post('cognom'),
		                            'apell2'=>$this->input->post('cognom2'),
		                            'email'=>$this->input->post('mail'),
		                            'dob'=>$sql_data
		            				 );             
         		//   echo "rt";
     		  echo  $this->user_model->new_user($data);
  }
        //si lo hace bien , envia los mails. administrador y usuarios
	}

}

/* End of file registro.php */
/* Location: ./application/controllers/user/registro.php */