<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicar_model extends CI_Model {

    public function Publicado($post = null){
    	if ($post != null) {
            if (!empty($_FILES['multimedia']['name'])) //condicion por si se publica sin foto
            {
        		$description = $post['description'];
        		$multimedia = $post['multimedia'];
                $multimediaFormat = $post['multimediaFormat'];
        		$author = $post['author'];

    		    $sql = "INSERT INTO tbl_post(description,multimedia,multimediaFormat,author) VALUES ('$description','$multimedia','$multimediaFormat', '$author')";
            }else
            {
                $description = $post['description'];
                $author = $post['author'];

                $sql = "INSERT INTO tbl_post(description,author) VALUES ('$description', '$author')";
            }

    		if ($this->db->query($sql)) {
    			return true;
    		}
    	}
    	return false;
    }

}

/* End of file Publicar_model.php */
/* Location: ./application/models/Publicar_model.php */
?>