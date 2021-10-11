<?php
	class Users extends CI_Controller{

		public function __construct()
		{
						parent::__construct();
						$this->load->model('user_model');
						$this->load->helper('url_helper');
		}

		public function index() {

						//Check user login
						if(!$this->session->userdata('logged_in')){
						redirect('users/login');
						}

					$data['users'] = $this->user_model->get_users();
					$data['title'] = 'Taak toevoegen';

					$this->load->view('templates/header', $data);
					$this->load->view('users/index', $data);
					$this->load->view('templates/footer');
		}


				public function view($slug = NULL) {

		        //Check user login
		        if(!$this->session->userdata('logged_in')){
		    		redirect('users/login');
		        }

		        $data['users_item'] = $this->user_model->get_users($slug);
		        $data['short_zipcode'] = $this->user_model->fetch_user_short_zipcode($slug);
		       // $data['short_zipcode_info'] = $this->user_model->fetch_user_short_zipcode_info($slug);

		        if (empty($data['users_item']))
		        {
		                show_404();
		        }

		        $data['title'] = $data['users_item']['id'];

		        $this->load->view('templates/header', $data);
		        $this->load->view('users/view', $data);
		        $this->load->view('templates/footer');

			}

			//Edit post
    	public function edit($slug) {

            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

    		$data['users_item'] = $this->user_model->get_users($slug);
			$data['short_zipcode'] = $this->user_model->fetch_user_short_zipcode($slug);

    		if(empty($data['users_item'])) {
    			show_404();
    		}

    		$data['title'] = 'Edit Client';

            //Load a file from a specific folder
            $this->load->view('templates/header.php', $data);
            $this->load->view('users/edit', $data );
            $this->load->view('templates/footer.php');
    	}

    	public function update(){

            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

    		$this->clients_model->update_post();
            redirect('clients/');
    		//.redirect('clients');
    	}

		// Register user
		public function register(){
			$data['title'] = 'Sign Up';

			$this->form_validation->set_rules('name', 'Name', 'required');
			$this->form_validation->set_rules('username', 'Username', 'required|callback_check_username_exists');
			$this->form_validation->set_rules('email', 'Email', 'required|callback_check_email_exists');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('users/register', $data);
				$this->load->view('templates/footer');
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));

				$this->user_model->register($enc_password);

				// Set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');

				redirect('/');
			}
		}

		// Log in user
		public function login(){
			$data['title'] = 'Sign In';

			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');

			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header-login');
				$this->load->view('users/login', $data);
				$this->load->view('templates/footer');
			} else {

				// Get username
				$username = $this->input->post('username');
				// Get and encrypt the password
				$password = md5($this->input->post('password'));

				// Login user
				$user_id = $this->user_model->login($username, $password);

				if($user_id){
					// Create session
					$user_data = array(
						'user_id' => $user_id,
						'username' => $username,
						'logged_in' => true
					);

					$this->session->set_userdata($user_data);

					// Set message
					$this->session->set_flashdata('user_loggedin', 'You are now logged in');

					redirect('/');
				} else {
					// Set message
					$this->session->set_flashdata('login_failed', 'Login is invalid');

					redirect('users/login');
				}
			}
		}

		// Log user out
		public function logout(){
			// Unset user data
			$this->session->unset_userdata('logged_in');
			$this->session->unset_userdata('user_id');
			$this->session->unset_userdata('username');

			// Set message
			$this->session->set_flashdata('user_loggedout', 'You are now logged out');

			redirect('users/login');
		}

		// Check if username exists
		public function check_username_exists($username){
			$this->form_validation->set_message('check_username_exists', 'That username is taken. Please choose a different one');
			if($this->user_model->check_username_exists($username)){
				return true;
			} else {
				return false;
			}
		}

		// Check if email exists
		public function check_email_exists($email){
			$this->form_validation->set_message('check_email_exists', 'That email is taken. Please choose a different one');
			if($this->user_model->check_email_exists($email)){
				return true;
			} else {
				return false;
			}
		}
	}
