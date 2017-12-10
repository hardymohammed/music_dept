
<?php 
	if (validation_errors()) {
		echo "<div class='callout warning text-center'>".validation_errors(). "</div> ";
	}

 ?>

<div class="grid-container">
	<div class="grid-x align-center">
		

	<div class="cell medium-5">
			<?php echo form_open_multipart('musics/create'); ?>
		  <div class="form-icons">
		    <h4>Upload your music track</h4>
			
			<div class="input-group">
				
				<label for="exampleFileUpload" class="button expanded"> <i class="fa fa-upload"></i>upload music file</label>
				<input type="file" id="exampleFileUpload" name="userfile" class="show-for-sr">
			</div>
		
		    <div class="input-group">
		      <span class="input-group-label">
		        <i class="fa fa-play"></i>
		      </span>
		      <input class="input-group-field" type="text" name="artist" placeholder="Artist name" required>
		    </div>
		
		    <div class="input-group">
		      <span class="input-group-label">
		        <i class="fa fa-headphones"></i>
		      </span>
		      <input class="input-group-field" type="text" name="title" placeholder="Music title" required>
		    </div>
		
		    <div class="input-group">
		      <select name="category">
		      	<option value="hippop">Hippop</option>
		      	<option value="hiplife">HipLife</option>
		      	<option value="hi-life">Hi-Life</option>
		      	<option value="cools">Cools</option>
		      	<option value="afro-pop">Afro pop</option>
		      </select>
		    </div>
		  </div>
		
		  <input type="submit" value="upload music" class="button expanded">
		</form>
	</div>
	</div>
</div>




