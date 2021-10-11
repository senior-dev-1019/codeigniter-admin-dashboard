<?php
class Finance_model extends CI_Model {

        public function __construct() {
                $this->load->database();
        }

        public function get_finance($slug = FALSE) {
        if ($slug === FALSE) {
                $query = $this->db->get('finance');
                return $query->result_array();
        }

        $query = $this->db->get_where('finance', array('finance_id' => $slug));
        return $query->row_array();
        }

        public function create_invoice() {
            //Create a slug before submit_button
            $slug = url_title($this->input->post('finance_id'));

            $data = array(
                'finance_id' => $slug,
                'appointment_type' => $this->input->post('appointment_type'),
                'parkeergeld' => $this->input->post('parkeergeld'),
                'bus_material' => $this->input->post('bus_material'),
                'pin_cash' => $this->input->post('pin_cash'),
                'amount' => $this->input->post('amount')

            );
            //Table name
            return $this->db->insert('finance', $data);
        }

        public function delete_post($id) {
            $this->db->where('finance_id', $id);
            $this->db->delete('finance');
            return true;
        }

        public function update_post() {
            $slug = url_title($this->input->post('finance_id'));

            $data = array(
              'finance_id' => $slug,
              'appointment_type' => $this->input->post('appointment_type'),
              'parkeergeld' => $this->input->post('parkeergeld'),
              'bus_material' => $this->input->post('bus_material'),
              'pin_cash' => $this->input->post('pin_cash'),
              'amount' => $this->input->post('amount')
            );
            $this->db->where('finance_id', $this->input->post('finance_id'));
            return $this->db->update('finance', $data);
        }
}
