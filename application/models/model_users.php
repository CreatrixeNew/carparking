<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_users extends CI_Model {

    function __construct() {
        parent::__construct();
    }

    /*
	* @desc: get all users
	* @param: status of user (1 for enable or 0 for disabled)
	* @return: array of users
	*/
    public function get_all_users( $status = 1) {
		$users = array();
		$this->db->select('*');
		$this->db->from('cp_users');
		$this->db->where("user_status", $status  );
		$query = $this->db->get();
		foreach ($query->result() as $row)
		{
			array_push( $users , $row);
		}
		return $users;
    }
	
	/*
	* @desc: get user(s) by id
	* @param: array of user id's, status of user (1 for enable or 0 for disabled)
	* @return: array of users
	*/
    public function get_user_by_id($uid) {
        $users = array();
        $this->db->select('*');
        $this->db->from('cp_users');
        $this->db->where("user_id", $uid);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
	
    /*
	* @desc: Get a single user by user name
	* @param: array of usernames
	* @return: array of users
	*/
    public function get_user_by_uname( $uname ) {
		$users = array();
		$this->db->select('*');
		$this->db->from('cp_users');
		$this->db->where_in("user_title",  $uname);
		$this->db->where("user_status", $status );
		$query = $this->db->get();
		foreach ($query->result() as $row)
		{
			array_push( $users , $row);
		}
		return $users;
    } 

    function saveBio($data) {
        $this->db->set($data);
        $this->db->insert('cp_users');
        $insertId = $this->db->insert_id();
        if ($insertId > 0) {
            return $insertId;
        } else {
            return false;
        }
    }

    function addAirports($data) {
        $this->db->set($data);
        $this->db->insert('cp_user_airports');
        $insertId = $this->db->insert_id();
        if ($insertId > 0) {
            return $insertId;
        } else {
            return false;
        }
    }

    function saveDetails($data, $id) {

        $query = $this->db->query("UPDATE cp_users SET user_contract='" . $data['user_contract'] . "', user_shift='" . $data['user_shift'] . "',user_salary_rate='" . $data['user_salary_rate'] . "', user_bank_name='" . $data['user_bank_name'] . "', user_account_numb ='" . $data['user_account_numb'] . "',user_account_title='" . $data['user_account_title'] . "', user_image='" . $data['user_image'] . "',user_updated_at='" . $data['user_updated_at'] . "',user_updated_by='" . $data['user_updated_by'] . "' WHERE user_id = '$id'");
        if ($query > 0) {
            return true;
        } else {
            return false;
        }
    }

    function updateBio($data, $id) {

        $query = $this->db->query("UPDATE cp_users SET user_first_name='" . $data['user_first_name'] . "',user_last_name='" . $data['user_last_name'] . "', user_type='" . $data['user_type'] . "', user_gender ='" . $data['user_gender'] . "',user_email='" . $data['user_email'] . "', user_phone='" . $data['user_phone'] . "',user_address='" . $data['user_address'] . "',user_dob='" . $data['user_dob'] . "',user_updated_at='" . $data['user_updated_at'] . "',user_updated_by='" . $data['user_updated_by'] . "' WHERE user_id = '$id'");
        if ($query > 0) {
            return true;
        } else {
            return false;
        }
    }
    
     function fetchAllEmployees() {

        $this->db->select('*');
        $this->db->from('cp_users');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
     function fetchFilterEmployees($status) {
//         print_r("model".$status);exit;
        $this->db->select('*');
        $this->db->from('cp_users');
        $this->db->where('user_status',$status);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
         function fetchSortEmployees($date,$order) {

        $this->db->select('*');
        $this->db->from('cp_users');
        $this->db->where('user_joined_on',$date);
        $this->db->order_by('user_created_at',$order);
        $query = $this->db->get();
//        echo $this->db->last_query();
   
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
      public function publishStatus($val, $id) {
        $loggedInUserId = $this->session->userdata('user_id');
        $query = $this->db->query("update cp_users set user_status='" . $val . "',user_updated_at='" . date('Y-m-d H:i:s') . "',user_updated_by='" . $loggedInUserId . "' WHERE user_id =" . $id);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
    
     public function deletePreviousAirports($id) {
        $query = $this->db->query("delete from cp_user_airports WHERE assign_user_id =" . $id);
        if ($query) {
            return true;
        } else {
            return false;
        }
    }
	/*
	* @desc: get user(s) by id
	* @param: array of user id's, status of user (1 for enable or 0 for disabled)
	* @return: array of users
	*/
    public function get_user_by_id_stdObj($uid) {
        $users = array();
        $this->db->select('*');
        $this->db->from('cp_users');
        $this->db->where("user_id", $uid);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            $result = $query->result();
        } else {
            $result = false;
        }
		return $result[0];
    }
}

?>