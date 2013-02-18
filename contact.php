<script type="text/javascript">
	
	$("document").ready(function(){
		
			$("#contactform").submit(function(){
				var subject = "Mail from Dr.Ebrahimi.com";
				var message = $("#message").val();
				var email = $("#email").val();
				var name = $("#name").val();
				$.ajax({
					url:"mailer.php",
					type:"POST",
					data: "name=" + name +"&email="+email
						+"&message=" + message,
					success: function(msg){
					$("#sent").html(msg);
					$("#sent").show('pulsate');
					$("#contactform #email").val("");
					$("#message").val("");
					$("#name").val("");
					
				}

			});
		});

			
	});
	</script>


<h3>Contact Information</h3>		
			
			<form id="contactform" action="javascript:void(0);">		
								
				<p>Please feel free to contact me by: 
				
				<h4>Phone</h4>
				
				<dl>
					<dt>Cell Phone</dt>
						<dd>(917) 279-4432 (AT&T)</dd>
					<dt>Office Phone</dt>
						<dd>(516) 876-8594</dd>
					<dt>School Of Business</dt>
						<dd>(516) 897-3331</dd>
				</dl>
				
				<h4>Email</h4>

				<dl>
					<dt>College Email</dt>
						<dd>ebrahimia@oldwestbury.edu</dd>
					<dt>Personal Email</dt>
						<dd>ebrahimidr@gmail.com</dd>
				</dl>
				
				<h4>Office Hours</h4>
				
				<dl>
					<dt>Tuesdays and Thurdays</dt>
						<dd>8:10am - 8:30am D222</dd>
						<dd>1:30pm - 3:00pm H208</dd>
					<dt>Other</dt>
						<dd>By Appointment</dd>
						
				</dl>
				
				If you prefer you may use this form to get in touch with me.
				</p>
				<div id=sent style="display:none;"></div>
				
				<p>	
					<label for="name">Your Name</label><br />
					<input id="name" name="name" type="text" tabindex="2" />
				</p>
			
				<p>
					<label for="email">Your Email Address</label><br />
					<input id="email" name="email" type="text" tabindex="3" />
				</p>
					
				<p>
					<label for="message">Your Message</label><br />
					<textarea id="message" name="message" rows="10" cols="20" tabindex="4"></textarea>
				</p>	
			
				<p class="no-border">
					<input class="button" type="submit" value="Submit" name="submit" tabindex="5" />
         		<input class="button" type="reset" value="Reset" tabindex="6" />	
				</p>
					
			</form>	