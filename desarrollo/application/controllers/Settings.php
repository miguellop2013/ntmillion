<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Settings extends CI_Controller {
	    function  __construct() 
	    {
	        parent::__construct();
	        $this->load->model('User_model');
	        $this->load->model('Perfil_model');
	        $this->load->helper('url');
	        $this->load->helper('form');
	        $this->load->library('session');
	        $this->load->library('paypal_lib');
	        $this->load->library('form_validation');
    	}
		public function config()
		{
			$result = $this->db->get('tbl_user');
       		$data = array('registro' => $result );
			$this->load->view('assets/head');
			$this->load->view('Configuracion', $data);
			$this->load->view('assets/footer');
			
		}
	
	}
	
	/* End of file Settings.php */
	/* Location: ./application/controllers/Settings.php */
?>