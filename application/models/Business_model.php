<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Business_model extends CI_Model
{
    function send_mail($from, $to, $subject, $message)
    {
        $this->load->library('email');
        $config = array();
        $config['protocol'] = 'smtp';
        $config['smtp_host'] = 'mail.inkforest.in';
        $config['smtp_user'] = 'sales@inkforest.in';
        $config['smtp_pass'] = 'inkforest@123';
        $config['smtp_port'] = 587;
        $this->email->initialize($config);
        $this->email->set_newline("\r\n");
        $this->email->from("sales@inkforest.in", $from);
        $this->email->to($to);
        $this->email->subject($subject);
        $this->email->message($message);
        if ($this->email->send())
            echo "true";
        else
            echo "false";
    }
    function get_email($email)
    {
        $this->db->where('email_id', $email);
        return $this->db->get('vendors');
    }
    function upload_vendor($arr)
    {
        $this->db->insert('vendors', $arr);
    }
}
