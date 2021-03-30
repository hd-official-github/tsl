<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Main extends CI_Controller
{
    public function index()
    {
        $this->load->model('client_model');
        $d['loc'] = $this->client_model->get_location();

        if ($this->session->location) {
            $d = $this->client_model->get_loc_data($this->session->location);
            if ($d->num_rows() > 0) {
                redirect(base_url() . $this->session->location);
            }
        } else {
            $this->load->view('client/index_loc', $d);
        }
    }
    public function location()
    {
        $name = $this->uri->segment(1); //location name
        $this->load->model('client_model');
        $d['loc_data'] = $this->client_model->get_loc_data($name);
        foreach ($d['loc_data']->result() as $row) {
            $d['meta_title'] = $row->meta_title;
            $d['meta_desc'] = $row->meta_desc;
        }
        $d['sub_location'] = $this->client_model->get_subloc_data($name);
        $d['featured'] = $this->client_model->get_featured_directory($name);
        $d['category'] = $this->client_model->get_category_data();
        $d['blogs'] = $this->client_model->get_blogs_by_location($name);
        if ($d['loc_data']->num_rows() > 0) {
            $this->session->set_userdata('location', $name);
            $this->load->view('client/includes/header', $d);
            $this->load->view('client/index1', $d);
            $this->load->view('client/includes/footer', $d);
        } else {
            $this->session->unset_userdata('location');
            $this->load->view('404');
        }
    }
}
