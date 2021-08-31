<?php
class Posts extends CI_Controller
{
    public function index()
    {
        $this->load->model('post_model');
        $data['posts'] = $this->post_model->get_posts();

        $this->load->view('blog/post_list', $data);
    }
    public function view($id)
    {
        $this->load->model('post_model');
        $posts = $this->post_model->get_post($id);
        $data['title'] = $posts['title'];
        $data['grade'] = $posts['grade'];
        $this->load->view('post', $data);
    }

    public function new_post($param)
    {
        if($param == 0){
            $this->load->model('post_model');
            $posts = $this->post_model->new_post();
        }

        $data["title"] = "title";

        $this->load->view('blog/form_post', $data);
    }
}