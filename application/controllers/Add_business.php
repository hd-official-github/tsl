<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Add_Business extends CI_Controller
{

    public function index()
    {
        // echo 'hello';
        if ($this->session->user) {
            redirect(base_url() . 'thespaline-business/dashboard');
        } else {
            redirect(base_url() . 'thespaline-business/login');
        }
    }
    public function login()
    {
        // if ($this->input->post('submit')) {
        //     // $arr = array(

        //     // );
        // } else {
        // }
        $this->checklogin();
        $this->load->view('tslbusiness/includes/header');
        $this->load->view('tslbusiness/login');
        $this->load->view('tslbusiness/includes/footer');
    }
    public function signup()
    {
        $this->checklogin();
        $this->load->view('tslbusiness/includes/header');
        $this->load->view('tslbusiness/signup');
        $this->load->view('tslbusiness/includes/footer');
    }
    public function signup_submit()
    {
        if ($this->input->post('submit')) {
            $this->load->model('Business_model');
            $exist_email = $this->Business_model->get_email($this->input->post('email'));
            if ($exist_email) {
                $d['err'] = "This email already exists.";
                $this->load->view('tslbusiness/includes/header');
                $this->load->view('tslbusiness/signup', $d);
                $this->load->view('tslbusiness/includes/footer');
            } else {
                $arr = array(
                    'b_name' => $this->input->post('b_name'),
                    'o_name' => $this->input->post('o_name'),
                    'phone' => $this->input->post('mob'),
                    'email_id' => $this->input->post('email'),
                    'password' => md5($this->input->post('pass')),
                );
                $this->load->model('Business_model');
                $q = $this->Business_model->upload_vendor($arr);
                if ($q) {
                    $this->session->set_userdata('user', $this->input->post('email_id'));
                    redirect(base_url() . 'thespaline-business/dashboard');
                }
            }
        } else {
            redirect(base_url() . 'thespaline-business/signup');
        }
    }
    public function dashboard()
    {
        $this->load->view('tslbusiness/includes/header');
        $this->load->view('tslbusiness/dashboard');
        $this->load->view('tslbusiness/includes/footer');
    }

    public function checklogin()
    {
        if ($this->session->user) {
            redirect(base_url() . 'thespaline-business/dashboard');
        }
    }
}
