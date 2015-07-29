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

