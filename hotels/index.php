<?php
	$page_name = "hotels";
?>

<!DOCTYPE html>
<html>

<?php
	include $_SERVER['DOCUMENT_ROOT'].'/ptisi-lib.php';
	check_language();

	include $_SERVER['DOCUMENT_ROOT'].'/ptisi-header.php';
?>


<body>

<?php
include $_SERVER['DOCUMENT_ROOT'].'/ptisi-navigation-block.php';

include $_SERVER['DOCUMENT_ROOT'].'/tickets-main-block.php';

include $_SERVER['DOCUMENT_ROOT'].'/ptisi-reason-block.php';
include $_SERVER['DOCUMENT_ROOT'].'/ptisi-carousel.php';
include $_SERVER['DOCUMENT_ROOT'].'/ptisi-subscribe-block.php';
include $_SERVER['DOCUMENT_ROOT'].'/ptisi-footer-block.php';
include $_SERVER['DOCUMENT_ROOT'].'/ptisi-preloader.php';
include $_SERVER['DOCUMENT_ROOT'].'/ptisi-email-block.php';

?>

</body>

</html>

