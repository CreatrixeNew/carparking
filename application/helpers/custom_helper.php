<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

function _erMsg2($msg) {
    $html = '';
    $html .= '<div class="remember-me">' . $msg . '</div>';
    return $html;
}

function generatePassword($passwd) {
    $key = "orjGhj877u9QKnrfh6N00n1l4otojfeG" . $passwd;
    $hash_passwd = sha1($key);
    return $hash_passwd;
}

function ensureSession() {

    $CI = & get_Instance();
    if ($CI->session->userdata('logged_in') == FALSE && $CI->session->userdata('user_id') == '') {
        redirect($CI->config->item('base_url') . 'index');
    }
}

function getshifts() {

    $CI = & get_Instance();
    $CI->load->model('model_custom');
    $result = $CI->model_custom->fetchAllShifts();
    foreach($result as $s){
       echo $data = "<option value='".$s['shift_id']."'>".$s['shift_name']."</option>";
    }
}

function getAirports() {

    $CI = & get_Instance();
    $CI->load->model('model_custom');
    $result = $CI->model_custom->fetchAllAirports();
    foreach($result as $s){
       echo $data = "<option value='".$s['airport_id']."'>".$s['airport_name']."</option>";
    }
} 
    function getAllUsers() {

    $CI = & get_Instance();
    $CI->load->model('model_custom');
    $result = $CI->model_custom->fetchAllEmployees();
    echo $result[0]['users'];
    
}

    function getAllActiveUsers() {

    $CI = & get_Instance();
    $CI->load->model('model_custom');
    $result = $CI->model_custom->fetchAllActiveEmployees();
    echo $result[0]['users'];
    
}

    function getAllInactiveUsers() {

    $CI = & get_Instance();
    $CI->load->model('model_custom');
    $result = $CI->model_custom->fetchAllInactiveEmployees();
    echo $result[0]['users'];
    
}

   function getAllDrivers() {

    $CI = & get_Instance();
    $CI->load->model('model_custom');
    $result = $CI->model_custom->fetchAllDrivers();
    echo $result[0]['users'];
    
}

   function getUserShift($id) {

    $CI = & get_Instance();
    $CI->load->model('model_custom');
    $result = $CI->model_custom->fetchEmployeeShift($id);
    echo $result[0]['shift_name'];
    
}

   function getUserContract($id) {

    $CI = & get_Instance();
    $CI->load->model('model_custom');
    $result = $CI->model_custom->fetchEmployeeContract($id);
    echo $result[0]['contract_name'];
    
}
function getEmployeeAirports($id) {

    $CI = & get_Instance();
    $CI->load->model('model_custom');
    $result = $CI->model_custom->fetchEmployeeAirports($id);
    return $result;
}

function getAirportList() {

    $CI = & get_Instance();
    $CI->load->model('model_custom');
    $result = $CI->model_custom->fetchAllAirports();
    return $result;
} 

function getshiftList() {

    $CI = & get_Instance();
    $CI->load->model('model_custom');
    $result = $CI->model_custom->fetchAllShifts();
    return $result;
}

function getContractList() {

    $CI = & get_Instance();
    $CI->load->model('model_custom');
    $result = $CI->model_custom->fetchAllContracts();
    return $result;
}

function search_module_parent_id( $current_module ){
		$CI = & get_Instance();
		$modules = array();
		$module = $current_module;
		array_push( $modules , $current_module  );
		$CI->load->model('model_custom');
		$module_map = $CI->model_custom->get_modules();
		$i = 0;
		foreach($module_map as $mappedItem){
			
			if( $module->module_parent_id == $mappedItem->module_id ){
				$module 	= $mappedItem;
				array_push( $modules , $module  );
			}
		}
		return $modules;
	}

/* ADDED 7 29 2015 */
function get_module_parents( $uri ){
	$CI = & get_Instance();
	$CI->load->model('model_custom');
	$current_module = $CI->model_custom->get_module_by_uri( $uri );
	$modules = search_module_parent_id($current_module);
	return $modules ;
}
function get_crumbs($uri){
	$modules = get_module_parents( $uri );
	$crumbs = array();
	foreach($modules as $module ){
		$crumb['name'] = $module->module_name;
		$crumb['url'] = rtrim(base_url(),"/") .$module->module_url; 
		$crumbs[] = $crumb;
		krsort($crumbs);
		$crumbs= array_values($crumbs);
	}
	return $crumbs;
}
function html_output_breadcrumbs($uri){
	$breadcrumb = get_crumbs($uri);
?>
<ul class="breadcrumb">
	<li><a href="<?PHP echo base_url()  ?>">Car Parking</a><span class="divider"></span></li>
<?PHP $bcount = count($breadcrumb) ;
	for( $i = 0; $i <=  $bcount - 2 ; $i++){
?>
	<li><a href="<?PHP echo $breadcrumb[$i]['url']  ?>"><?PHP echo $breadcrumb[$i]['name']  ?></a><span class="divider">&raquo;</span></li>
<?PHP 
	}
?>
	<li class="active"><?PHP echo $breadcrumb[$bcount - 1]['name']  ?></li>
</ul>
<?PHP
}
