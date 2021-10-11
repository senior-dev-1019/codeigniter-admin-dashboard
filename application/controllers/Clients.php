<?php
class Clients extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('clients_model');
                $this->load->helper('url_helper');
                $this->load->config('email');
        }

		public function index() {
            //Check user login
            if(!$this->session->userdata('logged_in')){
    				redirect('users/login');
            }

	        $data['clients'] = $this->clients_model->get_clients();
	        $data['title'] = 'Klanten overzicht';

	        $this->load->view('templates/header', $data);
	        $this->load->view('clients/index', $data);
	        $this->load->view('templates/footer');
		}

		public function view($slug = NULL) {

        //Check user login
        if(!$this->session->userdata('logged_in')){
    		redirect('users/login');
        }

        $data['clients_item'] = $this->clients_model->get_clients($slug);
        $data['note'] = $this->clients_model->fetch_client_note($slug);
        $data['task'] = $this->clients_model->fetch_client_tasks($slug);
        $data['events'] = $this->clients_model->fetch_client_events($slug);
        //$data['appointments'] = $this->clients_model->fetch_client_appointment($slug);

        if (empty($data['clients_item']))
        {
                show_404();
        }

        $data['title'] = $data['clients_item']['client_id'];

        $this->load->view('templates/header', $data);

        $this->load->view('clients/view', $data);
        $this->load->view('templates/footer');

	}

    // Create new post form
	   public function create() {
        //Check user login
        if(!$this->session->userdata('logged_in')){
    		    redirect('users/login');
        }

  		$data['title'] = 'Create clients';
      //$data['city'] = $this->clients_model->fetch_city();
      $data['state'] = $this->clients_model->fetch_state();


  		//Set form validation rules
      $this->form_validation->set_rules('first_name', 'Voornaam', 'required');
      $this->form_validation->set_rules('last_name', 'Achternaam', 'required');
      $this->form_validation->set_rules('email','E-mail','required|valid_email|is_unique[clients.email]');
      $this->form_validation->set_rules('phonenumber', 'Telefoonnummer', 'required');
      $this->form_validation->set_rules('street_name', 'Straatnaam', 'required');
      $this->form_validation->set_rules('house_number', 'Huisnummer', 'required');
      $this->form_validation->set_rules('zipcode', 'Postcode', 'required');
      $this->form_validation->set_rules('city', 'Plaats', 'required');
      $this->form_validation->set_rules('province', 'Province', 'required');

  		if($this->form_validation->run() === FALSE){
  			//Load a file from a specific folder
  	        $this->load->view('templates/header.php');
  	        $this->load->view('clients/create', $data );
  	        $this->load->view('templates/footer.php');

      }  else {

        $from = $this->config->item('smtp_user');
        $to = $this->input->post('email');
        $subject = 'Welkom bij Stroom Storing';
        $message = $this->input->post('last_name');

        $this->email->set_newline("\r\n");
        $this->email->from($from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);

        // if ($this->email->send()) {
        //     echo 'Your Email has successfully been sent.';
        // } else {
        //     show_error($this->email->print_debugger());
        // }

        //Insert into the database
        $this->clients_model->create_client($data);

        $athbi = $this->db->insert_id();

        $this->clients_model->create_client_note($data);


        //Redirect with last_id
  			redirect("/calendar?clientid=".$athbi);
      }

}


    	//Delete post
    	public function delete($id) {
            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }
    		$this->clients_model->delete_post($id);
    		redirect('clients');
    	}


    	//Edit post
    	public function edit($slug) {

            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

    		$data['clients_item'] = $this->clients_model->get_clients($slug);

    		if(empty($data['clients_item'])) {
    			show_404();
    		}

    		$data['title'] = 'Edit Client';

            //Load a file from a specific folder
            $this->load->view('templates/header.php', $data);
            $this->load->view('clients/edit', $data );
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


      function check_email_avalibility()
      {
           if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
           {
                echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Invalid Email</span></label>';
           }
           else
           {
                $this->load->model("Clients_model");
                if($this->clients_model->is_email_available($_POST["email"]))
                {
                     echo '<label class="text-danger"><span class="glyphicon glyphicon-remove"></span> Email is al bekend</label>';
                }
                else
                {
                     echo '';
                }
           }
      }

      // function fetch_state()
      // {
      //   if($this->input->post('city_id'))
      //   {
      //        echo $this->clients_model->fetch_state($this->input->post('city_id'));
      //   }
      //
      // }
}
