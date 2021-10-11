<?php
class Invoices extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('invoices_model');
                $this->load->helper('url_helper');
        }

		public function index() {
            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

	        $data['invoices'] = $this->invoices_model->get_invoices();
	        $data['title'] = 'Klanten overzicht';

	        $this->load->view('templates/header', $data);
	        $this->load->view('invoices/index', $data);
	        $this->load->view('templates/footer');
		}

		public function view($slug = NULL) {
            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

        $data['invoices_item'] = $this->invoices_model->get_invoices($slug);

        if (empty($data['invoices_item']))
        {
                show_404();
        }

        $data['title'] = $data['invoices_item']['client_id'];

        $this->load->view('templates/header', $data);
        $this->load->view('invoices/view', $data);
        $this->load->view('templates/footer');
	}

    // Create new post form
	public function create() {
        //Check user login
        if(!$this->session->userdata('logged_in')){
    		redirect('users/login');
        }

		$data['title'] = 'Create invoices';


		//Set form validation rules
		$this->form_validation->set_rules('first_name', 'Voornaam', 'required');
		$this->form_validation->set_rules('last_name', 'Achternaam', 'required');
        $this->form_validation->set_rules('email', 'E-mail', 'required');
		$this->form_validation->set_rules('phonenumber', 'Telefoonnummer', 'required');
        $this->form_validation->set_rules('street_name', 'Straatnaam', 'required');
		$this->form_validation->set_rules('house_number', 'Huisnummer', 'required');
        $this->form_validation->set_rules('zipcode', 'Postcode', 'required');
		$this->form_validation->set_rules('city', 'Plaats', 'required');
        $this->form_validation->set_rules('province', 'Province', 'required');

		if($this->form_validation->run() === FALSE){
			//Load a file from a specific folder
	        $this->load->view('templates/header.php');
	        $this->load->view('invoices/create', $data );
	        $this->load->view('templates/footer.php');
		} else {

			redirect('invoices/'. $id);
		}
}



    	//Delete post
    	public function delete($id) {

            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

    		$this->invoices_model->delete_post($id);
    		redirect('invoices');
    	}


    	//Edit post
    	public function edit($slug) {

            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

    		$data['invoices_item'] = $this->invoices_model->get_invoices($slug);

    		if(empty($data['invoices_item'])) {
    			show_404();
    		}

    		$data['title'] = 'Edit Client';

            //Load a file from a specific folder
            $this->load->view('templates/header.php', $data);
            $this->load->view('invoices/edit', $data );
            $this->load->view('templates/footer.php');
    	}

    	public function update(){

            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }
            
    		$this->invoices_model->update_post();
            redirect('invoices/');
    		//.redirect('invoices');
    	}



}
