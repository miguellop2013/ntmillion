<?php  
    if(! defined('BASEPATH')){
        exit('No está permitido el acceso directo a la secuencia de comandos');
    }

    class User_model extends CI_Model
    {
        public function findUser($condicion,$cuantos = "", $desde = ""){
            $this->db->where($condicion);
            $this->db->order_by('iDuser DESC');
            $query=$this->db->get('tbl_user',$cuantos, $desde);
            if($query->num_rows()>0)
                return $query->result_array();
            else
                return false;
        }
        public function saveUser($data){
            if($this->db->insert('tbl_user',$data))
                return true;
            else
                return false;
        }
        public function updateUser($condicion,$data){
            $this->db->where($condicion);
            $this->db->update('tbl_user',$data);
            if($this->db->affected_rows()>0)            
                return true;            
            else
                return false;
        }
        /*
        public function listarCategorias($cuantos = "", $desde = ""){
            $this->db->order_by('id_ca ASC');
            $query=$this->db->get('tbl_user',$cuantos, $desde);
            if($query->num_rows()>0)
                return $query->result_array();
            else
                return false;
        }

        public function buscarCategorias($condicion,$cuantos = "", $desde = ""){

            $this->db->where($condicion);
            $this->db->order_by('id_ca DESC');
            $query=$this->db->get('tbl_user',$cuantos, $desde);
            if($query->num_rows()>0)
                return $query->result_array();
            else
                return false;
        }

        public function guardarCategoria($data){
            if($this->db->insert('tbl_user',$data))
                return true;
            else
                return false;
        }

        //borra las categorias que coincidad con la condicion
        public function borrarCategoria($condicion){
            $this->db->where($condicion);           
            $this->db->delete('tbl_user');
            if($this->db->affected_rows()>0)            
                return true;            
            else
                return false;
        }

       
        */
        function guardar($datos){
            return $this->db->insert("tbl_post", $datos);
        }

        function guardarFU($datos){
            return $this->db->insert("tbl_user", $datos);
        }

        function verImg(){

        $query = $this->db->query('SELECT tbl_post.*, tbl_user.*, (SELECT COUNT(tbl_commentary.id) as contador_comentarios from tbl_commentary WHERE tbl_commentary.post = tbl_post.id) as contador_comentarios FROM tbl_post inner join tbl_user on tbl_user.iDuser = tbl_post.author order by tbl_post.id DESC');
        if ($query->num_rows() > 0) {
            return $query;
        }else{
            return FALSE;
        } 
            
/*        $this->db->order_by('id');
        $query = $this->db->get('tbl_post');

         if ($query->num_rows() > 0) {  
        return $query->result_array();      
        }else
            return FALSE;*/
    }
/*        function verUser(){
        $query = $this->db->get('tbl_user');

         if ($query->num_rows() > 0) {  
        return $query->result_array();      
        }else
            return FALSE;
    }*/

        function get_by_id($id){

            $query = $this->db->where('iDuser','$id');
            $query = $this->db->get('tbl_user');
            return $query->result();
        }

        function edit($id){
            $data_editar = $this->input->post();
            unset($data_editar['actualizar']);

            $this->db->where('iDuser','$id'); //solo para que actualice 1 solo registro
            $this->db->update('tbl_user',$data_editar);
        }
        
        function mod($iDuser, $modificar="NULL",$email="NULL"){
            if ($modificar=='NULL') {
                $consulta=$this->db->query("SELECT * FROM tbl_user WHERE iDuser=$iDuser");
                return $consulta->result();
            }else{
                $consulta=$this->db->query(" UPDATE tbl_user SET email='$email' WHERE iDuser=$iDuser; ");
            }
            if ($consulta==true) {
                return true;
            }else{ return false;}
        }

         /*function actualizar($id, $data){
                $datos = array(
                    'password' => $data['password']
                );
                $this->db->where('iDuser',$id);
                $query = $this->db->update('tbl_post', $data );
            }*/ 

    }
?>

