<?php

class Login_controller extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('Main_model');

	}

	function index(){
		// $this->load->view('header');
		$this->load->view('login');
	}

	function call_register(){
		$this->load->view('register');
	}

	function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);

		$cek_admin = $this->Main_model->get_user("admin",$where)->num_rows();
		$cek_user = $this->Main_model->get_user("user",$where)->num_rows();
		if($cek_admin > 0){

			$data_session = array(
				'name' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			//redirect(base_url("admin"));
      	redirect('Main_controller/dashboard');
		}else if($cek_user > 0){
			$data_session = array(
				'name' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			redirect('Main_controller/main_user');
		}
		else {
			echo "Something WRONG !!!";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login_controller/index'));
	}

	function register(){
		$username = $this->input->post('username');
		$data['username'] = $this->input->post('username');
		$data['address'] = $this->input->post('address');
		$data['password'] = md5($this->input->post('password'));
		$where = array(
			'username' => $username
			);
		$cek_user = $this->Main_model->get_user("user",$where)->num_rows();
		if($cek_user > 0){
			redirect(base_url('Login_controller/call_register'));
		}
		else{
		$this->Main_model->add_user($data,'user');
		redirect(base_url('Main_controller/index'));
		}
		
	}

	function call_edit_user($username){
		$username = array('username' => $username);
		$data['user_data'] = $this->Main_model->edit_data($username,'user')->result();
		$this->load->view('edit_user',$data);
	}

	function edit_user(){
		$id_user = $this->input->post('id_user');
		$data['username'] = $this->input->post('username');
		$data['address'] = $this->input->post('address');
		$data['password'] = md5($this->input->post('password'));
		$where = array(
			'id_user' => $id_user
		);
		$this->Main_model->update_data($where,$data,'user');
		redirect('Main_controller/main_user');

	}

	function update_user(){
		$id_user = $this->input->post('id_user');
		$data['username'] = $this->input->post('username');
		$data['address'] = $this->input->post('address');
		$where = array(
			'id_user' => $id_user
		);
		$this->Main_model->update_data($where,$data,'user');
		redirect('Main_controller/dashboard');
	}


	function delete_user($id_user){
		$where = array('id_user' => $id_user);
		$this->Main_model->delete_data($where,'user');
		redirect('Main_controller/dashboard');
	}
}
