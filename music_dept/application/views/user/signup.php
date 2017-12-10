
<?php 
	if (validation_errors()) {
		echo "<div class='callout warning text-center'>".validation_errors(). "</div> ";
	}

 ?>

<div class="grid-container">
	<div class="grid-x align-center">
		
		<form method="post" action="register" class="cell form medium-5">
		  <div class="form-icons">
		    <h4>Register for an account</h4>
			
			<div class="input-group">
				
				<label for="exampleFileUpload" class="button expanded"> <i class="fa fa-upload"></i> Upload profile picture</label>
				<input type="file" id="exampleFileUpload" name="profile_pic" class="show-for-sr">
			</div>

		    <div class="input-group">
		      <span class="input-group-label">
		        <i class="fa fa-user"></i>
		      </span>
		      <input class="input-group-field" type="text" name="name" placeholder="Full name" required>
		    </div>

		    <div class="input-group">
		      <span class="input-group-label">
		        <i class="fa fa-envelope"></i>
		      </span>
		      <input class="input-group-field" type="email" name="email" placeholder="Email" required>
		    </div>

		    <div class="input-group">
		      <span class="input-group-label">
		        <i class="fa fa-key"></i>
		      </span>
		      <input class="input-group-field" type="password" name="password" placeholder="Password" required>
		    </div>
		    <div class="input-group">
		      <span class="input-group-label">
		        <i class="fa fa-key"></i>
		      </span>
		      <input class="input-group-field" type="password" name="passconf" placeholder="confirm password" required>
		    </div>
		  </div>

		  <button class="button expanded">Sign Up</button>
		</form>
	</div>
</div>




