<?php 
class News extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('news_model');
		$this->load->helper('url_helper');
	}

	public function index() {
		$data['news'] = $this->news_model->get_news();
		$data['title'] = 'News archieve';

		// encode data to json
		// $encode_data = json_encode($data);
		// echo $encode_data;

		$this->load->view('templates/header', $data);
		$this->load->view('news/index', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug = NULL) {
		$data['news_item'] = $this->news_model->get_news($slug);
		if (empty($data['news_item'])) {
			show_404();
		}

		$data['title'] = $data['news_item']['title'];

		$this->load->view('templates/header', $data);
		$this->load->view('news/view', $data);
		$this->load->view('templates/footer');
	}

	public function create() {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$data['title'] = 'Create a news item';

		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if ($this->form_validation->run() === FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('news/create');
			$this->load->view('templates/footer');
		}
		else {
			$this->news_model->set_news();
			$this->load->view('news/succes');
		}
	}

	public function update($id) {
		$this->load->helper('form');
		$this->load->library('form_validation');

		$this->form_validation->set_rules('title', 'Judul', 'required');
		$this->form_validation->set_rules('text', 'Text', 'required');

		if($this->form_validation->run() === FALSE) {
			$data['news_item'] = $this->news_model->get_news_id($id);
			$this->load->view('news/update', $data);
		}else{
			$this->news_model->update_news($id);
			redirect('news');
		}
	}

	public function delete($id) {
		$this->news_model->delete_news($id);
		redirect('news');
	}
}