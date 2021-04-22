<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category extends CI_Controller
{
    public function index()
    {

        $cat = $this->uri->segment(2);
        $this->load->model('catogery_model');
        $q = $this->catogery_model->validate_category($cat);
        if (!$q > 0) {
            redirect(base_url() . '404');
        }
        $data['sub_cat'] = $this->catogery_model->get_all_subcat($cat);
        $this->load->view('client/includes/header');
        $this->load->view('client/catogery', $data);
        $this->load->view('client/includes/footer');
    }
    public function subcategory()
    {
        $subcat = str_replace('-', ' ', $this->uri->segment(3));
        $this->load->model('catogery_model');

        $q = $this->catogery_model->validate_subcategory($subcat);
        if (!$q > 0) {
            redirect(base_url() . '404');
        }
        //query
        echo $this->uri->segment(3);
        die;
    }
}
