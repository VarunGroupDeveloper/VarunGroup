<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index() {
        $data['title'] = 'Varun Group';
        $data['page'] = 'templates/home/index';
        $this->load->view('templates/home/main', $data);
    }
    public function about() {
        $data['title'] = 'About - VarunGroup';
        $data['page'] = 'templates/home/about';
        $this->load->view('templates/home/main', $data);
    }

  
}
