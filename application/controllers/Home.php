<?php


class Home extends CI_Controller
{
	public function index(){
		$this->load->view('includes/homeHeader');
		$this->load->view('vistor/home');
		$this->load->view('includes/footer');
	}

	public function about_us(){
		$this->load->view('includes/homeHeader');
		$this->load->view('vistor/about_us');
		$this->load->view('includes/footer');
	}

	public function contact_us(){
		$this->load->view('includes/homeHeader');
		$this->load->view('vistor/contactus');
		$this->load->view('includes/footer');
	}
	public function custumer_detail(){
		$this->load->view('includes/homeHeader');
		$this->load->view('vistor/vist_details');
		$this->load->view('includes/footer');
	}
	public function initial_invoice(){
		$this->load->view('includes/homeHeader');
		$this->load->view('vistor/invoice_initial');
		$this->load->view('includes/footer');
	}
	public function invoice(){
		$this->load->view('includes/homeHeader');
		$this->load->view('vistor/final_invoice');
		$this->load->view('includes/footer');
	}
}
