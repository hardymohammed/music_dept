<div class="music-banner grid-container text-center">
	<div class="banner-content"><h3>freedom to listen</h3>
		<a href="<?php echo base_url(); ?>user/signup" class="button success"> sign up</a> 
	</div>
</div>

<div class="grid-container search-group">
	<div class="grid-x grid-margin-x">
		<div class="cell medium-3 "><a href="#" class="button  expanded dropdown alert">browse category</a></div>
		  <ul class=" cell medium-7">
			<div class="input-group">
			  <input class="input-group-field" type="search" placeholder="search your for artist, song.......">
			  <div class="input-group-button">
			    <input type="submit" class="button primary" value="search">
			  </div>
			</div>
    </ul>
	
		<div class="cell medium-2"><a href="#" class="button success expanded ">upload new</a></div>
	</div>
</div>



<div class="grid-container">
	<div class="audio-track card">
		<div class="grid-x align-center ">
			<div class="cell medium-8">
					<div class="cell medium-8 audio">
						<div class="music-content">
							<p>Artist name <br> <span class="track-name">just the way you are</span> </p>
						</div>
							<audio  controls="" >
								<source src="<?php echo base_url().'assets/uploads/el.mp3' ?>" type="audio/mp3" media="">
							</audio>
					</div>
			</div>				
		</div>
	</div>
</div>
