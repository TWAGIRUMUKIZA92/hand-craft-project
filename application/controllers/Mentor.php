<?php


class Mentor extends CI_Controller
{
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();

		//load session library
		$this->load->library('session');
	}

	public function login($page = 'mentor login'){
		$data['page'] = ucfirst($page);

		if($this->input->post('login'))
		{
			$u=$this->input->post('uname');
			$p=$this->input->post('pass');
			if($u=="mentor@test.com" && $p=="test@123")
			{
				$this->session->set_flashdata('msg', $u );
				redirect('mentor/index');
			}
			else
			{
				$data['error']="<h5 style='color:red'>Invalid login details</h5>";
			}
		}

		$this->load->view('mentor/mentor_login',$data);
	}

	public function index($page = 'Dashboard'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/mentorheader',$data);
		$this->load->view('mentor/mentor_dashboard');
		$this->load->view('includes/footer');
		}else {
			redirect('mentor/login');
		}
	}

	public function myProject($page = 'My projects'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/mentorheader',$data);
		$this->load->view('mentor/mentor_project_list');
		$this->load->view('includes/footer');
		}else {
			redirect('mentor/login');
		}
	}

	public function details($page = 'My projects'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/mentorheader',$data);
		$this->load->view('mentor/mentor_project_details');
		$this->load->view('includes/footer');
		}else {
			redirect('mentor/login');
		}
	}

	public function chat($page = 'Chat'){
		$data['page'] = $page;
		$this->load->view('includes/mentorheader',$data);
		$this->load->view('includes/chat');
		$this->load->view('includes/footer');
	}

	public function logout(){
		$this->session->unset_userdata('msg');
		redirect('home');
	}

}
