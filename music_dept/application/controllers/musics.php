<?php 


	/**
	* 
	*/
	class Musics extends Ci_Controller
	{
		

	
		public function upload_form()
		{
			$this->load->view('templates/header');
			$this->load->view('music/upload_form');
			$this->load->view('templates/footer');
		}




		public function create()
		{
			$this->form_validation->set_rules('artist', 'Artist name', 'trim|required');
			$this->form_validation->set_rules('title', 'track title', 'trim|required');
			$this->form_validation->set_rules('category', 'category', 'trim|required');


			if ($this->form_validation->run()=== false) {
				$this->load->view('templates/header');
				$this->load->view('music/upload_form');
				$this->load->view('templates/footer');			
				} else{



				$config['upload_path'] = './assets/uploads';
				$config['allowed_types'] = 'mp3';
				$config['max_size']  = '5000';
				
				$this->load->library('upload', $config);
				
				if ( ! $this->upload->do_upload('userfile')){
					echo "an error has occured";
				}else{
					$data = array('upload_data' => $this->upload->data());
					// $music_file = $_FILES['userfile'][name];
					echo "success";
				}; 

				$data = [
					'artist' => $this->input->post('artist'),
					'music_title' => $this->input->post('title'),
					'category' => $this->input->post('category'),
					'uploaded_by' => 'admin',
					'music_file' => $this->upload->data('file_name')
				];

				$this->music_model->upload_music($data);
				redirect('home');






			}


		
		}



		








	}



?>