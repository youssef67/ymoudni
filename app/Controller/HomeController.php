<?php

class HomeController extends AppController
{
	public $helpers = array('Html');

	public  function index()
	{
		$this->set('title', 'home');
		$this->layout = 'home';
	}
}


