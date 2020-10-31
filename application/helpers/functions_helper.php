<?php 

function get_user_id(){
	$ci = get_instance();
	return ($ci->session->userdata('user'))->user_id ?? 0;
}

function get_userdata(){
	$ci = get_instance();
	return ($ci->session->userdata('user')) ?? false;
}

function is_login(){
	$ci = get_instance();
	return ($ci->session->userdata('user') ? true : false);
}

?>