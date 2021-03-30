<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Category extends CI_Controller
{
    public function index()
    {
        $loc = $this->uri->segment(1);
        $category = str_replace('-', ' ', $this->uri->segment(3));
        echo $loc . $category;
    }
}
