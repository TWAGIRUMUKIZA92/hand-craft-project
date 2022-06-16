<?php


class Rp extends CI_Controller
{
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();

		//load session library
		$this->load->library('session');
	}

	public function login($page = 'rp login'){
		$data['page'] = ucfirst($page);

		if($this->input->post('login'))
		{
			$u=$this->input->post('uname');
			$p=$this->input->post('pass');
			if($u=="rp@test.com" && $p=="test@123")
			{
				$this->session->set_flashdata('msg', $u );
				redirect('rp/index');
			}
			else
			{
				$data['error']="<h5 style='color:red'>Invalid login details</h5>";
			}
		}
		$this->load->view('rp/rp_login',$data);
	}

	public function index($page ='Dashboard')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/rp_viewR&D');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}

	public function report($page = 'college and School Report'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/rp_collegeReport');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}

	public function newCollege($page = 'college/School registration'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/rp_addCollege');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}

	public function newUser($page = 'User registration'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/rp_registerUser');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}

	function action($page='RP Administrator'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/rp_activateUser');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}

	}

	public function reportDetails($page = 'College/School Report'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/rpheader',$data);;
		$this->load->view('rp/rp_college_report');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}

	public function rd($page ='R&D Report')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/rp_viewR&D');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}

	public function collegeAction($page ='College Activation And Diactivation')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/collegeAction');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}

	public function setting($page ='Setting')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/rp_accountSettings');
		}else {
			redirect('rp/login');
		}
	}
	public function details($page ='Setting')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/rpReport/rp_inno_details');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}

	}
	function suspension($page ='Suspended projects')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/rpReport/rp_inno_suspended');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}
	function accepted($page ='Accepted innovation projects')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/rpReport/rp_inno_accepted');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}
	function failed($page ='Failed innovation projects')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/rpReport/rp_inno_failed');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}
	function total($page ='Total innovation projects')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/rpReport/rp_inno_total');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}

	function completed($page ='completed innovation projects')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);
		$this->load->view('rp/rpReport/rp_inno_completed');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}

	//Detail information
	function completedDetails($page ='completed innovation projects')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);

		$this->load->view('rp/rpReport/inno_completedDetails');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}
	//end Dea
	//Detail Accepted innvotion Details information
	function acceptedDetails($page ='This project was Accepted ')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);

		$this->load->view('rp/rpReport/inno_acceptedDetails');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}
	//end Detail Accepted innvotion Details information

	//Detail suspended innvotion Details information
	function suspendedDetails($page ='This project was Suspended ')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);

		$this->load->view('rp/rpReport/inno_suspendedDetails');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}

	function failedDetails($page ='This project was failed')
	{
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page']=$page;
		$this->load->view('includes/rpheader',$data);

		$this->load->view('rp/rpReport/inno_failedDetails');
		$this->load->view('includes/footer');
		}else {
			redirect('rp/login');
		}
	}

	public function chat($page = 'Chat'){
		$data['page'] = $page;
		$this->load->view('includes/rpheader',$data);
		$this->load->view('includes/chat');
		$this->load->view('includes/footer');
	}

	public function logout(){
		$this->session->unset_userdata('msg');
		redirect('home');
	}

}

