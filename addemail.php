<?

include $_SERVER['DOCUMENT_ROOT'].'/ptisi-lib.php';

if (isset($_GET['email'])) {
	$email = $_GET['email'];
	echo $email;

	$sql_link = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

	if (!$sql_link) {
		 die('Ошибка соединения: ' . mysql_error());
	}

	$query = "SELECT email FROM emails WHERE email='$email'";

	$result = mysqli_query($sql_link, $query);

	if ($result && mysqli_num_rows($result)) {
		echo "такой емэйл уже есть";
	}
	else {
		$query = "INSERT INTO emails (email) VALUES ('$email')";
		echo $query;
		mysqli_query($sql_link, $query);
	}

	mysqli_close($sql_link);
}

?>
