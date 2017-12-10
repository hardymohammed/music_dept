<?php 

	/**
	* 
	*/
	class Categories extends Ci_Controller
	{
		
		public function create_cat()
		{
			echo "this is cool with ajax";
		}


		public function show_cat()
		{
			
			 	$this->load->view('templates/header');
				$this->load->view('music/categories');
				$this->load->view('templates/footer');
		}

	}


 ?>
	
