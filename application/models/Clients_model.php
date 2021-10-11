<?php
class Clients_model extends CI_Model {

        public function __construct() {
                $this->load->database();
        }

        public function get_clients($slug = FALSE) {
        if ($slug === FALSE) {
                $query = $this->db->get('clients');
                return $query->result_array();
        }

        $query = $this->db->get_where('clients', array('client_id' => $slug));
        return $query->row_array();
        }

        public function create_client() {
            //Create a slug before submit_button
            $slug = url_title($this->input->post('client_id'));

            $data = array(
                'first_name' => $this->input->post('first_name'),
                'client_id' => $slug,
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'phonenumber' => $this->input->post('phonenumber'),
                'street_name' => $this->input->post('street_name'),
                'house_number' => $this->input->post('house_number'),
                'zipcode' => $this->input->post('zipcode'),
                'city' => $this->input->post('city'),
                'province' => $this->input->post('province')
            );

            //Table name
            $this->db->insert('clients', $data);

            // $last_id = $this->db->insert_id();
        }

        public function create_client_note() {
            //Create a slug before submit_button
            $slug = url_title($this->input->post('client_id'));

            $data1 = array(
                'note' => $this->input->post('note'),
                'client_id' => $this->db->insert_id()
            );

            $data2 = array(
                'lead_source' => $this->input->post('lead_source'),
                'client_id' => $this->db->insert_id()
            );
            //Insert into Table name
            $this->db->insert('clients_notes', $data1);
            $this->db->insert('clients_leads', $data2);
        }



        public function delete_post($id) {
            $this->db->where('client_id', $id);
            $this->db->delete('clients');
            return true;
        }

        public function update_post() {
            $slug = url_title($this->input->post('client_id'));

            $data = array(
                'client_id' => $slug,
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'phonenumber' => $this->input->post('phonenumber'),
                'street_name' => $this->input->post('street_name'),
                'house_number' => $this->input->post('house_number'),
                'zipcode' => $this->input->post('zipcode'),
                'city' => $this->input->post('city'),
                'province' => $this->input->post('province'),
                'note' => $this->input->post('note')
            );
            $this->db->where('client_id', $this->input->post('client_id'));
            return $this->db->update('clients', $data);
        }

        function is_email_available($email)
      {
           $this->db->where('email', $email);
           $query = $this->db->get("clients");
           if($query->num_rows() > 0)
           {
                return true;
           }
           else
           {
                return false;
           }
      }


      // function fetch_city(){
      //   $this->db->order_by('city_name','ASC');
      //   $query = $this->db->get("form_city");
      //   return $query->result();
      // }

      // function fetch_client_note(){
      //   // $this->db->order_by('client_id','ASC');
      //   // $query = $this->db->get("clients_notes");
      //   // return $query->result();
      // }

      public function fetch_client_note($slug = FALSE) {

      if ($slug === FALSE) {
              $query = $this->db->get('clients');
              return $query->result_array();
      }

      $this->db->select('*');
      $this->db->order_by('created_at','DESC');
      $this->db->from('clients_notes');
      $this->db->where('client_id', $slug);
      $query = $this->db->get();
      if($query->num_rows() > 0)
        return $query->result();
      }

      //Load tasks
      public function fetch_client_tasks($slug = FALSE) {

      if ($slug === FALSE) {
              $query = $this->db->get('clients');
              return $query->result_array();
      }

      $this->db->select('*');
      $this->db->order_by('created_at','DESC');
      $this->db->from('tasks');
      $this->db->where('client_id', $slug);
      $query = $this->db->get();
      if($query->num_rows() > 0)
        return $query->result();
      }

      //Load Calendar events
      public function fetch_client_events($slug = FALSE) {

      if ($slug === FALSE) {
              $query = $this->db->get('clients');
              return $query->result_array();
      }

      $this->db->select('*');
      $this->db->order_by('created_at','DESC');
      $this->db->from('calendar_events');
      $this->db->where('client', $slug);
      $query = $this->db->get();
      if($query->num_rows() > 0)
        return $query->result();
      }


      function fetch_state(){
        $this->db->order_by('state_name','ASC');
        $query = $this->db->get("form_state");
              return $query->result();
      }
}
