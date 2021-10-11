<?php

class Posts extends CI_Controller {
	public function index() {

		//Check user login
        if(!$this->session->userdata('logged_in')){
    		redirect('users/login');
        }

        // Data is the data that we gonna pass into the view
        $data['title'] = 'Latest Posts';
        // Note: ucfirst = To make the first letter capital

		$data['posts'] = $this->post_model->get_posts();

        //Load a file from a specific folder
        $this->load->view('templates/header.php');
        $this->load->view('posts/index', $data );
        $this->load->view('templates/footer.php');
	}

	public function view($slug = NULL) {

		//Check user login
        if(!$this->session->userdata('logged_in')){
    		redirect('users/login');
        }

		$data['post'] = $this->post_model->get_posts($slug);

		if(empty($data['post'])) {
			show_404();
		}

		$data['title'] = $data['post']['title'];

        //Load a file from a specific folder
        $this->load->view('templates/header.php');
        $this->load->view('posts/view', $data );
        $this->load->view('templates/footer.php');
	}

	// Create new post form
	public function create() {

		//Check user login
        if(!$this->session->userdata('logged_in')){
    		redirect('users/login');
        }

		$data['title'] = 'Create post';

		//Fetch data from the database
		$data['post_categories'] = $this->post_model->get_categories();

		//Set form validation rules
		$this->form_validation->set_rules('title', 'Title', 'required');
		$this->form_validation->set_rules('body', 'Body', 'required');

		if($this->form_validation->run() === FALSE){
			//Load a file from a specific folder
	        $this->load->view('templates/header.php');
	        $this->load->view('posts/create', $data );
	        $this->load->view('templates/footer.php');
		} else {
			$this->post_model->create_post();
			redirect('posts');
		}
    }

	//Delete post
	public function delete($id) {

		//Check user login
        if(!$this->session->userdata('logged_in')){
    		redirect('users/login');
        }

		$this->post_model->delete_post($id);
		redirect('posts');
	}


	//Edit post
	public function edit($slug) {

		//Check user login
    if(!$this->session->userdata('logged_in')){
    		redirect('users/login');
    }


		$data['post'] = $this->post_model->get_posts($slug);

		//Fetch data from the database
		$data['post_categories'] = $this->post_model->get_categories();

		if(empty($data['post'])) {
			show_404();
		}

		$data['title'] = 'Edit post';

        //Load a file from a specific folder
        $this->load->view('templates/header.php');
        $this->load->view('posts/edit', $data );
        $this->load->view('templates/footer.php');
	}

	public function update(){

		//Check user login
        if(!$this->session->userdata('logged_in')){
    		redirect('users/login');
        }

		$this->post_model->update_post();
		redirect('posts');
	}
}
