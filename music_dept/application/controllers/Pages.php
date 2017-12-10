<?php

class Pages extends CI_Controller {

function view($page = home){
	if (!file_exists(APPPATH.'/views/pages/'.$page.'.php')) {
		show_404();
	}

	$data['title'] = ucwords($page) ;

	if ($page == 'home') {
		$this->load->view('pages/home', $data);
		}else{

	$this->load->view('templates/header');
	$this->load->view('pages/'.$page , $data);
	$this->load->view('templates/footer');
		}
}

	
}
