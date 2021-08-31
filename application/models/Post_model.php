<?php
class Post_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }

    public function get_posts() {
        $query = $this->db->get('posts');
        return $query->result();
    }

    public function get_post($id) {
        if($id != FALSE) {
            $query = $this->db->get_where('posts', array('id' => $id));
            return $query->row_array();
        }else {
            return FALSE;
        }
    }
    public function new_post(){
        $this->load->helper('url');
        $data = array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'submission_date' => $this->input->post('submission_date')
        );
        return $this->db->insert('posts', $data);
    }
}
