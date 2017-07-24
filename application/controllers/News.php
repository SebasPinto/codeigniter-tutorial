<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_news');
		$this->load->helper('url_helper');
		$this->load->helper('url');

	}

	public function index()
	{

		$data['news'] = $this->model_news->get_news();
		$data['title'] = 'News';

		$this->load->view('templates/header', $data);
		$this->load->view('pages/news/index', $data);
		$this->load->view('templates/footer', $data);
		
	}

	public function view($slug = NULL)
	{
		$data['news_item'] = $this->model_news->get_news($slug);
		$data['title'] = 'reading';

		if(empty($data['news_item'])){

			show_404();
		}

		$this->load->view('templates/header', $data);
		$this->load->view('pages/news/view', $data);
		$this->load->view('templates/footer', $data);

	}

	public function create()
	{
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create News';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() == FALSE) {

			$this->load->view('templates/header', $data);
			$this->load->view('pages/news/create');
			$this->load->view('templates/footer', $data);

		} else {

			$this->model_news->set_news();
			$this->load->view('pages/news/success');
		}

	}

}
