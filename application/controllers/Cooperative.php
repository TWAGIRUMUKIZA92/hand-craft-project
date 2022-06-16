<?php


class Cooperative extends CI_Controller
{
	public function __construct()
	{
		//call CodeIgniter's default Constructor
		parent::__construct();

		//load database libray manually
		$this->load->database();

		//load Model
		$this->load->model('CooperativeModel');

		//load session library
		$this->load->library('session');
	}
	public function login($page="Cooperative| Login"){
        $data['page']=$page;
        $data['error']="";
    if($this->input->post('login'))
		{ 
			$results=$this->CooperativeModel->selectUser();
            $row = $results->row();
            if ($this->input->post('coop_email')==$row->coop_email && $this->input->post('coop_pass')==$row->coop_pass) {                   
                    $adm_session_data = array('msg' =>$row->coop_id);
                    $this->session->set_userdata($adm_session_data);
                    redirect(base_url()."cooperative/index");
            }else {
                $data['error'] = "<span style='color:red'>Incorrect Credential</span>";
            }
        }
	
		$this->load->view('cooperative/inno_login',$data);
	}

	// public function login($page = 'Cooperative login'){
	// 	$data['page'] = ucfirst($page);

	// 	if($this->input->post('login'))
	// 	{  
	// 		$u=$this->input->post('cop_email');
	// 		$p=$this->input->post('cop_pass');
	// 		// $results=$this->CooperativeModel->selectUser();
	// 		// $query = $results->row();
	// 		if($u=='ITPro@getrwa.com' && $p=='test@123')
	// 		{
	// 			$this->session->set_flashdata('msg', $u );
	// 			redirect('cooperative/index');
	// 		}
	// 		else
	// 		{
	// 			$data['error']="<h5 style='color:red'>Invalid login Credential</h5>";
	// 		}
	// 	}

	// 	$this->load->view('cooperative/inno_login',$data);

	// }

	public function index($page = 'dashboard'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
			$data['page'] = ucfirst($page);
			$this->load->view('includes/header', $data);
			$this->load->view('cooperative/ino_dashboard');
			$this->load->view('includes/footer');
		}else {
			redirect('cooperative/login');
		}
	}

	public function help($page = 'Artisan Lists'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$result["data"]=$this->CooperativeModel->craftList();
		$this->load->view('includes/header',$data);
		$this->load->view('cooperative/chat' ,$result);
		$this->load->view('includes/footer');
		}
		else {
			redirect('cooperative/login');
		}
	}

	public function proDetails($page = 'Project'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$this->load->view('includes/header',$data);
		$this->load->view('cooperative/ino_pro_dashboard');
		$this->load->view('includes/footer');
		}else {
			redirect('cooperative/login');
		}
	}

	public function new_member($page = 'Add New Member'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$this->load->view('includes/header',$data);
		$this->load->view('cooperative/ino_requestJoin');
		$this->load->view('includes/footer');
		if ($this->input->post('addmember')){
			$fname = $this->input->post('m_fname');
			$lname = $this->input->post('m_lname');
			$mail = $this->input->post('m_email');
			$contact = $this->input->post('m_contact');
                        $age=$this->input->post('m_age');
                        $gender=$this->input->post('m_gender');
			$this->CooperativeModel->insert($fname, $lname, $mail, $contact,$age,$gender,$ses);

			redirect('cooperative/request');
			
		}
		}else {
			redirect('cooperative/login');
		}
	}
	public function new_craft($page="Add New Craft"){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$data['address']=$this->CooperativeModel->userInfo();
		$this->load->view('includes/header',$data);
		$this->load->view('cooperative/add_new_crafts');
		$this->load->view('includes/footer');
		if ($this->input->post('newcraft')){
		$config['upload_path']          = './assets/uploads/craft/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 0;

            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('crft_img'))
            {
                redirect("Cooperative/new_craft");
            }
            else
            {
                $datav = $this->upload->data();
                $quantity = $this->input->post("crft_quantity");
				$desc = $this->input->post("crft_desc");
                $price = $this->input->post("crft_price");                
                $file = "assets/uploads/craft/".$datav['file_name'];
                $this->CooperativeModel->save_craft($quantity, $file,$desc,$price,$ses);
    
                redirect("Cooperative/index");
            }
		}

		}else {
			redirect('cooperative/login');
		}
	}

	function supervisor($page = 'Supervisors Informations'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/header',$data);
		$this->load->view('cooperative/inno_supervisor');
		$this->load->view('includes/footer');
		}else {
			redirect('cooperative/login');
		}
	}

	function member($page = 'Member Group Informations'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/header',$data);
		$this->load->view('cooperative/inno_member');

		$this->load->view('includes/footer');
		}else {
			redirect('cooperative/login');
		}
	}

	function suspension($page = 'Suspension Request'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/header',$data);
		$this->load->view('cooperative/inno_suspension');
		}else {
			redirect('cooperative/login');
		}
	}

    public function settings($page="Cooperative | Settings Manage"){
		$sessionData=$this->session->userdata('msg');
		if($sessionData!="") {
            $data['page']="settings";
            $data['title']=$page;
            $data['address']=$this->CooperativeModel->userInfo();
            $this->load->view('includes/header',$data);
            $this->load->view('cooperative/setting');
            $this->load->view('includes/footer'); 
        }else {
            redirect(base_url() . 'Cooperative');
        }
	}

	public function newInnovation($page = 'New Innovation'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/header',$data);
		$this->load->view('cooperative/ino_regist');
		$this->load->view('includes/footer');
		}else {
			redirect('cooperative/login');
		}
	}

	public function update($page = 'Update Innovation'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/header',$data);
		$this->load->view('cooperative/ino_update');
		$this->load->view('includes/footer');
		}else {
			redirect('cooperative/login');
		}
	}

	public function proInfo($page = 'Innovation Details'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/header',$data);
		$this->load->view('cooperative/ino_pro_information');
		$this->load->view('includes/footer');
		}else {
			redirect('cooperative/login');
		}
	}

	public function canvas1($page = 'Phase 1'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/header',$data);
		$this->load->view('cooperative/inno_phase1_canvas');
		$this->load->view('includes/footer');
		}else {
			redirect('cooperative/login');
		}
	}

	public function updateInformation($page = 'Information'){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = $page;
		$this->load->view('includes/header',$data);
		$this->load->view('cooperative/inno_update_info');
		$this->load->view('includes/footer');
		}else {
			redirect('cooperative/login');
		}
	}

	public function craft_list($page = "Cart"){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
		$data['page'] = ucfirst($page);
		$data1["data"]=$this->CooperativeModel->selectCraft($ses);
		$this->load->view('includes/header',$data);
		$this->load->view('includes/craft_coop_list',$data1);
		$this->load->view('includes/footer');
		}
		else {
			redirect('cooperative/login');
		}
	}
	public function updateCraft($crft_id, $page= " Craft Update Form"){
		$ses=$this->session->userdata('msg');
		if($ses!="") {
			$data['page'] = ucfirst($page);
			$result["data"]=$this->CooperativeModel->selectCoopCraft($crft_id);
			$this->load->view('includes/header',$data);
			$this->load->view('cooperative/craft_update',$result);
			$this->load->view('includes/footer');
			if($this->input->post('updatecraft')) {
				$quantity = $this->input->post('crft_quantity');
				$price = $this->input->post('crft_price');
				$desc = $this->input->post('crft_desc');
				$this->CooperativeModel->updatecraft($quantity, $price, $desc, $crft_id);
				redirect('Cooperative/craft_list');
			}
			}
		else {
			redirect('cooperative/login');
		}
	}

	public function logout(){
		$this->session->unset_userdata('msg');
		redirect('home');
	}
	public function reset($page='Cooperative| Reset')
    {
        $data['page']=$page;
        $data['error']="";
     $results=$this->CooperativeModel->selectCooperative();
        
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
                
                $this->CooperativeModel->reset($pass);
                redirect(base_url() . 'Cooperative');

            }else {
                $data['error'] = "<span style='color:red'>Incorrect provided information</span>";
            }
        }
		$this->load->view('Cooperative/reset',@$data);
    }
	public function changeInfo(){
		$sessionData=$this->session->userdata('msg');
		if($sessionData!="") {
            $email = $this->input->post('coop_email');
            $tel = $this->input->post('coop_tel');
            $this->CooperativeModel->saveinfo($email, $tel);
            
            redirect("Cooperative/settings"); 
        }else {
            $data['error'] = "<span style='color:red'>provided information does not Changed.</span>";
        }
	}

    public function changePassword(){
		$sessionData=$this->session->userdata('msg');
		if($sessionData!="") {
            $pass = $this->input->post('newPassword');
            $this->CooperativeModel->saveinfopass($pass);
            
            redirect("cooperative/settings"); 
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

