			<form id="signin_student" class="form-signin" method="post">
			<h3 class="form-signin-heading"></i> Sign up as Student </h3>
			<p1> Fill in the form below. If you fail to login please contact the registrar or admin.  </p1>
			<input type="text" class="input-block-level" id="username" name="username" placeholder="ID Number" required>
			<input type="text" class="input-block-level" id="firstname" name="firstname" placeholder="Firstname" required>
			<input type="text" class="input-block-level" id="lastname" name="lastname" placeholder="Lastname" required>
		
			<input type="password" class="input-block-level" id="password" name="password" placeholder="Password" required>
			<input type="password" class="input-block-level" id="cpassword" name="cpassword" placeholder="Re-type Password" required>
			<button id="signin" name="login" class="btn btn-info" type="submit"></i> Sign in</button>
			</form>
			
		
			
			<script>
			jQuery(document).ready(function(){
			jQuery("#signin_student").submit(function(e){
					e.preventDefault();
						
						var password = jQuery('#password').val();
						var cpassword = jQuery('#cpassword').val();
					
					
					if (password == cpassword){
					var formData = jQuery(this).serialize();
					$.ajax({
						type: "POST",
						url: "student_signup.php",
						data: formData,
						success: function(html){
						if(html=='true')
						{
						$.jGrowl("Welcome to Alamban Learning Management System", { header: 'Sign up Success' });
						var delay = 2000;
							setTimeout(function(){ window.location = 'dashboard_student.php'  }, delay);  
						}else if(html=='false'){
							$.jGrowl("student does not found in the database Please Sure to Check Your ID Number or Firstname, Lastname and the Section You Belong. ", { header: 'Sign Up Failed' });
						}
						}
						
						
					});
			
					}else
						{
						$.jGrowl("student does not found in the database", { header: 'Sign Up Failed' });
						}
				});
			});
			</script>

			
		
			<a onclick="window.location='index.php'" id="btn_login" name="login" class="btn" type="submit"></i> Back to Login Page</a>
			
			
			
				
		
					