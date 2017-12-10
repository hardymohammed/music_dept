<?php 




class Users extends CI_Controller {

	function sign_up()
	{
		 	$this->load->view('templates/header');
			$this->load->view('user/signup');
			$this->load->view('templates/footer');
	}



	function create_user()
	{
		$this->form_validation->set_rules('name', 'Name', 'trim|required|unique',
							array('unique'=>'the username is already in use, please use another one'));
		$this->form_validation->set_rules('email', 'Email', 'valid_email|required|unique',
							array('unique'=>'the email is already in use, please use another one'));
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('passconf', 'Confirm Password', 'trim|required|matches[password]');

		if ($this->form_validation->run() == false){
			$this->load->view('templates/header');
			$this->load->view('user/signup');
			$this->load->view('templates/footer');
		}else {
			$this->user_model->register_user();
			redirect('music');
		}



	}


	public function home_view($value='')
	{
		$this->load->view('templates/header');
		$this->load->view('user/dashboard');
		$this->load->view('templates/footer');
	}




























}




 ?>