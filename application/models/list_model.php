<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * 15-05-2013
 * 
 * modelo que maneja los datos igresados.
 *
 * @autor Maximiliano Fernandez - @ maxm13.
 *
 * 
 */
class List_model extends CI_Model {

	
   public function check_title($value='')
	{
   	# code...
		
		$sql="SELECT * FROM item_archivo WHERE titulo='".$value."';";
		$res=$this->db->query($sql);
		return $res;
   }
}

/* End of file list_model.php */
/* Location: ./application/models/list_model.php */