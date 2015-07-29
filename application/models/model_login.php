<?php

class model_login extends CI_Model {

    function _construct() {
// Call the Model constructor
        parent::_construct();
    }

	function admin_login($uname, $password) {

            $this->db->select('*');
            $this->db->from('cp_users');
            $this->db->where("`user_email` = '" . $uname . "' AND  `user_password` = '" . $password . "'");           
        
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
 
            return $query->result();
        } else {
            return false;
        }

    }
	
	
	function check_user($uname,$email) {
        $this->db->select('user_name');
        $this->db->from('users');
        $this->db->where("user_name",$uname);
        $this->db->where("user_email",$email);
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
            return 1;
        } else {
            return 0;
        }
    }
	
	
	function update_user($uname,$email,$passwd){
	
	     $query=$this->db->query("UPDATE cms_users SET usr_pass='".$passwd."' WHERE id = '$email' and usr_uname='$uname'");
		if($query>0)
		{
			return true;
		}
		else{
			return false;
		}
	
	}
	
}//end