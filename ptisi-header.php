<head>

<?php
header('Content-Type: text/html; charset=utf-8');
?>

<script src="/ptisi.js"></script>

<meta charset="utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

<link href="/bs/css/bootstrap.min.css" rel="stylesheet">
<script src="/bs/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="/style.css?26">

<script type="text/javascript">

	$(document).ready(function() {
		preloaderOn();

		setTimeout(function(){foo()}, 2000);


		preloaderOff();
		$('[data-toggle="tooltip"]').tooltip();

		$('#email_form').on('submit',function(e) {


			e.preventDefault();

			var $form = $(e.currentTarget);
			var $email = $form.find('#email');

			if ($email.val().indexOf('@') == -1) {
				$email.closest('.input-group').addClass('has-error');
			}
			else {
				preloaderOn();
				$email.closest('.input-group').addClass('has-success').removeClass('has-error');
				$.get("/addemail.php", { email: $email.val() });

				$email.val('<? echo $subscribe_text[$global_lang]['saved'] ?>');
				$email.attr('readonly','readonly');
				preloaderOff();
			}


		});

		$('#sendmessage_form').on('submit', function(e) {

			e.preventDefault();

			var has_error = 0;

			var $form = $(e.currentTarget);
			var $name = $form.find('#input_name');
			var $email = $form.find('#input_email');
			var $subject = $form.find('#input_subject');
			var $message = $form.find('#input_text');

			if ($email.val().indexOf('@') == -1) {
				$email.closest('.form-group').addClass('has-error');
				has_error++;
			}
			else {
				$email.closest('.form-group').removeClass('has-error');
			}

			if ($subject.val().length == 0) {
				$subject.closest('.form-group').addClass('has-error');
				has_error++;
			}
			else {
				$subject.closest('.form-group').removeClass('has-error');
			}

			if ($name.val().length == 0) {
				$name.closest('.form-group').addClass('has-error');
				has_error++;
			}
			else {
				$name.closest('.form-group').removeClass('has-error');
			}

			if ($message.val().length == 0) {
				$message.closest('.form-group').addClass('has-error');
				has_error++;
			}
			else {
				$message.closest('.form-group').removeClass('has-error');
			}

			if (!has_error) {
				preloaderOn();
				$.post("/sendemail.php", { input_name: $name.val(), input_email: $email.val(), input_subject: $subject.val(), input_text: $message.val() });
				$name.val('');
				$email.val('');
				$subject.val('');
				$message.val('');
				$('#mail-modal').modal("toggle");
				preloaderOff();
			}

		});
	});
</script>

<title>PTISI.EU</title>
</head>
