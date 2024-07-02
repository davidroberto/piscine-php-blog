<?php 

require_once('../config/config.php');

function checkIfFormIsValid($request) {
	if ( 
		!empty($request['lastname']) && 
		!empty($request['email']) && 
		!empty($request['message']) &&

		preg_match("/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,}$/", $request['email'])

	 ) {
		return true;
	 } else {
		return false;
	 }
}
