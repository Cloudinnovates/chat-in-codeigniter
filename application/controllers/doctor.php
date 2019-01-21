<?php
session_start();
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Doctor extends CI_Controller {

    public function __construct() {
        parent::__construct();
      $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('welcome', 'refresh');
        }
        $this->load->model('doctor_model', 'd_model', true);
        $this->load->model('patient_model', 'p_model', true);
        $this->load->model('admin_model', 'a_model', true);
    }
    private static $maincontentpublic = null;

    public function index() {
        $data = array();
        $doctorID= $this->session->userdata('admin_id');
        $data['doctorInfo'] = $this->d_model->selectDoctorInfo($doctorID);
        $data['content'] = $this->load->view('doctor/content', $data, true);
        $this->load->view('doctor/index', $data);
        
    }
 public function chat($patientID){
        $data = array();
        $doctorID= $this->session->userdata('admin_id');
        $data['doctorID']=$doctorID;
        $data['patientID']=$patientID;
        $data['patientInfo'] = $this->p_model->selectPatientInfo($patientID);
        $data['doctorInfo'] = $this->d_model->selectDoctorInfo($doctorID);
        $data['allPatinet'] = $this->d_model->selectPatient();
        $data['message'] = $this->p_model->selectMessage();
        $data['allChatDoctors'] = $this->p_model->selectChatDoctors($doctorID);
        $this->load->view('doctor/chat',$data);
    }
    public function saveMessage(){
        $data = array();
        $patientID = $this->input->post('recieverID', true);
        $data['message'] = $this->input->post('message', true);
        $data['senderID'] = $this->input->post('senderID', true);
        $data['recieverID'] = $this->input->post('recieverID', true);
        $this->p_model->saveMessage($data);
         $doctorID= $this->session->userdata('admin_id');
        $data['doctorID']=$doctorID;
        $data['patientID']=$patientID;
        $data['patientInfo'] = $this->p_model->selectPatientInfo($patientID);
        $data['doctorInfo'] = $this->d_model->selectDoctorInfo($doctorID);
        $data['allPatinet'] = $this->d_model->selectPatient();
        $data['message'] = $this->p_model->selectMessage();
        $data['allChatDoctors'] = $this->p_model->selectChatDoctors($doctorID);
        $this->chat($patientID);
    }
    
    
    
    
}
   ?>