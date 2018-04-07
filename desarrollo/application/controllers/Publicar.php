<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Publicar extends CI_Controller {
		public function __construct()
		{
			parent::__construct();
			$this->load->model('Publicar_model');
			$this->load->model('User_model');
		}
		public function Publicar()
		{
			$data = ($this->session->userdata('logueado'));
			//condicion por si se publica sin foto
			//Si no consigue imagen multimedia, muestra el post con solo texto
			if (!empty($_FILES['multimedia']['name'])) 
			{
				$image = explode('.',$_FILES['multimedia']['name']);
				$post['description'] = $this->input->post('description');
				$post['multimedia'] = $image[0];
				$post['multimediaFormat'] = $image[1];
				$post['author'] = $data[0]['iDuser']; 			
				$config['upload_path']          = './upload/';
	            $config['allowed_types']        = 'gif|jpg|png|jpeg|mp3|mp4|mkv|avi|3gp';
	            $this->load->library('upload', $config);
	            $this->upload->do_upload('multimedia');
	            $bool = $this->Publicar_model->Publicado($post);
				if ($bool) {
					redirect(base_url().'Ntmillion/Home', 'refresh');
				}else{
					redirect(base_url().'Perfil/Profile', 'refresh');
				}
			}else
			{
				$post['description'] = $this->input->post('description');
				$post['author'] = $data[0]['iDuser']; 
            	$bool = $this->Publicar_model->Publicado($post);
				if ($bool) {
					redirect(base_url().'Ntmillion/Home', 'refresh');
				}else{
					redirect(base_url().'Perfil/Profile', 'refresh');
				}
				
			}

		}
	
	}
	
	/* End of file Publicar.php */
	/* Location: ./application/controllers/Publicar.php */
 ?>