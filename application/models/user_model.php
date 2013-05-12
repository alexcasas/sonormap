<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}

	public function new_user($value='')
	{
		# code...
		$sql="INSERT INTO usuario (alias_usuario,cuenta_activa,mailing,key_word) VALUES('".$value['id']."',".$value['activa'].",".$value['mailing'].",'".$value["clave"]."');";
		
		$control=$this->db->query($sql);
		if($control>0)
		{
			$ref_usr=$this->db->insert_id();
			$sql2="INSERT INTO persona (usuario_id,nombre,apellido_1,apellido_2,data_nacimiento,mail,observacion,confirmado) VALUES(".$ref_usr.",'".$value['name']."','".$value['apell1']."','".$value["apell2"]."','".$value['dob']."','".$value['email']."','',0);";
			$control=$this->db->query($sql2);

		}
		return $control;
	}

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */