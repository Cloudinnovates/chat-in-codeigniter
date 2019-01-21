<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

session_start();

class Login extends CI_Controller {

    public function __construct() {
        parent::__construct();

      $admin_id = $this->session->userdata('admin_id');
       $this->load->model('patient_model', 'p_model', true);
        $this->load->model('doctor_model', 'd_model', true);
      
    }

    public function index() {
        $data = array();
        $data['title'] = 'Log In Form';
        $this->load->view('admin/login');
    }
 public function check_login() {
         $email_address = $this->input->post('email', true);
         $password = $this->input->post('password', true);
         $department = $this->input->post('department', true);
    //echo '----'.$email_address.'-----'.$password;
    
        $this->load->model('admin_login_model', 'al_model', true);
        $result = $this->al_model->select_admin($email_address, $password);
       
        // echo '<pre>';
        // print_r($result);
        if ($result) {
            $check_department=$result->department;
            if($check_department==$department){
                  
                if($check_department=="admin"){
                $data = array();
                $data['admin_id'] = $result->admin_id;
                 $data['user_id'] = $result->user_id;
                $data['admin_name'] = $result->email;
                $this->session->set_userdata($data);
                redirect("admin");
                }
                else if($check_department=="doctor"){
                   $sdata = array();
                $sdata['admin_id'] = $result->user_id;
                 $sdata['user_id'] = $result->user_id;
                $sdata['admin_name'] = $result->email;
                $this->session->set_userdata($sdata);
                    redirect("doctor");  

                }
                else{
                     $sdata = array();
                $sdata['admin_id'] = $result->user_id;
                 $sdata['user_id'] = $result->user_id;
                $sdata['admin_name'] = $result->email;
                $this->session->set_userdata($sdata);
                    redirect("patient");  
                } 
            }else{
             $sdata = array();
            $sdata['exception'] = "Sorry!!! You try to access wrong login";
            $this->session->set_userdata($sdata);
            $sdata['department']=$department;
            $this->load->view('login/login', $sdata);
            }
        
        } else {
            $sdata = array();
            $sdata['exception'] = "Sorry!!! User name or password is invalid!";
            $this->session->set_userdata($sdata);
            $sdata['department']=$department;
            $this->load->view('login/login', $sdata);
        }
    }
     
    
    public function savePatient(){
              $data = array();
        /* Uplod start */
        $config['upload_path'] = 'img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            $this->load->view('patient/addPatient',$data);
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['name'] = $this->input->post('name', true);
            $data['age'] = $this->input->post('age', true);
            $data['gender'] = $this->input->post('gender', true);
            $data['weight'] = $this->input->post('weight', true);
            $data['email'] = $this->input->post('email', true);
            $data['phone'] = $this->input->post('phone', true);
            $data['address'] = $this->input->post('address', true);
            $data['password'] = $this->input->post('password', true);
            $patientID=$this->p_model->savePatientInfo($data);
            $ddate=array();
            $ddate['email'] = $this->input->post('email', true);
            $ddate['password'] = $this->input->post('password', true);
            $ddate['department'] = 'patient';
            $ddate['user_id'] = $patientID;
            $this->p_model->saveLoginInfo($ddate);
            $edata = array();
            $edata['message'] = " Registration Successfully";
            $this->session->set_userdata($edata);
            $this->load->view('patient/addPatient',$data);
        }
    
    }
    
    
     public function saveDoctor(){
              $data = array();
        /* Uplod start */
        $config['upload_path'] = 'img/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '500000';
        $config['max_width'] = '100240';
        $config['max_height'] = '76800';
        $error = array();
        $fdata = array();
        $config['overwrite'] = true;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('photo')) {
            $error = $this->upload->display_errors();
            $edata = array();
            $edata['error_message'] = $error;
            $this->session->set_userdata($edata);
            $this->load->view('doctor/addDoctor',$data);
        } else {
            $fdata = $this->upload->data();
            $data['photo'] = base_url() . $config['upload_path'] . $fdata['file_name'];
            $data['firstName'] = $this->input->post('firstName', true);
            $data['lastName'] = $this->input->post('lastName', true);
            $data['passYear'] = $this->input->post('passYear', true);
            $data['regNumber'] = $this->input->post('regNumber', true);
             $data['degree'] = $this->input->post('degree', true);
            $data['email'] = $this->input->post('email', true);
            $data['phone'] = $this->input->post('phone', true);
            $data['chamAddress'] = $this->input->post('chamAddress', true);
            $data['address'] = $this->input->post('address', true);
            $data['password'] = $this->input->post('password', true);
            $DoctorID=$this->d_model->saveDoctorInfo($data);
            $ddate=array();
            $ddate['email'] = $this->input->post('email', true);
            $ddate['password'] = $this->input->post('password', true);
            $ddate['department'] = 'doctor';
            $ddate['user_id'] = $DoctorID;
            $ddata['online_status'] = '0';
            $ddata['reg_status'] = '0';
            $this->d_model->saveLoginInfo($ddate);
            $edata = array();
            $edata['message'] = " Registration Successfully";
            $this->session->set_userdata($edata);
            $this->load->view('doctor/addDoctor',$data);
        }
    
    }
    
}


?>