<?php
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Patient extends CI_Controller {

    public function __construct() {
        parent::__construct();
         $this->load->model('Admin_model', 'a_model', true);
         $this->load->model('patient_model', 'p_model', true);
      $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('welcome', 'refresh');
        }
    }
    private static $maincontentpublic = null;

    public function index() {
        $data = array();
        $data['allDoctors'] = $this->a_model->selectDoctors();
        $patientID= $this->session->userdata('admin_id');
        $data['patientInfo'] = $this->p_model->selectPatientInfo($patientID);
        $data['onlineDoctor'] = $this->load->view('patient/onlineDoctor', $data, true);
        $data['content'] = $this->load->view('patient/content', $data, true);
        $this->load->view('patient/index', $data);
        
    }
    public function chat($doctorID){
        $data = array();
        $patientID= $this->session->userdata('admin_id');
        $data['doctorID']=$doctorID;
        $data['patientID']=$patientID;
        $data['patientInfo'] = $this->p_model->selectPatientInfo($patientID);
        $data['allDoctors'] = $this->a_model->selectDoctors();
        $data['message'] = $this->p_model->selectMessage();
        $data['allChatDoctors'] = $this->p_model->selectChatDoctors($patientID);
        $this->load->view('patient/chat',$data);
    }
    public function saveMessage(){
        $data = array();
        $doctorID = $this->input->post('recieverID', true);
        $data['message'] = $this->input->post('message', true);
        $data['senderID'] = $this->input->post('senderID', true);
        $data['recieverID'] = $this->input->post('recieverID', true);
        $this->p_model->saveMessage($data);
        $patientID = $this->session->userdata('admin_id');
        $data['doctorID'] = $doctorID;
        $data['patientID'] = $patientID;
        $data['patientInfo'] = $this->p_model->selectPatientInfo($patientID);
        $data['allDoctors'] = $this->a_model->selectDoctors();
        $data['message'] = $this->p_model->selectMessage();
        $this->chat($doctorID);
    }
    public function complaint(){
        $data = array();
        $patientID= $this->session->userdata('admin_id');
        $data['patientID']=$patientID;
         $data['complaint'] = $this->p_model->selectComplaint($patientID);
        $data['patientInfo'] = $this->p_model->selectPatientInfo($patientID);
        $data['content'] = $this->load->view('patient/complaint', $data, true);
        $this->load->view('patient/index', $data);
        
    }
      public function saveComplaint(){
        $data = array();
        $patientID = $this->session->userdata('admin_id');
        $data['complaint'] = $this->input->post('complaint', true);
        $data['patientID'] = $patientID;
        $this->p_model->saveComplaint($data);
        $sdata = array();
        $sdata['exception'] = "Your complain sent successfully";
        $this->session->set_userdata($sdata);
           $data['complaint'] = $this->p_model->selectComplaint($patientID);
         $data['patientInfo'] = $this->p_model->selectPatientInfo($patientID);
        $data['content'] = $this->load->view('patient/complaint', $data, true);
        $this->load->view('patient/index', $data);
        
    }
     public function deleteComplaint($complaint_id){
        $data = array();
        $this->p_model->deleteComplaint($complaint_id);
        $sdata = array();
        $sdata['exception'] = "Your complain delete successfully";
        $this->session->set_userdata($sdata);
        $patientID = $this->session->userdata('admin_id');
        $data['complaint'] = $this->p_model->selectComplaint($patientID);
         $data['patientInfo'] = $this->p_model->selectPatientInfo($patientID);
        $data['content'] = $this->load->view('patient/complaint', $data, true);
        $this->load->view('patient/index', $data);
        
    }
    
    public function search(){
         $data = array();
        $search = $this->input->post('search', true);
        $patientID = $this->session->userdata('admin_id');
        $data['patientID'] = $patientID;
        $data['searchDoctor'] = $this->p_model->searchDoctor($search);
        $data['allDoctors'] = $this->a_model->selectDoctors();
        $data['patientInfo'] = $this->p_model->selectPatientInfo($patientID);
        $data['content'] = $this->load->view('patient/searchDoctor', $data, true);
        $this->load->view('patient/index', $data);
    }
    
    
    
}
   ?>