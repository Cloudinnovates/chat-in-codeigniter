<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct() {
        parent::__construct();
     $this->load->model('Admin_model', 'a_model', true);
      $this->load->model('patient_model', 'p_model', true);
    }
    private static $maincontentpublic = null;

    public function index() {
        $data = array();
        $data['allDoctors'] = $this->a_model->selectDoctors();
        $data['allPatients'] = $this->a_model->selectPatients();
        $data['content'] = $this->load->view('admin/content', $data, true);
        $this->load->view('admin/index', $data);
        
    }
    // Doctor functons here............
    
    public function doctorList(){
        $data = array();
        $data['allDoctors'] = $this->a_model->selectDoctors();
        $data['content'] = $this->load->view('admin/doctorList', $data, true);
        $this->load->view('admin/index', $data);
    }
     public function requestDoctor(){
        $data = array();
        $data['allDoctors'] = $this->a_model->selectDoctors();
        $data['content'] = $this->load->view('admin/requestDoctor', $data, true);
        $this->load->view('admin/index', $data);
    }
    public function doctorConfirmation($doctor_id){
        $this->a_model->doctorConfirmation($doctor_id);
        redirect('admin/doctorList');
    }
    public function doctorCancel($doctor_id){
        $this->a_model->doctorCencel($doctor_id);
        $this->a_model->deleteDoctorAdmin($doctor_id);
        redirect('admin/requestDoctor');
    }
    

        // Patient function here....................
    
     public function patientList(){
        $data = array();
        $data['allPatients'] = $this->a_model->selectPatients();
        $data['content'] = $this->load->view('admin/patientList', $data, true);
        $this->load->view('admin/index', $data);
    }
      public function requestPatient(){
        $data = array();
        $data['allPatients'] = $this->a_model->selectPatients();
        $data['content'] = $this->load->view('admin/requestPatient', $data, true);
        $this->load->view('admin/index', $data);
    }
     public function patientConfirmation($patient_id){
        $this->a_model->patientConfirmation($patient_id);
        redirect('admin/patientList');
    }
     public function patientCancel($patient_id){
         $this->a_model->patientCencel($patient_id);
        $this->a_model->deletePatientAdmin($patient_id);
        redirect('admin/requestPatient');
    }
    
     public function allComplaint(){
        $data = array();
        $data['allDoctors'] = $this->a_model->selectDoctors();
         $data['complaint'] = $this->a_model->selectComplaints();
        $data['content'] = $this->load->view('admin/complaint', $data, true);
        $this->load->view('admin/index', $data);
    }
      public function deleteComplaint($complaint_id){
        $data = array();
         $this->p_model->deleteComplaint($complaint_id);
        $sdata = array();
        $sdata['exception'] = "Your complain delete successfully";
        $this->session->set_userdata($sdata);
       $data['allDoctors'] = $this->a_model->selectDoctors();
         $data['complaint'] = $this->a_model->selectComplaints();
        $data['content'] = $this->load->view('admin/complaint', $data, true);
        $this->load->view('admin/index', $data);
        
    }
    
}
   ?>