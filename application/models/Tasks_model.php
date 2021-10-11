<?php
class Tasks_model extends CI_Model {

        public function __construct() {

                $this->load->database();
        }

        //Load data for tasks overview
        public function get_tasks($slug = FALSE) {
          $query = $this->db->SELECT('*');
          $query = $this->db->FROM('clients');
          $query = $this->db->JOIN('tasks','clients.client_id=tasks.client_id');

          $query = $this->db->get();
          return $query->result();
        }

        //Load data for tasks view
        public function get_tasks_single($slug = FALSE) {
        if ($slug === FALSE) {
                $query = $this->db->get('tasks');
                return $query->result_array();
        }

        $query = $this->db->get_where('tasks', array('task_id' => $slug));
        return $query->row_array();
        }



        public function create_task($uploadData) {
            //Create a slug before submit_button
            $slug = url_title($this->input->post('task_id'));

            //Table name
            $this->db->insert('tasks', $uploadData);

        }

        public function update_task($data_arr) {
            $slug = url_title(lcfirst($this->input->post('task_id')));

            $this->db->where('task_id', $this->input->post('task_id'));

            $this->db->update('tasks', $data_arr);
        }
        
        public function delete_post($id) {
            $this->db->where('task_id', $id);
            $this->db->delete('tasks');
            return true;
        }

        public function update_post($data_arr) {
            $slug = url_title(lcfirst($this->input->post('task_id')));

            $this->db->where('task_id', $this->input->post('task_id'));

            $this->db->update('tasks', $data_arr);
        }
}
