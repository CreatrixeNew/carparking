<?php

class model_custom extends CI_Model {

    function _construct() {
// Call the Model constructor
        parent::_construct();
    }

    function fetchAllShifts() {

        $this->db->select('shift_id,shift_name');
        $this->db->from('cp_shifts');
//        $this->db->where('shift_status', 1);
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return false;
        }
    }
    
     function fetchAllContracts() {

        $this->db->select('contract_id,contract_name');
        $this->db->from('cp_contracts');
//        $this->db->where('contract_status', 1);
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
//        $this->db->where('airport_status', 1);
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
	
	/* ADDED 7 29 2015 */
	// get all modules 
    function get_modules( )
    {
		$modules = array();
		$this->db->select('*');
		$this->db->from('cp_modules');
		$this->db->order_by("module_name","desc"); 
		$query = $this->db->get();
		foreach ($query->result() as $row)
		{
			array_push( $modules , $row);
		}
		return $modules;
    } 
	// get all modules 
    function get_modules_array( )
    {
		$modules = array();
		$this->db->select('*');
		$this->db->from('cp_modules');
		$this->db->order_by("module_name","desc"); 
		$query = $this->db->get();
		foreach ($query->result_array() as $row)
		{
			array_push( $modules , $row);
		}
		return $modules;
    } 
	function get_module_map(){
 		$modules = array();
		$map = array();
		
		$this->db->select('*');
		$this->db->from('cp_modules');
		$this->db->order_by("module_id","asc"); 
		$query = $this->db->get();
		foreach ($query->result_array() as $row)
		{
			array_push( $modules , $row);
		}
		
		foreach ($modules as $module) {
			// init self
			if (!array_key_exists($module['module_id'], $map)) {
				$map[$module['module_id']] = array( 'id' => $module['module_id'] , 'pid' => $module['module_parent_id'] , 'name' => $module['module_name'] , 'url' => $module['module_url'] , 'controller' => $module['module_controller'], 'needs_rights' => $module['needs_rights'] );
			}
			else {
				$map[$module['module_id']]['name'] = $module['module_name'];
				$map[$module['module_id']]['url'] = $module['module_url'];
				$map[$module['module_id']]['controller'] = $module['module_controller'];
				$map[$module['module_id']]['id'] = $module['module_id'];
				$map[$module['module_id']]['pid'] = $module['module_parent_id'];
				$map[$module['module_id']]['needs_rights'] = $module['needs_rights'];
			}
			
			// init parent
			if (!array_key_exists($module['module_parent_id'], $map)) {
				$map[$module['module_parent_id']] = array();
			}
			
			// add to parent
			$map[$module['module_parent_id']][$module['module_name']] = & $map[$module['module_id']];
		}

	  return $map[0];
	}
	function get_module( $module_id ){
 		$module;
		$this->db->select('cp1.module_name, cp1.module_url, cp1.module_parent_id , cp1.module_controller, cp2.module_name as module_parent');
		$this->db->from('cp_modules cp1');
		$this->db->join('cp_modules cp2', 'cp1.module_parent_id = cp2.module_id', 'left outer' );
		$this->db->where('cp1.module_id', $module_id);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result[0];
	}
	
	function insert_bcrumb( $name = '', $url = '' , $controller = '', $parent = 0 ){
		$query = $this->db->query("INSERT INTO cp_modules( module_parent_id, module_name, module_controller, module_url, needs_rights, status) VALUES 
		( '".$parent."', '".$name."' ,'".$controller."' ,'".$url."', '1', '1' )");
		 if ($query > 0) {
            return true;
        } else {
            return false;
        }
	}
	
	function modify_bcrumb( $id = '', $name = '', $url = '' , $controller = '', $parent = 0 ){
		$query = $this->db->query("UPDATE cp_modules SET  module_parent_id = '".$parent."', module_name = '".$name."', module_controller = '".$controller."', module_url = '".$url."' WHERE module_id = '".$id."'");
		 if ($query > 0) {
            return true;
        } else {
            return false;
        }
	}
	
	function gen_bcrumbs( $controller_text = 'access_controller' ){
		$module_map = $this->get_module_map();
		return $module_map;
	}
	
	function uses_perms( $id ){
		$query = $this->db->query("UPDATE cp_modules SET  needs_rights = '1' WHERE module_id = '".$id."'");
		 if ($query > 0) {
            return true;
        } else {
            return false;
        }
	}
	
	function not_uses_perms( $id ){
		$query = $this->db->query("UPDATE cp_modules SET  needs_rights = '0' WHERE module_id = '".$id."'");
		 if ($query > 0) {
            return true;
        } else {
            return false;
        }
	}
	
	function delete_module( $id ){
		$query = $this->db->query("DELETE FROM cp_modules WHERE module_id = '".$id."'");
		 if ($query > 0) {
            return true;
        } else {
            return false;
        }
	}
	
	function get_module_by_uri( $uri_string ){
		$query = $this->db->query("SELECT * FROM cp_modules WHERE module_url LIKE  '%".$uri_string."%' limit 1");
		 if ($query > 0) {
           $result = $query->result();
        } else {
            return false;
        }
		return $result[0] ;
	}
 
}

//end