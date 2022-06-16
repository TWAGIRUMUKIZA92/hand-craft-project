<?php


class College extends CI_Controller
{
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();

		//load session library
		$this->load->library('session');
	}

	function login($page = 'college login'){
		$data['page'] = ucfirst($page);

		if($this->input->post('login'))
		{
			$u=$this->input->post('uname');
			$p=$this->input->post('pass');
			if($u=="college@test.com" && $p=="test@123")
			{
				$this->session->set_flashdata('msg', $u );
				redirect('college/index');
			}
			else
			{
				$data['error']="<h5 style='color:red'>Invalid login details</h5>";
			}
		}

		$this->load->view('college/col_login',$data);
	}

	function index($paga='College Dashboard'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$paga;
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/col_dashboard');
		$this->load->view('includes/footer');
		}else {
			redirect('college/login');
		}
	}

	public function Mentors($page = 'Mentor List'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/col_inno_mentors');
		$this->load->view('includes/footer');
		}else {
			redirect('college/login');
		}
	}

	public function report($page = 'innovation Report'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/col_inno_report');
		$this->load->view('includes/footer');
		}else {
			redirect('college/login');
		}
	}

	public function request($page = 'Innovation Request'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/col_inno_req');
		$this->load->view('includes/footer');
		}else {
			redirect('college/login');
		}
	}

	public function newMentor($page = 'Regist Mentor'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/col_New_MentorForm');
		$this->load->view('includes/footer');
		}else {
			redirect('college/login');
		}
	}
	public function total($page = 'Innovation Total'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/col_inno_total');
		$this->load->view('includes/footer');
		}else {
			redirect('college/login');
		}
	}
	public function accepted($page = 'Innovation Accepted'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/col_inno_accepted');
		$this->load->view('includes/footer');
		}else {
			redirect('college/login');
		}
	}
	public function failed($page = 'Innovation Failed'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/col_inno_fail');
		$this->load->view('includes/footer');
		}else {
			redirect('college/login');
		}
	}
	public function suspended($page = 'Innovation Suspended'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/col_inno_suspended');
		$this->load->view('includes/footer');
		}else {
			redirect('college/login');
		}
	}
	public function completed($page = 'Innovation Completed'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/col_inno_completed');
		$this->load->view('includes/footer');
		}else {
			redirect('college/login');
		}
	}
	public function promote($page = 'Promote Innovation'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/col_promote_inno');
		$this->load->view('includes/footer');
		}else {
			redirect('college/login');
		}
	}
	public function suspension($page = 'Ask Suspension'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/col_suspension');
		$this->load->view('includes/footer');
		}else {
			redirect('college/login');
		}
	}
	public function setting($page = 'Account Setting'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/col_accountSettings');
		}else {
			redirect('college/login');
		}
	}



	public function evaluation($page = 'Evaluation'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('college/inno_evaluation');
		$this->load->view('includes/footer');
		}else {
			redirect('college/login');
		}
	}

	public function chat($page = 'Chat'){
		$data['page'] = $page;
		$this->load->view('includes/collegeheader',$data);
		$this->load->view('includes/chat');
		$this->load->view('includes/footer');
	}

	public function logout(){
		$this->session->unset_userdata('msg');
		redirect('home');
	}

}
