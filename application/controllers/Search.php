<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->template->set('lang', 'zh-TW');
	}

	public function index(){

	}

	public function result(){
		$queryStr=$this->input->post('searchStr');
		$data=array(
			'queryStr' => $queryStr,
		);
		$this->template->render('search/result', $data);
	}
}