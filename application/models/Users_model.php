<?php
class Users_model extends CI_Model {

        public function __construct() {
                $this->load->database();
        }

        public function get_users($slug = FALSE) {
        if ($slug === FALSE) {
                $query = $this->db->get('users');
                return $query->result_array();
        }

        $query = $this->db->get_where('users', array('user_id' => $slug));
        return $query->row_array();
        }

        public function create_client() {
            //Create a slug before submit_button
            $slug = url_title($this->input->post('user_id'));

            $data = array(
                'user_id' => $slug,
                'type_user' => $this->input->post('type_user'),
                'first_name' => $this->input->post('first_name'),
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
            return $this->db->insert('users', $data);
        }

        public function delete_post($id) {
            $this->db->where('user_id', $id);
            $this->db->delete('users');
            return true;
        }

        public function update_post() {
            $slug = url_title($this->input->post('user_id'));

            $data = array(
                'user_id' => $slug,
                'type_user' => $this->input->post('type_user'),
                'first_name' => $this->input->post('first_name'),
                'last_name' => $this->input->post('last_name'),
                'email' => $this->input->post('email'),
                'phonenumber' => $this->input->post('phonenumber'),
                'street_name' => $this->input->post('street_name'),
                'house_number' => $this->input->post('house_number'),
                'zipcode' => $this->input->post('zipcode'),
                'city' => $this->input->post('city'),
                'province' => $this->input->post('province')
            );
            $this->db->where('user_id', $this->input->post('user_id'));
            return $this->db->update('users', $data);
        }
}
