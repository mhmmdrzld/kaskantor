<?php 

class M_login extends CI_Model{	
	function validate($username,$password){
        $this->db->where('username',$username);
        $this->db->where('password',$password);
        $result = $this->db->get('user',1);
        return $result;
      }
}