<?php defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
	}
	public function index_page()
	{
		$this->load->view('home_view');
	}
	public function about_us_page()
	{
		$this->load->view('about_view');
	}
}