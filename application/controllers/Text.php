<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Text extends CI_Controller
{
     public function index()
     {
         $this->load->view("client/text/index");
     }
     public function banglore(){
         $this->load->view("client/text/banglore");
     }
    // public function details()
    // {
    //     $slug = str_replace('-', ' ', $this->uri->segment(3)); //blogslug
    //     $this->load->model('client_model');
    //     $d['blog_details'] = $this->client_model->get_blog_by_slug($slug);

    //     foreach ($d['blog_details']->result() as $row) {
    //         $d['meta_title'] = $row->meta_title;
    //         $d['meta_desc'] = $row->meta_desc;
    //     }
    //     $d['recommend'] = $this->client_model->get_recommend_blog_by_slug($slug);
    //     $d['loc_data'] = $this->client_model->get_loc_data($this->session->location);
    //     $this->load->view('client/includes/header', $d);
    //     $this->load->view('client/blog_details', $d);
    //     $this->load->view('client/includes/footer');
    // }
}
