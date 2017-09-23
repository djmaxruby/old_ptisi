<div class="modal fade" id="mail-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

	<form class="form-horizontal" method="post" action="/sendemail.php" target="_blank" id="sendmessage_form">

	<div class="modal-dialog" role="document">
    	<div class="modal-content">
    		<div class="modal-header">
    			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        		<h4 class="modal-title" id="myModalLabel"><? echo $email_window[$global_lang]['title']; ?></h4>
      		</div>
    		<div class="modal-body">

					<div class="form-group">
				 	    <label for="input_name" class="col-sm-2 control-label"><? echo $email_window[$global_lang]['name']; ?></label>
				 	    <div class="col-sm-10">
					        <input type="text" class="form-control" id="input_name" name="input_name" placeholder="John Smith">
					    </div>
					</div>
					<div class="form-group">
				 	    <label for="input_email" class="col-sm-2 control-label">E-mail:</label>
				 	    <div class="col-sm-10">
					        <input type="email" class="form-control" id="input_email" name="input_email" placeholder="your@address.here">
					    </div>
					</div>
				 	<div class="form-group">
				    	<label for="input_subject" class="col-sm-2 control-label"><? echo $email_window[$global_lang]['subject']; ?></label>
				    	<div class="col-sm-10">
				    		<input type="text" class="form-control" id="input_subject" name="input_subject" placeholder="Subject">
				    	</div>
					</div>
					<div class="form-group">
				    	<label for="input_subject" class="col-sm-2 control-label"><? echo $email_window[$global_lang]['message']; ?></label>
				    	<div class="col-sm-10">
				    		<textarea class="form-control" id="input_text" name="input_text" placeholder="Message here" rows="5" style="resize: none;"></textarea>
				    	</div>
					</div>
 
    		</div>
    		<div class="modal-footer">
        		<button type="button" class="btn btn-default" data-dismiss="modal"><? echo $email_window[$global_lang]['cancel']; ?></button>
        		<input type="submit" class="btn btn-primary" type="submit" value="<? echo $email_window[$global_lang]['send']; ?>">
    		</div>
   		</div>
	</div>

	</form>
</div>
