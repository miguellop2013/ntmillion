<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Perfil_model extends CI_Model {
	function editProfile($id)
	{	
		$this->db->where('iDuser', $id);
		$query = $this->db->get('tbl_user');
		if($query->num_rows() > 0) return $query;
		else return false;
	}
	
	function search($search)
	{
	    $query = $this->db->query("SELECT t1.*, t2.requestStatus FROM tbl_user t1  left join tbl_friend t2 on (t1.idUser=t2.friend) where t1.email like '%".$search."%' or name like '%".$search."%' or lastName like '%".$search."%' and t2.user='".$_SESSION['logueado'][0]['iDuser']."'");
	    if ($query->num_rows())
	        return $query;
	    else
	        return false;
	}
	
	function agregarSolicitudAmistad($data)
	{
	    if($this->db->insert('tbl_friend',$data))
            return true;
        else
            return false;
        
	}
	function comentar($data)
	{
	    if($this->db->insert('tbl_commentary',$data))
            return true;
        else
            return false;
        
	}
	function comentarios($post)
	{
	    $query = $this->db->query("select t1.*,t2.* from tbl_commentary t1 inner join tbl_user t2 on (t1.friend = t2.iDuser) where t1.post='".$post."'");
		if($query->num_rows() > 0) return $query;
		else return false;
        
	}
	public function aceptarSolicitudAmistad($condicion,$data){
        $this->db->where($condicion);
        $this->db->update('tbl_friend',$data);
        if($this->db->affected_rows()>0)            
            return true;            
        else{
            return false;
        }
    }
    
    public function borrarSolicitudAmistad($condicion){
        $this->db->where($condicion);           
        $this->db->delete('tbl_friend');
        if($this->db->affected_rows()>0)            
            return true;            
        else
            return false;
    }
}
/* End of file Perfil_model.php */
/* Location: ./application/models/Perfil_model.php */
 ?>