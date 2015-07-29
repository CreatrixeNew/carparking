<?php

class model_custom extends CI_Model {

    function _construct() {
// Call the Model constructor
        parent::_construct();
    }

    function fetchAllShifts() {

        $this->db->select('shift_id,shift_name');
        $this->db->from('cp_shifts');
        $this->db->where('shift_status', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

    function fetchAllAirports() {

        $this->db->select('airport_id,airport_name');
        $this->db->from('cp_airports');
        $this->db->where('airport_status', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
     function fetchAllActiveEmployees() {

        $this->db->select('count(user_id) as users');
        $this->db->from('cp_users');
        $this->db->where('user_status','1');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function fetchAllInactiveEmployees() {

        $this->db->select('count(user_id) as users');
        $this->db->from('cp_users');
        $this->db->where('user_status','0');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function fetchAllEmployees() {

        $this->db->select('count(user_id) as users');
        $this->db->from('cp_users');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function fetchAllDrivers() {

        $this->db->select('count(user_id) as users');
        $this->db->from('cp_users');
        $this->db->where('user_type','driver');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
    function fetchEmployeeShift($id) {

        $this->db->select('*');
        $this->db->from('cp_shifts');
        $this->db->join('cp_users', 'cp_users.user_shift = cp_shifts.shift_id');
        $this->db->where('user_id',$id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
        function fetchEmployeeContract($id) {

        $this->db->select('*');
        $this->db->from('cp_contracts');
        $this->db->join('cp_users', 'cp_users.user_contract = cp_contracts.contract_id');
        $this->db->where('user_id',$id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
           function fetchEmployeeAirports($id) {

        $this->db->select('cp_airports.*');
        $this->db->from('cp_user_airports');
        $this->db->join('cp_users', 'cp_users.user_id = cp_user_airports.assign_user_id');
        $this->db->join('cp_airports', 'cp_airports.airport_id = cp_user_airports.assign_airport_id');
        $this->db->where('user_id',$id);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }

}

//end