<?php

class Employee extends Admin_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('action');
        $this->load->library('upload');
    }
    //----------------------------------------------------------------------------------------------
    //------------------------------------------Add Employee Start here-----------------------------
    //----------------------------------------------------------------------------------------------
    public function index() {
        $this->data['meta_title'] = '';
        $this->data['active'] = 'data-target="employee_menu"';
        $this->data['subMenu'] = 'data-target="add-new"';
        $this->data['confirmation'] = null;

            //-------------------------------------------------------------------------------------------
            //-----------------------------------Add employee Start here-------------------------------------
            $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|min_length[11]|is_unique[employee.mobile]');
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('designation', 'Designation', 'trim|required');
           // $this->form_validation->set_rules('username', 'Username', 'trim|is_unique[users.username]');

            if ($this->input->post("add_emp")) {

                //add start

                if($this->form_validation->run() == FALSE){
                    $msg_array=array(
                        "title"=>"Error",
                        "emit"=>validation_errors(),
                        "btn"=>true
                    );
                        $this->data['confirmation']=message("warning",$msg_array);
                }

                else{

                    $data_emp=array(
                        "name"=>$this->input->post("name"),
                        "father_name"=>$this->input->post("father_name"),
                        "mother_name"=>$this->input->post("mother_name"),
                        "mobile"=>$this->input->post("mobile"),
                        "designation"=>$this->input->post("designation"),
                        "preasent_address"=>$this->input->post("preasent_address"),
                        "permanent_address"=>$this->input->post("permanent_address"),
                        "joining_date"=>$this->input->post("joining_date")
                    );

                    if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {

                        $config['upload_path'] = './public/employee';
                        $config['allowed_types'] = 'png|jpeg|jpg|gif';
                        $config['max_size'] = '4096';
                        $config['max_width'] = '3000'; /* max width of the image file */
                        $config['max_height'] = '3000';
                        $config['file_name'] =str_shuffle("employee_".rand(100000,999999)); 
                        $config['overwrite']=true;   
                        
                        $this->upload->initialize($config);
                        
                        if ($this->upload->do_upload("attachFile")){
                            $upload_data = $this->upload->data();
                            
                            $data_emp["image"]="public/employee/".$upload_data['file_name'];


                        } else {
                            $msg_array=array(
                                "title" => "Error",
                                "emit"  => $this->upload->display_errors(),
                                "btn"   => true
                            );
                            $this->data['confirmation'] = message("warning", $msg_array);
                        }

                    }

                    $msg_array = array(
                        "title"=>"Success",
                        "emit"=>"New Employee Successfully Saved",
                        "btn"=>true
                    );
                    
                    $this->data['confirmation'] = message($this->action->add("employee", $data_emp), $msg_array);   
                }
                //add end 

            }

            //------------------------------------Add Employee End here--------------------------------------
            //---------------------------------------------------------------------------------------------

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/employee/employee-nav', $this->data);
        $this->load->view('components/employee/add-employee', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }
    //----------------------------------------------------------------------------------------------
    //------------------------------------------Add Employee End here-------------------------------
    //----------------------------------------------------------------------------------------------

    //----------------------------------------------------------------------------------------------
    //------------------------------------------View Employee start here----------------------------
    //----------------------------------------------------------------------------------------------

    public function show_employee() {
        $this->data['meta_title'] = '';
        $this->data['active'] = 'data-target="employee_menu"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation'] = null;

        //--------------------------------------------------------------------
        //---------------------Delete Data Start------------------------------
        //--------------------------------------------------------------------
        if($this->input->get("delete_token")){//Deleting Message
            $this->action->deletedata('employee',array('id'=>$this->input->get("delete_token")));
            if (is_file("./".$this->input->get("img_url"))) {
                unlink("./".$this->input->get("img_url"));
            }
            redirect('employee/employee/show_employee?d_success="1"','refresh');
        }

        if ($this->input->get("d_success")==1){
            $msg_array=array(
                "title"=>"Deleted",
                "emit"=>"Employee Successfully Deleted",
                "btn"=>true
            );
            $this->data['confirmation']=message("danger",$msg_array);
        }

        //--------------------------------------------------------------------
        //---------------------Delete Data End--------------------------------
        //--------------------------------------------------------------------
        $this->data['employees']=$this->action->read('employee');

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/employee/employee-nav', $this->data);
        $this->load->view('components/employee/show-employee', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    //----------------------------------------------------------------------------------------------
    //------------------------------------------View Employee end here------------------------------
    //----------------------------------------------------------------------------------------------

    //----------------------------------------------------------------------------------------------
    //------------------------------------------View profile start here-----------------------------
    //----------------------------------------------------------------------------------------------

    public function profile($id=null) {
        $this->data['meta_title'] = '';
        $this->data['active'] = 'data-target="employee_menu"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation'] = null;

        $this->data["emp_info"]=$this->action->read("employee",array('id'=>$id));

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/employee/employee-nav', $this->data);
        $this->load->view('components/employee/profile', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    //----------------------------------------------------------------------------------------------
    //------------------------------------------View profile end here-------------------------------
    //----------------------------------------------------------------------------------------------

    public function edit_employee($id=null) {
        $this->data['meta_title'] = '';
        $this->data['active'] = 'data-target="employee_menu"';
        $this->data['subMenu'] = 'data-target="all"';
        $this->data['confirmation'] = null;

        $where = array('id'=>$id);

        $this->data['id']=$id;

            $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|min_length[11]');
            $this->form_validation->set_rules('name', 'Name', 'trim|required');
            $this->form_validation->set_rules('designation', 'Designation', 'trim|required');

        if ($this->input->post('update')) {

//Update start

                if($this->form_validation->run() == FALSE){
                    $msg_array=array(
                        "title"=>"Error",
                        "emit"=>validation_errors(),
                        "btn"=>true
                    );
                        $this->data['confirmation']=message("warning",$msg_array);
                }

                else{

                    $data_emp=array(
                        "name"=>$this->input->post("name"),
                        "father_name"=>$this->input->post("father_name"),
                        "mother_name"=>$this->input->post("mother_name"),
                        "mobile"=>$this->input->post("mobile"),
                        "designation"=>$this->input->post("designation"),
                        "preasent_address"=>$this->input->post("preasent_address"),
                        "permanent_address"=>$this->input->post("permanent_address"),
                        "joining_date"=>$this->input->post("joining_date")
                    );

                    if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {

                        $config['upload_path'] = './public/employee';
                        $config['allowed_types'] = 'png|jpeg|jpg|gif';
                        $config['max_size'] = '4096';
                        $config['max_width'] = '3000'; /* max width of the image file */
                        $config['max_height'] = '3000';
                        $config['file_name'] =str_shuffle("employee_".rand(100000,999999)); 
                        $config['overwrite']=true;   
                        
                        $this->upload->initialize($config);
                        
                        if ($this->upload->do_upload("attachFile")){
                            $upload_data = $this->upload->data();

                            if (is_file("./".$this->input->post("old_image"))) {
                                unlink("./".$this->input->post("old_image"));
                            }
                            
                            $data_emp["image"]="public/employee/".$upload_data['file_name'];


                        } else {
                            $msg_array=array(
                                "title" => "Error",
                                "emit"  => $this->upload->display_errors(),
                                "btn"   => true
                            );
                            $this->data['confirmation'] = message("warning", $msg_array);
                        }

                    }

                    $msg_array = array(
                        "title"=>"Success",
                        "emit"=>"New Employee Successfully Updated",
                        "btn"=>true
                    );
                    
                    $this->data['confirmation'] = message($this->action->update("employee", $data_emp,$where), $msg_array);   
                }
                    
            //Update end 
        }


        $this->data["emp_info"]=$this->action->read("employee",$where);

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/employee/employee-nav', $this->data);
        $this->load->view('components/employee/edit-employee', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function salary($emit = NULL) {
        $this->data['meta_title'] = '';
        $this->data['active'] = 'data-target="employee_menu"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['confirmation'] = null;

        if($this->input->get('delete') == 1){
            $this->data['confirmation'] = message($this->deleteProfile());
        }

        $this->data['profiles']=$this->action->read("users");

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/employee/salary', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function salary_history($emit = NULL) {
        $this->data['meta_title'] = '';
        $this->data['active'] = 'data-target="employee_menu"';
        $this->data['subMenu'] = 'data-target=""';
        $this->data['confirmation'] = null;

        if($this->input->get('delete') == 1){
            $this->data['confirmation'] = message($this->deleteProfile());
        }

        $this->data['profiles']=$this->action->read("users");

        $this->load->view($this->data['privilege'].'/includes/header', $this->data);
        $this->load->view($this->data['privilege'].'/includes/aside', $this->data);
        $this->load->view($this->data['privilege'].'/includes/headermenu', $this->data);
        $this->load->view('components/employee/history', $this->data);
        $this->load->view($this->data['privilege'].'/includes/footer');
    }

    public function hash($string) {
        return hash('md5', $string . config_item('encryption_key'));
    }

    public function read_leftJoin_profile($val){
        $sql= "select * from employee LEFT JOIN users ON employee.employee_mobile=users.mobile where employee_mobile='$val' ";
        $query=$this->db->query($sql);
        return $query->result();
    }

    public function read_leftJoin_teacher($val){
        $sql= "select * from employee LEFT JOIN users ON employee.employee_mobile=users.mobile where employee_type='$val' ";
        $query=$this->db->query($sql);
        return $query->result();
    }



}