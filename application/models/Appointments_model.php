<?php
class Appointments_model extends CI_Model {

        public function __construct() {
                $this->load->database();
        }

        public function get_appointments_single($slug = FALSE) {
        if ($slug === FALSE) {
                $query = $this->db->get('calendar_events');
                return $query->result_array();
        }
        $query = $this->db->get_where('calendar_events', array('ID' => $slug));
        return $query->row_array();
        }

        //Load clients in overview page appointments
        public function get_appointments() {
          $query = $this->db->SELECT('*');
          $query = $this->db->FROM('clients');
          $query = $this->db->JOIN('calendar_events','clients.client_id=calendar_events.client');

          $query = $this->db->get();
          return $query->result();

        }

        //Load Calendar events
        public function fetch_client_events($slug = FALSE) {

        if ($slug === FALSE) {
                $query = $this->db->get('calendar_events');
                return $query->result_array();
        }

        $this->db->select('*');
        $this->db->order_by('created_at','DESC');
        $this->db->from('clients');
        $this->db->where('client_id', $slug);
        $query = $this->db->get();
        if($query->num_rows() > 0)
          return $query->result();
        }

        public function create_appointment() {
            //Create a slug before submit_button
            $slug = url_title($this->input->post('ID'));

            $data = array(
                'ID' => $slug,
                'appointment_type' => $this->input->post('appointment_type'),

                'description' => $this->input->post('description'),
                'appointment_date' => $this->input->post('appointment_date'),
                'appointment_time' => $this->input->post('appointment_time')
            );
            //Table name
            return $this->db->insert('appointments', $data);
        }


        public function delete_post($id) {
            $this->db->where('ID', $id);
            $this->db->delete('appointments');
            return true;
        }

        public function update_post() {
            $slug = url_title($this->input->post('ID'));

            $data = array(
                'ID' => $slug,
                'appointment_type' => $this->input->post('appointment_type'),
                'description' => $this->input->post('description'),
                'appointment_date' => $this->input->post('appointment_date'),
                'appointment_time' => $this->input->post('appointment_time')
            );
            $this->db->where('ID', $this->input->post('ID'));
            return $this->db->update('appointments', $data);
        }

}
