<?php


if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function __construct() {
        parent::__construct();
        
       
    }

    public function index() {
        $data = array();
        $this->load->view('login/index', $data);
    }
    public function login($department){
        $data = array();
        $data['department']=$department;
        $this->load->view('login/login', $data);
    }
     public function addDoctor(){
         $data = array();
        $this->load->view('doctor/addDoctor', $data);
    }
    public function addPatient(){
         $data = array();
        $this->load->view('patient/addPatient', $data);
    }
  
     public function logout() {
        $this->session->unset_userdata('admin_id');
        $ldata = array();
        $this->session->sess_destroy();
        $ldata['loged_out'] = "<b>You are successfully logged out!</b>";
        $this->session->set_userdata($ldata);
        redirect("welcome");
    }

   
}
