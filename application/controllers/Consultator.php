<?php
class Consultator extends CI_Controller
{
    public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();

		//load database libray manually
		$this->load->database();

		//load Model
		$this->load->model('ConsultatorModel');

		//load session library
		$this->load->library('session');
    }
    public function login($page="Consultator| Login"){
        $data['page']=$page;
        $data['error']="";
    if($this->input->post('login'))
		{ 
			$results=$this->ConsultatorModel->selectUser();
            $row = $results->row();
            if ($this->input->post('coop_email')==$row->coop_email && $this->input->post('coop_pass')==$row->coop_pass) {                   
                    $adm_session_data = array('msg' =>$row->coop_id);
                    $this->session->set_userdata($adm_session_data);
                    redirect(base_url()."consultator/index");
            }else {
                $data['error'] = "<span style='color:red'>Incorrect Credential</span>";
            }
        }
	
		$this->load->view('consultator/consul_login',$data);
	}
    public function index($page = 'dashboard'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
			$data['page'] = ucfirst($page);
			$data['dataif']=$this->ConsultatorModel->get_sum_count_craft();
			$data['deleteif']=$this->ConsultatorModel->get_delete_count_craft();
			$this->load->view('includes/consul_header', $data);
			$this->load->view('consultator/consul_dashboard',$data);
			$this->load->view('includes/consul_footer');
		}else {
			redirect('consultator/login');
		}
	}
    public function request($page="Constructor | Requested"){
        $ses=$this->session->userdata('msg');
        if($ses!="")
        {
            $data['page'] = ucfirst($page);
            $results['data']=$this->ConsultatorModel->select_Request();
            $this->load->view('include/consul_header');
            $this->load->view('consultator/consul_requesed',$results);
            $this->load->view('include/consul_footer');
        }
        else {
			redirect('consultator/login');
		}
    }
    public function craft_list($page = "Craft List"){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$data["data"]=$this->ConsultatorModel->selectCraft();
		$this->load->view('includes/consul_header',$data);
		$this->load->view('consultator/craft_coop_list',$data);
		$this->load->view('includes/consul_footer');
		}
		else {
			redirect('consultator/login');
		}
	}
    public function coop_list($page = "Cooperative List"){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$data["data"]=$this->ConsultatorModel->selectCooperative();
		$this->load->view('includes/consul_header',$data);
		$this->load->view('consultator/cooperative_list',$data);
		$this->load->view('includes/consul_footer');
		}
		else {
			redirect('consultator/login');
		}
	}
    public function requested_list($page = "Requested List"){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$data["data"]=$this->ConsultatorModel->selectCooperative();
		$this->load->view('includes/consul_header',$data);
		$this->load->view('consultator/requested_list',$data);
		$this->load->view('includes/consul_footer');
		}
		else {
			redirect('consultator/login');
		}
	}
    public function settings($page="Consultator | Settings Manage"){
		$sessionData=$this->session->userdata('msg');
		if($sessionData!="") {
            $data['page']="settings";
            $data['title']=$page;
            $data['address']=$this->ConsultatorModel->userInfo($sessionData);
            $this->load->view('includes/consul_header',$data);
            $this->load->view('consultator/setting');
            $this->load->view('includes/consul_footer'); 
        }else {
            redirect(base_url() . 'Consultator');
        }
	}
    public function logout(){
		$this->session->unset_userdata('msg');
		redirect('home');
	}
    public function reset($page='Consultator| Reset Password')
    {
        $data['page']=$page;
        $data['error']="";
     $results=$this->ConsultatorModel->selectCooperative();
        
        if($this->input->post('coop_email') != "" && $this->input->post('coop_tel') != "")
        {            
            $row = $results->row();
            $pass =bin2hex(openssl_random_pseudo_bytes(2));
            if ($row->cop_email == $this->input->post('coop_email') && $row->coop_tel == $this->input->post('coop_tel')) {
                $curl = curl_init();

                curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://api.mista.io/sms',
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'POST',
                        CURLOPT_POSTFIELDS => array('to' => '+250780406161','from' =>'happyxmas','unicode' =>'0','sms'=>$pass,'action'=>'send-sms'),
                        CURLOPT_HTTPHEADER => array('x-api-key:9eaec8c7-9d89-97c5-ab53-ac051d19c577-09fb9cb4'
                        ),
                ));
               
                $response = curl_exec($curl);
               
                curl_close($curl); 
                
                $this->ConsultatorModel->reset($pass);
                redirect(base_url() . 'Consultator');

            }else {
                $data['error'] = "<span style='color:red'>Incorrect provided information</span>";
            }
        }
		$this->load->view('Consultator/reset',@$data);
    }
	public function changeInfo(){
		$sessionData=$this->session->userdata('msg');
		if($sessionData!="") {
            $email = $this->input->post('coop_email');
            $tel = $this->input->post('coop_tel');
            $this->ConsultatorModel->saveinfo($email, $tel);
            
            redirect("Consultator/settings"); 
        }else {
            $data['error'] = "<span style='color:red'>provided information does not Changed.</span>";
        }
	}

    public function changePassword(){
		$sessionData=$this->session->userdata('msg');
		if($sessionData!="") {
            $pass = $this->input->post('newPassword');
            $this->ConsultatorModel->saveinfopass($pass);
            
            redirect("consultator/settings"); 
        }else {
            $data['error'] = "<span style='color:red'>Password does not changed,Please try again.</span>";
        }
	}

    public function changePassword1(){
            $results=$this->CooperativeModel->selectCooperative();            
            $row = $results->row();

            $pass = $this->input->post('newPassword');  
            $this->CooperativeModel->saveinfopass($pass);                 
                $adm_session_data = array('userid' => $row->u_id);
                $this->session->set_userdata($adm_session_data);
                
                redirect("Cooperative/index");
	}
}
?>