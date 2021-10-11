<?php
class Tasks extends CI_Controller {

  public function __construct()
  {
          parent::__construct();
          $this->load->model('tasks_model');
          $this->load->helper('url');
  }

	public function index() {

            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

          $record['tasks'] = $this->tasks_model->get_tasks();


	        $this->load->view('templates/header');
	        $this->load->view('tasks/index', $record);
	        $this->load->view('templates/footer');
	}

	public function view($slug = NULL) {

            //Check user login
            if(!$this->session->userdata('logged_in')){
        		redirect('users/login');
            }

        $data['tasks_item'] = $this->tasks_model->get_tasks_single($slug);

        if (empty($data['tasks_item']))
        {
                show_404();
        }

        $data['title'] = $data['tasks_item']['task_id'];

        $this->load->view('templates/header', $data);
        $this->load->view('tasks/view', $data);
        $this->load->view('templates/footer');
	}

// Create new task
//Single upload
//   	public function create() {
//
//           //Check user login
//           if(!$this->session->userdata('logged_in')){
//       		redirect('users/login');
//           }
//
//
//           $data['title'] = 'Create tasks';
//
//           // Some upload configs
//           $config['allowed_types'] = 'gif|jpg|png';
//           $config['upload_path'] = './assets/images/tasks';
//           $config['encrypt_name'] = true;
//           $this->load->library('upload', $config);
//           //Check if the file is uploaded
//           //Add here the input name
//           if ($this->upload->do_upload('image')) {
//             // Testing the upload
//             print_r($this->upload->data());
//           } else {
//             $this->load->view('templates/header.php');
//             $this->load->view('tasks/create');
//             $this->load->view('templates/footer.php');
//           }
//
// }
//Single upload

  // Create new post form
  public function create() {
      //Check user login
      if(!$this->session->userdata('logged_in')){
          redirect('users/login');
      }

    $data['title'] = 'Create clients';

    // Some upload configs
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['upload_path'] = './assets/images/tasks';
    $config['encrypt_name'] = TRUE;
    $config['max_size'] = '20048';
    $this->load->library('upload', $config);


    //Userfile 1
    if (!empty($_FILES['foto_1'])) {
      $this->upload->do_upload('foto_1');
      $data1= $this->upload->data();
      $foto_1 = $data1['file_name'];
    }
    //Userfile 2
    if (!empty($_FILES['foto_2'])) {
      $this->upload->do_upload('foto_2');
      $data2= $this->upload->data();
      $foto_2 = $data2['file_name'];
    }

    //Userfile 3
    if (!empty($_FILES['foto_3'])) {
      $this->upload->do_upload('foto_3');
      $data3= $this->upload->data();
      $foto_3 = $data3['file_name'];
    }

    //Userfile 4
    if (!empty($_FILES['foto_4'])) {
      $this->upload->do_upload('foto_4');
      $data4 = $this->upload->data();
      $foto_4 = $data4['file_name'];
    }



    //Set form validation rules
    $this->form_validation->set_rules('title', 'fieldlabel','required');



    if($this->form_validation->run() === FALSE){
      //Load a file from a specific folder
          $this->load->view('templates/header.php');
          $this->load->view('tasks/create', $data );
          $this->load->view('templates/footer.php');

    }  else {

      //Insert into the database
      $title = $this->input->post('title', TRUE);
      $uploadData = ['title'=>$title, 'foto_1'=>$foto_1, 'foto_2'=>$foto_2, 'foto_3'=>$foto_3, 'foto_4'=>$foto_4];
      $this->tasks_model->create_task($uploadData);



      //Redirect with last_id
      redirect("/tasks");
    }

  }
  //Multi upload end



  //Edit Task
  //
  public function edit($slug) {

        //Check user login
        if(!$this->session->userdata('logged_in')){
          redirect('users/login');
        }

        //Get current DB data
        $data['tasks_item'] = $this->tasks_model->get_tasks_single($slug);

        if(empty($data['tasks_item'])) {
          show_404();
        }

        $data['title'] = 'Edit Task';

        //Load a file from a specific folder
        $this->load->view('templates/header.php', $data);
        $this->load->view('tasks/edit', $data );
        $this->load->view('templates/footer.php');

        // Some upload configs
        $config['allowed_types'] = 'gif|jpg|png|jpeg';
        $config['upload_path'] = './assets/images/tasks';
        $config['max_size'] = '20048';
        $this->load->library('upload', $config);

        $this->upload->do_upload('foto_1');
        $data1= $this->upload->data();
        $foto_1 = $data1['file_name'];


        //Userfile 2
        if (!empty($_FILES['foto_2'])) {
          $this->upload->do_upload('foto_2');
          $data2= $this->upload->data();
          $foto_2 = $data2['file_name'];
        }

        //Userfile 3
        if (!empty($_FILES['foto_3'])) {
          $this->upload->do_upload('foto_3');
          $data3= $this->upload->data();
          $foto_3 = $data3['file_name'];
        }

        //Userfile 4
        if (!empty($_FILES['foto_4'])) {
          $this->upload->do_upload('foto_4');
          $data4 = $this->upload->data();
          $foto_4 = $data4['file_name'];
        }

        //Set form validation rules
        $this->form_validation->set_rules('title', 'fieldlabel','required');
  }

  public function update(){
    //Check user login
    if(!$this->session->userdata('logged_in')){
      redirect('users/login');
    }

    $origin_task = $this->tasks_model->get_tasks_single($this->input->post('task_id'));
    $update_task = array("title" => $origin_task["title"], "foto_1" => $origin_task["foto_1"], "foto_2" => $origin_task["foto_2"], "foto_3" => $origin_task["foto_3"], "foto_4" => $origin_task["foto_4"]);
    $data['title'] = 'Update Task';

    // Some upload configs
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['upload_path'] = './assets/images/tasks';
    $config['encrypt_name'] = TRUE;
    $config['max_size'] = '20048';
    $this->load->library('upload', $config);

    //Userfile 1
    if (!empty($_FILES['foto_1']["size"])) {
      $this->upload->do_upload('foto_1');
      $data1= $this->upload->data();
      $update_task["foto_1"] = $data1['file_name'];
    }

    //Userfile 2
    if (!empty($_FILES['foto_2']["size"])) {
      $this->upload->do_upload('foto_2');
      $data2= $this->upload->data();
      $update_task["foto_2"] = $data2['file_name'];
    }

    //Userfile 3
    if (!empty($_FILES['foto_3']["size"])) {
      $this->upload->do_upload('foto_3');
      $data3= $this->upload->data();
      $update_task["foto_3"] = $data3['file_name'];
    }

    //Userfile 4
    if (!empty($_FILES['foto_4']["size"])) {
      $this->upload->do_upload('foto_4');
      $data4 = $this->upload->data();
      $update_task["foto_4"] = $data4['file_name'];
    }

    //Set form validation rules
    $this->form_validation->set_rules('title', 'fieldlabel','required');

    if($this->form_validation->run() === FALSE){
      //Load a file from a specific folder
      $this->load->view('templates/header.php');
      $this->load->view('tasks/create', $data );
      $this->load->view('templates/footer.php');
    } else {
      //Insert into the database
      $update_task["title"] = $this->input->post('title', TRUE);
      $this->tasks_model->update_task($update_task);
      //Redirect with last_id
      redirect("/tasks");
    }
  }
}
