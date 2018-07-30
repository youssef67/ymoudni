<?php

class HomeController extends AppController
{
	public $helpers = array('Html');

	public function index()
	{
		$this->set('title', 'home');
		$this->layout = 'home';
	}

	public function aboutMe()
	{
		$this->set('title', 'About me');
		$this->layout = 'aboutMe';
	}

	public function projects()
	{
		$this->set('title', 'projects');
		$this->layout = 'projects';
	}

	public function sendFile()
	{
		$this->response->file(WWW_ROOT.'files/'. 'CV_Youssef_Moudni.pdf', array('download' => true, 'name' => 'CV_Youssef_Moudni'));
    	return $this->response;
	}
}



