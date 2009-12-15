<script type="text/javascript">

$(document).ready(function(){
	$('.error').hide();
	$('#loader').hide();

	$('form').submit(function(event) {
		$('#loader').show();
		$('input[type=submit]', this).attr('disabled', 'disabled');
		$('input[type=submit]', this).attr('value', 'Sending...');
		
		var errors = false;
		
		//If either the name
		if ( $('#name').val() === null || $('#name').val() === '' ) {
			$('#name-error').slideDown('slow');
			$('input[type=submit]', this).attr('disabled', '');
			$('input[type=submit]', this).attr('value', 'Send');
			errors = true;
			$('#loader').hide();
			event.preventDefault();
		}
		
		//or the email are blank, show the error
		if ( ($('#email').val() === '') && $('#telephone').val() === '' ) {
			$('.te-error').slideDown('slow');
			$('input[type=submit]', this).attr('disabled', '');
			$('input[type=submit]', this).attr('value', 'Send');
			errors = true;
			$('#loader').hide();
			event.preventDefault();
		}
		if ( !errors ){
			var data = 'Name='+$('#name').val()+'&Company='+$('#company').val()+'&Telephone='+$('#telephone').val();
			data += '&Email='+$('#email').val()+'&franchise='+$('.franchise:checked').val()+'&new='+$('.new:checked').val();
			data += '&comments='+$('#comments').val();
			$.ajax({
				type: "GET",
				url: "contact_process.php",
				data: data,
				success: function(msg){
					alert(msg)
					$('input[type=submit]').attr('value', 'SENT!');
					$('#loader').hide();
				}
			});
			event.preventDefault();
		}
	});
	
	$('#name').keyup(function(){
			$('#name-error').slideUp('slow');
	});
	
	$('#telephone').keyup(function(){
			$('.te-error').slideUp('slow');
	});
	
	$('#email').keyup(function(){
		$('.te-error').slideUp('slow');
	});
});
</script>
<form name="jkcontact" method="post" action="contact_process.php" style="width:500px;" class="left">
	<fieldset>
		<legend>Contact Us</legend>
		
		<p>
        <div class="error" id="name-error">Please enter your name.</div>
		<label for="name">Name:</label><br />
		<input type="text" name="Name" id="name" class="title" />
		</p>
		
		<p>
		<label for="company">Company:</label><br />
		<input type="text" name="Company" id="company" class="text" />
		</p>
		
        <p>
		<div class="error te-error">Please enter your telephone number or an email address.</div>
        <label for="email">Email:</label><br />
		<input type="text" name="Email" id="email" class="text" />
		</p>

		<p>
		<div class="error te-error">Please enter your telephone number or an email address.</div>
        <label for="telephone">Telephone:</label><br />
		<input type="text" name="Telephone" id="telephone" class="text" />
		</p>
		
		<p>
		<label>What would you like to contact us about?</label><br />
		<input type="checkbox" class="franchise" name="franchise" value="true" />I would like information about owning a franchise.<br />
		<input type="checkbox" class="new" name="new" value="true" />I am a business owner that would like information about your services.<br />
		</p>
		
        <p>
        <label for="comments">Do you have any additional comments?</label><br />
		<textarea name="comments" id="comments"></textarea>
        </p>
		
		<p>
		<input name="Send" type="submit" id="send" value="Send" /><img src="images/ajax-loader.gif" alt="Sending..." id="loader"/>
		</p>
	</fieldset>
</form>