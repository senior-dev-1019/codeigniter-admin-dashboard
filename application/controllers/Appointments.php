<?php
class Appointments extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('appointments_model');
                $this->load->helper('url_helper');
        }

        public function index() {

          //Check user login
          if(!$this->session->userdata('logged_in')){
          redirect('users/login');
          }

          $record['appontment'] = $this->appointments_model->get_appointments();

          $this->load->view('templates/header');
          $this->load->view('appointments/index',$record);
          $this->load->view('templates/footer');

        }

		public function view($slug = NULL) {

      //Check user login
      if(!$this->session->userdata('logged_in')){
      redirect('users/login');
      }

        $data['appointments_item'] = $this->appointments_model->get_appointments_single($slug);
        $data['client'] = $this->appointments_model->fetch_client_events($slug);


        // $data['title'] = $data['appointments_item']['ID'];

        $this->load->view('templates/header', $data);
        $this->load->view('appointments/view', $data);
        $this->load->view('templates/footer');
	}

    // Create new appointment form
    public function create($slug = FALSE) {

        //Check user login
        if(!$this->session->userdata('logged_in')){
				redirect('users/login');
        }


        //$data['appointments'] = $this->appointments_model->fetch_client_appointments($slug);

        $data['title'] = 'Create appointment';

        //Set form validation rules
        $this->form_validation->set_rules('appointment_type', 'Appointment type', 'required');

        if($this->form_validation->run() === FALSE){
            //Load a file from a specific folder
            $this->load->view('templates/header.php');
            $this->load->view('appointments/create', $data );
            $this->load->view('templates/footer.php');
        } else {
            $this->appointments_model->create_appointment();
            redirect('appointments');
        }
    }


    //Delete Appointment
    public function delete($id) {
        //Check user login
        if(!$this->session->userdata('logged_in')){
				redirect('users/login');
        }

        $this->appointments_model->delete_post($id);
        redirect('appointments');
    }



        	//Edit post
        	public function edit($slug) {

                //Check user login
                if(!$this->session->userdata('logged_in')){
        				redirect('users/login');
                }

        		$data['appointments_item'] = $this->appointments_model->get_appointments($slug);

        		if(empty($data['appointments_item'])) {
        			show_404();
        		}

        		$data['title'] = 'Edit Client';

                //Load a file from a specific folder
                $this->load->view('templates/header.php');
                $this->load->view('appointments/edit', $data );
                $this->load->view('templates/footer.php');
        	}

        	public function update(){
                //Check user login
                if(!$this->session->userdata('logged_in')){
        				redirect('users/login');
                }

        		$this->appointments_model->update_post();
                redirect('appointments/');
        		//.redirect('appointments');
        	}

}
