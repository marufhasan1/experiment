<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');


// genetate tender code
function generator($table, $prefix = '') {
    $CI = & get_instance();
    $CI->load->model('action');
    $code = '';
    // get codeigniter instanse
    // load model
    // use model method
    $val = $CI->action->forIdGenerator($table);

    if(!empty($val)){
        $id = intval($val[0]->id) + 1;
    } else {
        $id = 1;
    }

    if($prefix != ''){
        $code = $prefix.$id;
    } else {
        $code = $id;
    }

    return $code;
}

// genetate tender code
function companyUniqueId($table) {
    $counter = 1;

    $CI = & get_instance();
    $CI->load->model('action');
    $where = array("type"=>"company");
    // use model method
    $val = $CI->action->max_value($table,"code",$where);

    if($val!=null){
        $counter =$val+1;
    }
    $counter = str_pad($counter,3,0, STR_PAD_LEFT);
    return $counter;
}

function clientUniqueId($table) {
    $counter = 1;

    $CI = & get_instance();
    $CI->load->model('action');
    $where = array("type"=>"client");
    // use model method
    $val = $CI->action->max_value($table,"code",$where);

    if($val!=null){
        $counter =$val+1;
    }
    $counter = str_pad($counter,4,0, STR_PAD_LEFT);
    return $counter;
}

// genetate showroom id
function showroomId($table) {
    $code = '';
    $counter = 1;
    $CI = & get_instance();
    $CI->load->model('action');
    // use model method
    $val = $CI->action->maxId($table);


    if(is_array($val)){
        $counter = intval($val[0]->maxId) + 1;
    } else {
        $counter = 1;
    }

    if(strlen($counter) == 1) {
        $counter = '0' . $counter;
    } else {
        $counter =  $counter;
    }
    return $counter;
}


// genetate voucher no
function generate_voucher($table, $where=array(), $prefix = '') {
    $code = '';
    $counter = 1;
    $CI = & get_instance();
    $CI->load->model('action');
    // use model method
    $val = $CI->action->read($table, $where, 'desc');

    if($val != null){
        $counter = intval($val[0]->id) + 1;
    }

    if(strlen($counter) == 1) {
        $counter ='00' . $counter;
    } elseif(strlen($counter) == 2) {
        $counter ='0' . $counter;
    } else {
         $counter = $counter;
    }

    $code = date('y') . date('m') . date('d') . $prefix . $counter;
    return $code;
}

// genetate memo no
function memo_no($table, $where=array(), $prefix = '') {
    $code = '';
    $counter = 1;
    $CI = & get_instance();
    $CI->load->model('action');
    // use model method
    $val = $CI->action->read($table, $where, 'desc');

    if($val != null){
        $counter = intval($val[0]->id) + 1;
    }

    if(strlen($counter) == 1) {
        $counter ='00000' . $counter;
    } elseif(strlen($counter) == 2) {
        $counter ='0000' . $counter;
    }elseif(strlen($counter) == 3) {
        $counter ='000' . $counter;
    } elseif(strlen($counter) == 4) {
        $counter ='00' . $counter;
    }elseif(strlen($counter) == 5) {
        $counter ='0' . $counter;
    }else {
         $counter = $counter;
    }

    $code = $prefix . date('Y') ."/" .$counter;
    return $code;
}

function age($date){
    list($year, $month, $day) = explode("-", $date);

    $doy = date('Y') - $year;
    $dom = date('m') - $month;
    $dod = date('d') - $day;

    if($dod < 0 || $dom < 0) $doy--;

    return $doy;
}

/*Maruf hasan's Helper*/
function custom_fetch($var,$field){
    if (isset($var)) {
        return $var[0]->$field;
    }
}

function v_check($value){
    if ($value!=null) {
        return $value;
    }else{
        return "N/A";
    }
}

function filter($value){
    $capitalize="";
    $rmv_scor=str_replace("_"," ", $value);
    if (mb_detect_encoding($rmv_scor)!='UTF-8') {
        $capitalize=ucwords($rmv_scor);
    }else{
        $capitalize=$rmv_scor;
    }

    return $capitalize;
}

function message_length($strlength){
	$messLen = 0;

	if( $strlength <= 160){ $messLen = 1; }
	else if( $strlength <= 306){ $messLen = 2; }
	else if( $strlength <= 459){ $messLen = 3; }
	else if( $strlength <= 612){ $messLen = 4; }
	else if( $strlength <= 765){ $messLen = 5; }
	else if( $strlength <= 918){ $messLen = 6; }
	else if( $strlength <= 1071){ $messLen = 7; }
	else if( $strlength <= 1080){ $messLen = 8; }
	else { $messLen = "Equal to an MMS."; }
	return $messLen;
}
/*
Two Mendatory agrument
1. Module
2. Access
Module means the module's name such as Showroom,godown,employee etc.
Access means the action's access such as Edit,Delete,Update,Return etc.
*/
function is_access($module, $access){
    $CI = & get_instance();
    $CI->load->model('action');
    $privilege = $CI->data["privilege"];
    if($privilege=="admin"){
        return true;
    }

    $where = array(
        "privilege_name" => $privilege,
        "module_name"    => $module
    );
    $data = $CI->action->read("privileges",$where);
    if($data==null){
        return false;
    }
    $access_array = json_decode($data[0]->access);
    if(in_array($access,$access_array)){
        return true;
    }else{
        return false;
    }

}

    function selected($v1,$v2){
        if($v1==$v2){
            echo "selected";
        }
    }

    function checked($v1,$v2){
        if($v1==$v2){
            echo "checked";
        }
    }

    function valid_equal($v1,$v2){
        if($v1==$v2){
            return true;
        }
        return false;
    }

/**
 * get meta Information
 *
 */
function getPartyMeta($code, $field) {
    $CI = & get_instance();
    $CI->load->model('action');

    $where['party_code'] = $code;
    $where['meta_key'] = $field;

    $resultSet = $CI->action->read('partymeta', $where);

    if($resultSet){
    	return $resultSet[0]->meta_value;
    }

	return "";
}

function metadata($table, $where=array()) {
	$CI = & get_instance();
    $CI->load->model('action');

	$resultset = $CI->action->read($table, $where);
	if($resultset != null) {
		return $resultset[0]->meta_value;
	}

	return '';
}

function getSiteMeta($field) {
	$CI = & get_instance();
    $CI->load->model('action');

	$where = array("meta_key" => $field);
	$resultset = $CI->action->read("sitemeta", $where);

	if($resultset != null) {
		return $resultset[0]->meta_value;
	}

	return '';
}

function f_number($data){
    return number_format($data, 2);
}
