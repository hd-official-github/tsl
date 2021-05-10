<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category extends CI_Controller
{
    public function index()
    {
        $cat = $this->uri->segment(2);
        $name = $this->uri->segment(1);

        $arr = explode('-in-', $cat);
        if (count($arr) > 1) {
            $this->load->model('catogery_model');
            //for url => bangalore/spa-in-kormanangala
            $q = $this->catogery_model->validate_category(str_replace('-', ' ', $arr[0]));
            if ($q > 0) {
                $this->show_list($name, $arr);
            }
            //for url =>banalore/ayurvedic-spa-in-kormanagala
            $q = $this->catogery_model->validate_subcategory(str_replace('-', ' ', $arr[0]));
            if ($q > 0) {
                $this->show_sub_catlist(str_replace('-', ' ', $arr[0]), $name, str_replace('-', ' ', $arr[1])); // params => ayurvedicspa, banagalore, kormangala
            }
        } else {

            //for url =>bangalore/spa
            $this->load->model('catogery_model');
            $q = $this->catogery_model->validate_category($cat);

            if (!$q > 0) {
                redirect(base_url() . '404');
            }
            $data['sub_cat'] = $this->catogery_model->get_all_subcat($cat, $name);

            $data['bgcolor'] = "background:#fff";
            $data['feature1'] = $this->catogery_model->get_feature1();
            $data['feature2'] = $this->catogery_model->get_feature2();
            $data['sublocs'] = $this->catogery_model->get_sub_location($this->uri->segment(1));
            $data['city'] = $this->uri->segment(1);
            $data['cat'] = $this->uri->segment(2);

            $data['blogs'] = $this->catogery_model->get_blogs($name);
            $data['banner1'] = $this->catogery_model->get_banner1($name, $cat);
            $data['banner2'] = $this->catogery_model->get_banner2($name, $cat);
            $data['footer'] = $this->catogery_model->get_footer_of_cat($cat);
            $data['feature_blog'] = $this->catogery_model->get_feature_blog($name);
            $this->load->view('client/includes/header', $data);
            $this->load->view('client/catogery', $data);
            $this->load->view('client/includes/footer', $data);
        }
    }
    public function subcategory()
    {
        $subcat = str_replace('-', ' ', $this->uri->segment(3)); //full body 
        $cat = str_replace('-', ' ', $this->uri->segment(2)); // spa
        $loc = $this->uri->segment(1); //Bengluru
        $this->load->model('catogery_model');
        $q = $this->catogery_model->validate_subcategory($subcat);
        if (!$q > 0) {
            redirect(base_url() . '404');
        } else {
            $this->load->model('catogery_model');

            $id = $this->catogery_model->getcat_id($cat);
            $data['banner'] = $this->catogery_model->get_banner_forlist();

            $data['all_subcat'] = $this->catogery_model->get_all_subcat($cat, $loc);
            $data['sub_cat'] = $this->catogery_model->get_subcat_from_lists($id, $loc, $subcat);
            $data['subcategory'] = $data['sub_cat'];
            $data['details'] = $this->catogery_model->geta_meta_details($subcat, $loc);
            $data['cat'] = $this->catogery_model->get_cat_name($id);
            $city = $this->catogery_model->get_city($id);
            $data['catloc'] = $this->catogery_model->getmatch_loc($loc, $data['sub_cat']->num_rows());
            $data['bgcolor'] = "background:#fff";
            $this->load->view('client/includes/header', $data);
            $this->load->view('client/list', $data);
            $this->load->view('client/includes/footer');
        }
    }
    function show_list($city, $arr)
    {
        # 0 -spa
        # 1 = subloc
        #city = loc
        $this->load->model('catogery_model');
        $id = $this->catogery_model->getcat_id($arr[0]);
        $data['sub_cat'] = $this->catogery_model->get_subcat($id, $arr[1]);
        foreach ($data['sub_cat']->result() as $row) {
            $data['subloc'] = $row->sub_location;
        }
        $data['all_subcat'] = $this->catogery_model->get_all_subcat($arr[0], $city);
        $data['cat'] = $this->catogery_model->get_cat_name($id);
        $city = $this->catogery_model->get_city($id);
        // $data['subloc']=$arr[1];
        $data['catloc'] = $this->catogery_model->getmatch_loc($city, $data['sub_cat']->num_rows());
        $data['bgcolor'] = "background:#fff";
        $this->load->view('client/includes/header', $data);
        $this->load->view('client/list', $data);
        $this->load->view('client/includes/footer');
    }
    // public function sublocation()
    // {
    //     $loc = $this->uri->segment(1);
    //     $subloc = str_replace("-", " ", $this->uri->segment(2));
    //     $cat =  str_replace('-', " ", $this->uri->segment(3));
    //     $subcat = str_replace('-', " ", $this->uri->segment(4));
    //     $this->load->model('catogery_model');
    //     $id = $this->catogery_model->getcat_id($cat);
    //     $data['sub_cat'] = $this->catogery_model->get_subcat_from_list($id, $subloc, $subcat);
    //     foreach ($data['sub_cat']->result() as $row) {
    //         $data['subloc'] = $row->sub_location;
    //     }
    //     $data['subcategory'] = $data['sub_cat'];
    //     $data['all_list'] = $this->catogery_model->get_all_subcat_bysubloc($loc, $subloc, $id, $subcat);
    //     $data['sub_cat'] = $data['all_list'];
    //     $data['all_subcat'] = $this->catogery_model->get_all_subcat($cat, $loc);
    //     $data['cat'] = $this->catogery_model->get_cat_name($id);
    //     $city = $this->catogery_model->get_city($id);
    //     $data['catloc'] = $this->catogery_model->getmatch_loc($city, $data['sub_cat']->num_rows());
    //     $data['details'] = $this->catogery_model->geta_meta_details($subcat, $loc);
    //     $data['bgcolor'] = "background:#f07c7c";
    //     $this->load->view('client/includes/header', $data);
    //     $this->load->view('client/list', $data);
    //     $this->load->view('client/includes/footer');
    // }
    function show_sub_catlist($subcat, $location, $sublocation)  // params => ayurvedicspa, banagalore, kormangala
    {
        $this->load->model('catogery_model');
        $cat_name = $this->catogery_model->get_cat_by_subcat($subcat);
        // echo $cat_name . '   ' . $subcat . '  ' . '  ' . $location . '  ' . $sublocation;
        // die;

        $loc = $location;
        $subloc = $sublocation;
        $cat =  $cat_name;
        $subcat = $subcat;


        $this->load->model('catogery_model');
        $id = $this->catogery_model->getcat_id($cat);
        $data['sub_cat'] = $this->catogery_model->get_subcat_from_list($id, $subloc, $subcat);
        foreach ($data['sub_cat']->result() as $row) {
            $data['subloc'] = $row->sub_location;
        }
        $data['subcategory'] = $data['sub_cat'];
        $data['all_list'] = $this->catogery_model->get_all_subcat_bysubloc($loc, $subloc, $id, $subcat);
        $data['sub_cat'] = $data['all_list'];
        $data['all_subcat'] = $this->catogery_model->get_all_subcat($cat, $loc);
        $data['cat'] = $this->catogery_model->get_cat_name($id);
        $city = $this->catogery_model->get_city($id);
        $data['catloc'] = $this->catogery_model->getmatch_loc($city, $data['sub_cat']->num_rows());
        $data['details'] = $this->catogery_model->geta_meta_details($subcat, $loc);
        $data['bgcolor'] = "background:#fff";
        $this->load->view('client/includes/header', $data);
        $this->load->view('client/list', $data);
        $this->load->view('client/includes/footer');
    }
}
