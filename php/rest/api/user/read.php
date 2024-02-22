<?php
	header("Access-Control-Allow-Origin:*");
	header("Content-Type:application/json;charset=UTF-8");

	require_once('../config/database.php');
	require_once('../config/constant.php');
	require_once('../class/user.php');
	require_once('../auth/check_api_logins.php');

	$db = new database();
	$db_connection = $db->get_connection();

	if($auth->auth_data['status'] == SUCCESS){
		$user_obj = new user($db_connection);
		$stmt = $user_obj->get_all_user_data();
		if ($stmt->rowCount() > 0) {
			$user_obj->result_data['code'] = OK;
			$user_obj->result_data['message'] = 'User data fetched successfully';
			$user_obj->result_data['status'] = SUCCESS;
			$user_obj->result_data['data'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}else{
			$user_obj->result_data['code'] = NOT_FOUND;
			$user_obj->result_data['message'] = 'User data not found';
			$user_obj->result_data['status'] = FAILURE;
			$user_obj->result_data['data'] = $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
		echo json_encode($user_obj->result_data);
	}else{
		echo json_encode($auth->auth_data);
	}
?>