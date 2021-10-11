<?php

class Pages extends CI_Controller {
	public function view($page = 'home') {

		//Check user login
        if(!$this->session->userdata('logged_in')){
			redirect('users/login');
        }

		// Check of the page exists
        if(!file_exists(APPPATH.'views/pages/'.$page.'.php')) {
            // If not, show 404 page
            show_404();
        }
        // Data is the data that we gonna pass into the view
        $data['title'] = ucfirst($page);
        // Note: ucfirst = To make the first letter capital


        //Load a file from a specific folder
        $this->load->view('templates/header.php');
        $this->load->view('pages/'. $page, $data );
        $this->load->view('templates/footer.php');
	}
}
