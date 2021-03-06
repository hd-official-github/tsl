<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Main extends CI_Controller
{
    public function index()
    {
        $this->load->view('client/includes/header');
        $this->load->view('client/index');
        $this->load->view('client/includes/footer');
    }
    public function location()
    {
        $name = $this->uri->segment(1); //location name

        $this->load->model('catogery_model');
        $res = $this->catogery_model->validate_loc($name);
        if (!$res > 0) {
            redirect(base_url() . '404');
        }
        $data['subloc'] = $this->catogery_model->getsub_loc($name);

        $data['cat'] = $this->catogery_model->getcat($name);
        $data['footer'] = $this->catogery_model->get_footer($name);
        $data['details'] = $this->catogery_model->get_detail_by_locname($name);
        $data['city_name'] = $name;
        // print_r($data['details']);
        // die;
        $data['feature1'] = $this->catogery_model->get_feature1();
        $data['feature2'] = $this->catogery_model->get_feature2();
        $data['blogs'] = $this->catogery_model->get_blogs($name);

        $data['banner1'] = $this->catogery_model->getcity_banner1($name);

        $data['banner2'] = $this->catogery_model->getcity_banner2($name);

        $data['feature_blog'] = $this->catogery_model->get_feature_blog($name);
        $this->load->view('client/includes/header');
        $this->load->view('client/location', $data);
        $this->load->view('client/includes/footer', $data);
    }
    public function submit_search()
    {
        $cat = $this->input->post('selected_cat_name');
        $loc = $this->input->post('selected_subloc');
        $this->load->model('catogery_model');
        $id = $this->catogery_model->getcat_id($cat);
        $data['sub_cat'] = $this->catogery_model->get_subcat($id, $loc);
        $data['cat'] = $this->catogery_model->get_cat_name($id);
        $city = $this->catogery_model->get_city($id);
        $data['catloc'] = $this->catogery_model->getmatch_loc($city, $data['sub_cat']->num_rows());
        $data['bgcolor'] = "background:#f07c7c";
        $this->load->view('client/includes/header', $data);
        $this->load->view('client/list', $data);
        $this->load->view('client/includes/footer');
    }
    public function catogery()
    {
        $data['bgcolor'] = "background:#f07c7c";
        $this->load->view('client/includes/header', $data);
        $this->load->view('client/catogery');
        $this->load->view('client/includes/footer');
    }
    public function bussiness_detail()
    {
        $data['bgcolor'] = "background:#fff";

        $business_name = str_replace("-", " ", $this->uri->segment(3));
        $this->load->model('catogery_model');
        $data['details'] = $this->catogery_model->get_details($business_name);
        foreach ($data['details']->result() as $row) {
            $b_id =  $row->business_id;
            $cat_id = $row->category_id;
            $loc = $row->location;
        }
        $data['review'] = $this->catogery_model->get_review_all($b_id);
        $data['faq'] = $this->catogery_model->get_faq($b_id);
        $data['image'] = $this->catogery_model->get_business_image($b_id);
        // $num = $data['image']->num_rows();
        // if($num==1){
        //    echo '<div class="col-sm-12 first-img" style="max-height:500px">
        //    <img src="'.for($i; $i<$nums; $i++){ echo $i->image_url; break;.'" alt="" style="height:100%; width:100%"></div>';
        // }else if($num==2){
        // }
        $data['recommanded'] = $this->catogery_model->get_recommanded($cat_id, $loc, $business_name);
        $this->load->view('client/includes/header', $data);
        $this->load->view('client/bussiness_detail', $data);
    }
    public function blog_detail()
    {
        $d = $this->uri->segment(2);
        $this->load->view('client/includes/header');
        $this->load->model('catogery_model');

        $this->load->view('client/blog_detail');
    }
    public function submit_review()
    {
        $this->input->post('r_title');
        $b_name = trim($this->uri->segment(3));
        $business_name = str_replace("-", " ", $b_name);
        $this->load->model('catogery_model');
        $id = $this->catogery_model->get_business_idby_name($business_name);
        $data = array(
            'name' => $this->input->post('r_name'),
            'rating' => $this->input->post('r_rating'),
            'review_text' => $this->input->post('r_content'),
            'business_id' => $id
        );
        $this->catogery_model->submit_review($data);
        redirect(base_url() . 'Bengaluru/detail/' . $b_name);
    }
}
