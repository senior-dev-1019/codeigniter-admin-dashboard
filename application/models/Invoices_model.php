<?php
class Invoices_model extends CI_Model {

        public function __construct() {
                $this->load->database();
        }

        public function get_invoices($slug = FALSE) {
        if ($slug === FALSE) {
                $query = $this->db->get('invoices');
                return $query->result_array();
        }

        $query = $this->db->get_where('invoices', array('invoice_id' => $slug));
        return $query->row_array();
        }

        public function create_client() {
            //Create a slug before submit_button
            $slug = url_title($this->input->post('invoice_id'));

            $data = array(
                'first_name' => $this->input->post('first_name'),
                'invoice_id' => $slug,
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
            //Table name
            $this->db->insert('invoices', $data);
            $id = $this->db->insert_id();

            return  $id;

        }

        public function delete_post($id) {
            $this->db->where('invoice_id', $id);
            $this->db->delete('invoices');
            return true;
        }

        public function update_post() {
            $slug = url_title($this->input->post('invoice_id'));

            $data = array(
                'invoice_id' => $slug,
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
            $this->db->where('invoice_id', $this->input->post('invoice_id'));
            return $this->db->update('invoices', $data);
        }
}
