<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->library('template_engine');
		echo $this->template_engine->render('auth::profile', ['name' => 'Jonathan']);
	}
}
