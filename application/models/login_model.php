<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model {

	public $variable;

	public function __construct()
	{
		parent::__construct();
		
	}
	public function checkin($value='')
	{

		# code...
		$sql="SELECT * FROM usuario WHERE alias_usuario='".$value['usr']."' AND key_word='".$value['pass']."';";
		$conf=$this->db->query($sql);
		return $conf;
	}

}

/* End of file login_model.php */
/* Location: ./application/models/login_model.php */