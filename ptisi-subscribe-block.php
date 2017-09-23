<section>

<div class="container" style="padding-top: 20px;">
	<div class="row">
		<div class="col-md-6" style="border-left: solid 4px #e0e0e0">
			<div class="control-row">
				<h4><? echo $subscribe_text[$global_lang]['title']; ?></h4>

				<form class="form-inline" method="get" action="/addemail.php" target="_blank" id="email_form">
					<div class="input-group">
						<div class="input-group-addon">Email</div>
  				    	<input type="email" class="form-control input-medium" name="email" id="email" placeholder="your@address.here">
					</div>
					<!--button type="submit" class="btn btn-primary"><? echo $subscribe_text[$global_lang]['button']; ?></button-->
				</form>
			</div>
		</div>
		<div class="col-md-6 text-right right-to-left" style="border-right: solid 4px #e0e0e0">
			<h4><? echo $download_text[$global_lang]; ?></h4>
			<a href="http://www.jetradar.com/ios/?marker=64686" target="_blank"><img src="/img/appstore.png"></a>
			<a href="http://www.jetradar.com/android/?marker=64686" target="_blank"><img src="/img/googleplay.png"></a>
		</div>
	</div>
	<hr>
</div>

</section>
