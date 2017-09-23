<?php

include $_SERVER['DOCUMENT_ROOT'].'/ptisi-lib.php';

if ($_POST == NULL) {
	echo "Пустые данные";
}
else {
	$sql_link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
	if (!$sql_link) {
		 die('Ошибка соединения: ' . mysql_error());
	}
	$name = $_POST['input_name'];
	$email = $_POST['input_email'];
	$subject = $_POST['input_subject'];
	$message = $_POST['input_text'];
	$query = "INSERT INTO messages (from_name, from_email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
	echo $query;
	mysqli_query($sql_link, $query);
	mysqli_close($sql_link);
}

?>
