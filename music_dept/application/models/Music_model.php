<?php 


/**
* 
*/
class Music_model extends Ci_Model
{
	
	// function __construct(argument)
	// {
	// 	# code...
	// }


	public function register_user()
	{
		$data =[
			'name'    => $this->input->post('name'),
			'email'       => $this->input->post('email'),
			'password'    => $this->input->post('password'),
		];


		return $this->db->insert('users', $data);

	}


	public function upload_music($data)
	{
		return $this->db->insert('music_upload', $data);
	}









	
}















 ?>