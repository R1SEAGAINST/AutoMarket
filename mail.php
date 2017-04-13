<?php
// Simple basic check
function checkData($mandatory_fields, $field_input) {

	$check = true;
	foreach($mandatory_fields as $key=>$value) {
	
		if(empty($field_input[$value])) {
			$check = false;
		}
	}
	return $check;
}

function unserializeData() {
	$serializedData = $_POST['value'];
	$unserializedData = array();
	parse_str($serializedData, $data);
	$data['email_receiver'] = "example@themeforest.net";
	return $data;
}

function mailContactForm() {
	$data = unserializeData();
	$mandatory = array("contact_name", "contact_email", "contact_message");
	if (!checkData($mandatory, $data)) {
		header("HTTP/1.1 400 Bad Request");
		return false;
	}
	$to = $data['email_receiver'];
	$from = "info@" . $_SERVER['SERVER_NAME'];
	$subject = "Subject: ".$data['contact_name']."";
	$message = "E-Mail: " . $data["contact_email"]."\n".
	"Message: " . $data["contact_message"];
	$headers = "From: ".$from."" . "\r\n" .
	"Reply-To: ".$from."" . "\r\n" .
	'X-Mailer: PHP/' . phpversion();
	mail($to, $subject, $message, $headers);
}

mailContactForm();

?>