<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category extends CI_Controller
{
    public function index()
    {

        $cat = $this->uri->segment(2);
        $name = $this->uri->segment(1);
        $this->load->model('catogery_model');
        $q = $this->catogery_model->validate_category($cat);
        if (!$q > 0) {
            redirect(base_url() . '404');
        }
        $data['sub_cat'] = $this->catogery_model->get_all_subcat($cat,$name);
        $data['bgcolor']="background:#f07c7c";
        $data['feature1'] = $this->catogery_model->get_feature1();
        $data['feature2'] = $this->catogery_model->get_feature2();
        $data['blogs'] = $this->catogery_model->get_blogs($name);
        $data['banner1'] = $this->catogery_model->get_banner1($name);
        $data['banner2'] = $this->catogery_model->get_banner2($name);
        $data['footer'] = $this->catogery_model->get_footer_of_cat($cat);
        $data['feature_blog'] = $this->catogery_model->get_feature_blog($name);
        $this->load->view('client/includes/header',$data);
        $this->load->view('client/catogery', $data);
        $this->load->view('client/includes/footer',$data);
    }
    public function subcategory()
    {
        $subcat = str_replace('-', ' ', $this->uri->segment(3));
        $this->load->model('catogery_model');

        $q = $this->catogery_model->validate_subcategory($subcat);
        if (!$q > 0) {
            redirect(base_url() . '404');
        }
        
        
    }
}
