<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil extends CI_Controller {
	function __construct()
	{
		parent::__construct();
        $this->load->model('Perfil_model');
        $this->load->model('User_model');
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->helper('form');
        $this->load->library('form_validation');
	}
    function Profile()
    {
        $data = array(
            'imagen' => $this->User_model->verImg()
        );
        $this->load->view('assets/head');
        $this->load->view('Profile', $data);
        $this->load->view('assets/footer');
    }
    
    function comentar()
    {
        $data = array(
            "description"=>$this->input->post("comentario"), 
            "friend"=>$this->input->post("friend"),
            "post"=>$this->input->post("post"));
        //print_r($data);
        $this->Perfil_model->comentar($data);
        //echo "añadido";
        $data['comentarios'] = $this->Perfil_model->comentarios($this->input->post("post"));
        if($data['comentarios'])
            $this->load->view("comentarios",$data);
        
    }
    
    function verComentarios()
    {
        $post = $this->uri->segment(3);
        $data['comentarios'] = $this->Perfil_model->comentarios($post);
        if($data['comentarios'])
            $this->load->view("comentarios",$data);
    }

}

/* End of file Perfil.php */
/* Location: ./application/controllers/Perfil.php */
?>