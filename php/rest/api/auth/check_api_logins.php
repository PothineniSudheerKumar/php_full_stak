<?php
	header("Access-Control-Allow-Origin:*");
	header("Content-Type:application/json;charset=UTF-8");
	header("Access-Control-Allow-Methods: POST");
	header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

	require_once('../config/database.php');
	require_once('../config/constant.php');
	require_once('../class/auth.php');

	$db = new database();
	$db_connection = $db->get_connection();

	$auth = new auth($db_connection);

	$input = "php://input";
	$file_get_contents = file_get_contents($input);
	$decoded_data = json_decode($file_get_contents);

	$auth->user_name = $decoded_data->user_name;
	$auth->password = $decoded_data->password;
	$auth->mode = $decoded_data->mode;

	$stmt = $auth->validate_user_api_logins();

	if ($stmt->rowCount() > 0) {
		$auth->auth_data['code'] = OK;
		$auth->auth_data['message'] = 'User validation success';
		$auth->auth_data['status'] = SUCCESS;
	}else{
		$auth->auth_data['code'] = UNAUTHORIZED;
		$auth->auth_data['message'] = 'User validation failed!';
		$auth->auth_data['status'] = FAILURE;
	}
	return json_encode($auth->auth_data);
?>