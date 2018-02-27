<?php
//This tools used to convert old data from old payment system to new payment system
class Datafilter extends Admin_controller {

    function __construct() {
        parent::__construct();
        $this->load->model('action');
    }

    public function index() {
        $this->data['meta_title'] = 'General Settings';
        $this->data['active'] = 'data-target="general-settings"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data["purpose"] = array("tution_fee","admission_fee","re_admission_fee","1st_semester_exam","2nd_semester_exam","annual_exam","session_charge","library_fee","dyning_charge");

        $this->data["datas"] = $this->action->read("demo");

		$this->load->view($this->data['privilege'] . '/includes/header', $this->data);
        $this->load->view($this->data['privilege'] . '/includes/aside', $this->data);
        $this->load->view($this->data['privilege'] . '/includes/headermenu', $this->data);
        $this->load->view('components/data-filter', $this->data);
        $this->load->view($this->data['privilege'] . '/includes/footer');
    }

}
