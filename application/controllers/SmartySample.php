<?php
class SmartySample extends CI_Controller {
	public function index(){
		
        $data = array('txt'=>'smartyつかえてます');
		//$this->load->view('SmartySample');
		$this->smarty->view('SmartySample.php',$data);
	}
	
	
}

