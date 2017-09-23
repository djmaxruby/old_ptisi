<?
	$page_name = "taxi";
?>

<!DOCTYPE html>
<html>

<?
	include $_SERVER['DOCUMENT_ROOT'].'/ptisi-lib.php';
	check_language();

	include $_SERVER['DOCUMENT_ROOT'].'/ptisi-header.php';
?>


<body>

<?
include $_SERVER['DOCUMENT_ROOT'].'/ptisi-navigation-block.php';

include $_SERVER['DOCUMENT_ROOT'].'/taxi-main-block.php';

include $_SERVER['DOCUMENT_ROOT'].'/ptisi-reason-block.php';
include $_SERVER['DOCUMENT_ROOT'].'/ptisi-carousel.php';
include $_SERVER['DOCUMENT_ROOT'].'/ptisi-subscribe-block.php';
include $_SERVER['DOCUMENT_ROOT'].'/ptisi-footer-block.php';
include $_SERVER['DOCUMENT_ROOT'].'/ptisi-preloader.php';
include $_SERVER['DOCUMENT_ROOT'].'/ptisi-email-block.php';

?>

</body>

</html>

