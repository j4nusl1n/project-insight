<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends MY_Controller{

	public function __construct(){

		parent::__construct();
		//echo "test";exit(0);
		//$this->load->library('template');

	}

	public function index(){
		$this->template->add_title_segment('Homepage');
		$this->template->set('lang', 'zh-TW');

		$this->template->render('home/home');
	}

	public function send_email(){
		var_dump($this->input->post());exit(0);
	}

	public function test(){
		$this->template->render('home/test');
	}
}