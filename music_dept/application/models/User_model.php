<?php 


/**
* 
*/
class User_model extends Ci_Model
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
			'profile_pic' => $this->input->post('profile_pic')
		];


		return $this->db->insert('users', $data);

	}









	
}















 ?>