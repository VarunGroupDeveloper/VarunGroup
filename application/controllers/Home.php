<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('AdminModel');
    }
    public function index() 
    {
        $data['title'] = 'Home || Varun Group';
        $data['page'] = 'templates/home/index';
        $this->load->view('templates/home/main', $data);
    }
    public function history() 
    {
        $this->load->model('AdminModel');
        $data['title'] = 'History || Varun Group';
        $data['page'] = 'templates/home/pages/history';
        $data['banners'] = $this->AdminModel->get_active_banners_by_page('history');
        $this->load->view('templates/home/main', $data);
    }
    public function leadership()
    {
        $this->load->model('AdminModel');
        $data['title'] = 'Leadership || Varun Group';
        $all = $this->AdminModel->get_active_banners_by_page('leadership'); // array
        $data['banners'] = !empty($all) ? $all[0] : null;                     // <-- first one
        $data['page']  = 'templates/home/pages/leadership';
        $this->load->view('templates/home/main', $data);
    }
    public function business() 
    {
        $data['title'] = 'Business || Varun Group';
        $data['page'] = 'templates/home/pages/business';
        $this->load->view('templates/home/main', $data);
    }
    public function automobile() 
    {
        $data['title'] = 'Automobile Dealership || Varun Group';
        $data['page'] = 'templates/home/pages/automobile';
        $this->load->view('templates/home/main', $data);
    }
    public function autofinance() 
    {
        $data['title'] = 'Autofinance || Varun Group';
        $data['page'] = 'templates/home/pages/autofinance';
        $this->load->view('templates/home/main', $data);
    }
    public function infrastructure() 
    {
        $data['title'] = 'Infrastructure || Varun Group';
        $data['page'] = 'templates/home/pages/infrastructure';
        $this->load->view('templates/home/main', $data);
    }
    public function hospitality() 
    {
        $data['title'] = 'Hospitality || Varun Group';
        $data['page'] = 'templates/home/pages/hospitality';
        $this->load->view('templates/home/main', $data);
    }
    public function agriculture() 
    {
        $data['title'] = 'Agriculture || Varun Group';
        $data['page'] = 'templates/home/pages/agriculture';
        $this->load->view('templates/home/main', $data);
    }
    public function news_and_updates() 
    {
        $data['title'] = 'News & Updates || Varun Group';
        $data['page'] = 'templates/home/pages/news_and_updates';
        $this->load->view('templates/home/main', $data);
    }
    public function blogs() 
    {
        $data['title'] = 'Blogs || Varun Group';
        $data['page'] = 'templates/home/pages/blogs';
        $this->load->view('templates/home/main', $data);
    }
    public function gallery() 
    {
        $data['title'] = 'Gallery || Varun Group';
        $data['page'] = 'templates/home/pages/gallery';
        $this->load->view('templates/home/main', $data);
    }
    public function community() 
    {
        $data['title'] = 'Community || Varun Group';
        $data['page'] = 'templates/home/pages/community';
        $this->load->view('templates/home/main', $data);
    }
    public function contact() 
    {
        $data['title'] = 'Contact || Varun Group';
        $data['page'] = 'templates/home/pages/contact';
        $this->load->view('templates/home/main', $data);
    }
}
