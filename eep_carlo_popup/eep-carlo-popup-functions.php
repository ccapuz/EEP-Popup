<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of able set up featured and basic listings
 *
 * @author iverchoque
 */
if(is_user_logged_in()){

}else{
	$response['status'] = 'error-no-logged';
	echo json_encode($response);
	exit();
}

