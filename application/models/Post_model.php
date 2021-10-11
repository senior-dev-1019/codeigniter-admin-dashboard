<?php
    class Post_model extends CI_Model {
        public function __construct(){
            //Load the database
            $this->load->database();
        }

        //Get all the posts from the database
        public function get_posts( $slug = FALSE) {
            //Check for the slug
            if($slug === FALSE) {
                $this->db->order_by('posts.post_id', 'DESC');
                $this->db->join('post_categories', 'post_categories.id = posts.post_categorie_id');
                $query = $this->db->get('posts');
                return $query->result_array();
            }

            $query = $this->db->get_where('posts', array('slug' => $slug));
            return $query->row_array();
        }

        public function create_post($post_image) {
            //Create a slug before submit_button
            $slug = url_title(lcfirst($this->input->post('title')));

            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'body' => $this->input->post('body'),
                'post_categorie_id' => $this->input->post('categorie_id'),
                'post_image' => $post_image
            );
            //Table name
            return $this->db->insert('posts', $data);
        }

        public function delete_post($id) {
            $this->db->where('post_id', $id);
            $this->db->delete('posts');
            return true;
        }

        public function update_post() {
            $slug = url_title(lcfirst($this->input->post('title')));

            $data = array(
                'title' => $this->input->post('title'),
                'slug' => $slug,
                'body' => $this->input->post('body'),
                'post_categorie_id' => $this->input->post('categorie_id')
            );
            $this->db->where('post_id', $this->input->post('post_id'));
            return $this->db->update('posts', $data);
        }


        public function get_categories (){
            $this->db->order_by('name');
            $query = $this->db->get('post_categories');
            return $query->result_array();
        }



    }
