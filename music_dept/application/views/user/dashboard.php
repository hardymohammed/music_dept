
<div class="grid-container">
	<div class="grid-x dashboard grid-margin-x">
		<div class="cell medium-4 user card ">
			<div class="user-info text-center">
				<img src=" <?php echo base_url().'/assets/img/profile/profile.png' ?>" alt="" >
				<div class="user-content">
					<h4>Haadi mohammed</h4>
					<ul>
						<li>Level: 300</li>
						<li>Index Number: 5150320053</li>
					</ul>
				</div>
				<hr>
				<a href="#" class="button primary">edit profile</a>	
				<hr>
				<ul class="vertical menu accordion-menu" data-accordion-menu>
				  <li>
				    <a href="#" class="button success expanded"><i class="fa fa-id-card" aria-hidden="true"></i> Users</a>
				    <ul class="menu vertical nested">
				      <li><a href="#">All users</a></li>
				      <li><a href="#">Add new user</a></li>
				    </ul>
				  </li>
				  <li><a href="#" class="button expanded"><i class="fa fa-database" aria-hidden="true"></i> Music Uploads</a>
					<ul class="menu vertical nested">
						<li><a href="#">Upload new</a></li>
						<li><a href="#">All uploads</a></li>
						<li><button  data-open="exampleModal1">Add category</button></li>
						<li><a href="#">All category</a></li>
					</ul>
				  </li>
				</ul>
			</div>
		</div>


		<div class="cell medium-8">
			<div class="card side-bar">
				<div class="grid-x grid-margin-x">
					<div class="cell medium-4">
						<a href="#" class="button primary hollow expanded">users <span>213</span></a>
					</div>
					<div class="cell medium-4">
						<a href="#" class="button warning hollow expanded">uploads <span>23</span></a>
					</div>
					<div class="cell medium-4">
						<a href="#" class="button alert hollow expanded">requests <span>113</span></a>
					</div>
				</div>
					<hr>
				<div class="grid-x">
					<div class="cell">
						<h3 >recently added user</h3>
						<hr>
						<table>
						  <thead>
						    <tr>
						      <th width="200">Username</th>
						      <th>Email</th>
						      <th width="150">Level</th>
						      <th width="150">Date created</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td>king of</td>
						      <td>This is us.</td>
						      <td>Content </td>
						      <td>Content </td>
						    </tr>
						    <tr>
						      <td>Content </td>
						      <td>This is  metus.</td>
						      <td>Content Here</td>
						      <td>Content  Here</td>
						    </tr>
						   
						  </tbody>
						</table>
					</div>
				</div> <!--end of recently added user container -->
				<hr>
				<div class="grid-x">
					<div class="cell">
						<h3 >recently added tracks</h3>
						<hr>
						<table>
						  <thead>
						    <tr>
						      <th width="200">track name</th>
						      <th>artist</th>
						      <th width="150">uploaded by</th>
						      <th width="150">category</th>
						    </tr>
						  </thead>
						  <tbody>
						    <tr>
						      <td>king of</td>
						      <td>This is us.</td>
						      <td>Content </td>
						      <td>Content </td>
						    </tr>
						    <tr>
						      <td>Content </td>
						      <td>This is  metus.</td>
						      <td>Content Here</td>
						      <td>Content  Here</td>
						    </tr>
						   
						  </tbody>
						</table>
					</div>
				</div> <!--end of recently added user container -->

			</div>
		</div>
	</div>
</div>
<!-- categories modal -->
<div class="reveal" id="exampleModal1" data-reveal>
  <h1>Add new category</h1>
	
	<form action="categories/create" id="cat_form">
		<input type="text" placeholder="Enter category name" id="name">
		<input type="submit" class="button expanded" value="Add category">
	</form>


  <button class="close-button" data-close aria-label="Close modal" type="button">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<!-- categories modal end -->



