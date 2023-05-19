<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public  function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->database();
		$this->load->model('product_model');
	}

	public function index()
	{
		header("Access-Control-Allow-Origin: *");
		$data = array();
		$this->template->set('title', 'Home');
		$this->template->load('default_layout', 'contents' , 'home', $data);
	}
	public function about()
	{
		$data = array();
		$this->template->set('title', 'about');
		$this->template->load('default_layout', 'contents' , 'about', $data);
	}
	public function contact()
	{
		$data = array();
		$this->template->set('title', 'contact');
		$this->template->load('default_layout', 'contents' , 'contact', $data);
	}
	public function products()
	{
		if ($this->uri->segment(2)) {
			$segVal = $this->uri->segment(2);

			$data['products']   = $this->product_model->get_productByCat($segVal);

		} else {
			$data['products']   = $this->product_model->get_products();
		}		

		$this->template->set('title', 'products');
		$this->template->load('default_layout', 'contents' , 'products', $data);
	}
}
