<?php
class News extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->model('news_model');
                $this->load->helper('url_helper');
        }

        public function index()
        {
                $data['news'] = $this->news_model->get_news();
                $data['title'] = 'ESTE ES EL TITULO';
        
                $this->load->view('secciones/header', $data);
                $this->load->view('secciones/head', $data);
                $this->load->view('news', $data);
                $this->load->view('secciones/footer');
        }
    }