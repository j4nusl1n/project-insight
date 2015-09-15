<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Insight extends MY_Controller {
	public function __construct(){
		parent::__construct();
		$this->template
			->set('lang', 'zh-TW')
			->set('twitchAPIBaseUrl', 'https://api.twitch.tv/kraken/');
	}

	public function index(){
		$this->template
			->add_title_segment('Home')
			->render('insight/home');
	}

	public function games($gameList=''){
		//$gameList=(array)json_decode(json)
		$data=array(
			'gameList' => $gameList,
		);
		$this->template
			->add_title_segment('Games')
			->render('insight/games', $data);
	}

	public function channels($channelList=''){
		$data=array(
			'channelList' => $channelList,
		);
		$this->template
			->add_title_segment('Channels')
			->render('insight/channels', $data);
	}
}