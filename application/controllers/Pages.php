<?php 
class Pages extends CI_Controller {
	// can access variable and mthods in system/core/Controller.php
	public function view($page = 'home'){
		if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php')) {
			show_404();
		}

        // if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
        // {
        //         // Whoops, we don't have a page for that!
        //         show_404();
        // }

		$data['title'] = ucfirst($page); // Capitalize the fist latter

		$this->load->view('templates/header', $data);
		$this->load->view('pages/'.$page, $data);
		$this->load->view('templates/footer', $data);
	}
}