<?php
	$session_id = $_POST['session_id'];

	$new_token = sha1($session_id);

	echo json_encode(array("id" => $new_token));
?>