<?php

class Privilege extends Admin_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('action');
    }
    
    public function index() {
        $this->data['meta_title'] = '';
        $this->data['active'] = 'data-target="privilege"';
        $this->data['subMenu'] = 'data-target="add-new"';
        $this->data['confirmation'] = null;


        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/Privilege/Privilege', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

}