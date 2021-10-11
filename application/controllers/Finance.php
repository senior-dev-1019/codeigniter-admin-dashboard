<?php
class Finance extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('finance_model');
                $this->load->helper('url_helper');
        }

		public function index() {
            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

	        $data['finance'] = $this->finance_model->get_finance();
	        $data['title'] = 'Factuur overzicht';

	        $this->load->view('templates/header', $data);
	        $this->load->view('finance/index', $data);
	        $this->load->view('templates/footer');
		}

		public function view($slug = NULL) {
            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

        $data['finance_item'] = $this->finance_model->get_finance($slug);

        if (empty($data['finance_item']))
        {
                show_404();
        }

        $data['title'] = $data['finance_item']['finance_id'];

        $this->load->view('templates/header', $data);
        $this->load->view('finance/view', $data);
        $this->load->view('templates/footer');
	}

    // Create new post form
	public function create() {

        //Check user login
        if(!$this->session->userdata('logged_in')){
    		redirect('users/login');
        }

		$data['title'] = 'Create finance';


		// //Set form validation rules
		// $this->form_validation->set_rules('first_name', 'Voornaam', 'required');
		// $this->form_validation->set_rules('last_name', 'Achternaam', 'required');
    //     $this->form_validation->set_rules('email', 'E-mail', 'required');
		// $this->form_validation->set_rules('phonenumber', 'Telefoonnummer', 'required');
    //     $this->form_validation->set_rules('street_name', 'Straatnaam', 'required');
		// $this->form_validation->set_rules('house_number', 'Huisnummer', 'required');
    //     $this->form_validation->set_rules('zipcode', 'Postcode', 'required');
		// $this->form_validation->set_rules('city', 'Plaats', 'required');
    //     $this->form_validation->set_rules('province', 'Province', 'required');

		if($this->form_validation->run() === FALSE){
			//Load a file from a specific folder
	        $this->load->view('templates/header.php');
	        $this->load->view('finance/create', $data );
	        $this->load->view('templates/footer.php');
		} else {

			redirect('finance/');
		}
}



    	//Delete post
    	public function delete($id) {

            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

    		$this->finance_model->delete_post($id);
    		redirect('finance');
    	}


    	//Edit post
    	public function edit($slug) {

            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

    		$data['finance_item'] = $this->finance_model->get_finance($slug);

    		if(empty($data['finance_item'])) {
    			show_404();
    		}

    		$data['title'] = 'Edit Client';

            //Load a file from a specific folder
            $this->load->view('templates/header.php', $data);
            $this->load->view('finance/edit', $data );
            $this->load->view('templates/footer.php');
    	}

    	public function update(){

            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

    		$this->finance_model->update_post();
            redirect('finance/');
    		//.redirect('finance');
    	}

}
