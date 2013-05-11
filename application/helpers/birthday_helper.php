<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('add_select_day'))
{
    function add_select_day()
    {    $days = array();
    	for ($val=1; $val<=31;$val++) {
    		# code...
    		$day=(string)$val;
    		$days[$day]=$val;
    	}
    	$months = array( 1=>'gener' ,
    					 2=>'febrer',
    					 3=>'març',
    					 4=>'abril',
    					 5=>'maig',
    					 6=>'juny',
    					 7=>'juliol',
    					 8=>'agost',
    					 9=>'setembre',
    					 10=>'octubre',
    					 11=>'novembre',
    					 12=>'desembre' 
    					);
    	$years=array();
    	$this_year=date('Y',time());
    	$top_age=$this_year-18;

    	for ($val=$top_age; $val>=$this_year-100;$val--) {
    		# code...
    		$year=(string)$val;
    		$years[$year]=$val;
    	}

        $CI =& get_instance();
        
        $CI->load->helper('form');  

        $select=form_dropdown("dia",$days);
          $select.=form_dropdown("mes",$months);
            $select.=form_dropdown("anio",$years);
        return $select;

    }
}