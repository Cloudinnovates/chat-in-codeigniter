<?php


class Admin_model extends CI_Model {
    
    
    
    public function selectDoctors() {
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->join('admin', 'admin.user_id = doctor.doctor_id', 'full outer');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function doctorConfirmation($doctor_id){
        $this->db->set('reg_status', 1 , false);
        $this->db->where('user_id', $doctor_id);
        $this->db->update('admin');
    }
      public function doctorCencel($doctor_id){
        $this->db->where('doctor_id', $doctor_id);
        $this->db->delete('doctor');
    }
    public function deleteDoctorAdmin($doctor_id){
        $this->db->where('user_id', $doctor_id);
        $this->db->delete('admin');
    }
    
    
    
     public function selectPatients() {
        $this->db->select('*');
        $this->db->from('patient');
         $this->db->join('admin', 'admin.user_id = patient.patient_id', 'full outer');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function patientConfirmation($patient_id){
        $this->db->set('reg_status', 1 , false);
        $this->db->where('user_id', $patient_id);
        $this->db->update('admin');
    }
     public function patientCencel($patient_id){
        $this->db->where('patient_id', $patient_id);
        $this->db->delete('patient');
    }
    public function deletePatientAdmin($patient_id){
        $this->db->where('user_id', $patient_id);
        $this->db->delete('admin');
    }
      public function selectComplaints() {
        $this->db->select('*');
        $this->db->from('complaint');
        $this->db->order_by("complaint_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    public function save_crime_info($data) {
        $this->db->insert('case', $data);
        return $this->db->insert_id();
    } 
        public function select_all_case() {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->order_by("case_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_ten_case() {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->order_by("case_id", "desc");
        $this->db->limit('8');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_car_case() {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->join('payment', 'case.case_id = payment.case_id', 'full outer');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_last_week_car_case($current_date,$last_date) {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->join('payment', 'case.case_id = payment.case_id', 'full outer');
        $this->db->where('start_date >=', '02-10-2018');
        $this->db->where('start_date <=', $current_date);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function select_monthly_car_case() {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->join('payment', 'case.case_id = payment.case_id', 'full outer');
        $this->db->where('month(case.start_date)', date('m'));
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_last_five_car_case() {
      $this->db->select('*');
        $this->db->from('case');
        $this->db->order_by("case_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
       public function select_all_payment_received() {
        $this->db->select('*');
        $this->db->from('payment_attachment');
        $this->db->where('status','Sent');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
       public function select_all_payment_pending() {
        $this->db->select('*');
        $this->db->from('payment_attachment');
        $this->db->where('status','Pending');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_payment_finish() {
        $this->db->select('*');
        $this->db->from('payment_attachment');
        $this->db->where('status','Finish');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function select_all_cars($case_id) {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->where('case_id', $case_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
     public function select_all_case_info($case_id) {
        $this->db->select('*');
        $this->db->from('case');
        $this->db->where('case_id', $case_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
     public function select_all_complain() {
        $this->db->select('*');
        $this->db->from('complain');
        $this->db->order_by("complain_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function select_all_complain_info($complain_id) {
        $this->db->select('*');
        $this->db->from('complain');
        $this->db->where('complain_id', $complain_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function delete_complain_info_by_complain_id($complain_id){
        $this->db->where('complain_id', $complain_id);
        $this->db->delete('complain');
    }
    public function save_paper_location_info($sdata){
        $this->db->insert('paper_location',$sdata);
    }
     public function save_category_info($sdata){
        $this->db->insert('category',$sdata);
    }
     public function select_all_category() {
        $this->db->select('*');
        $this->db->from('category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function delete_category_info_by_category_id($category_id){
        $this->db->where('category_id', $category_id);
        $this->db->delete('category');
    }
     public function select_single_category($category_id){
        $this->db->select('*');
        $this->db->from('category');
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function update_category_info($data, $category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->update('category', $data);
    } 
     public function select_all_user_info() {
        $this->db->select('*');
        $this->db->from('car_owner');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function delete_user_info_by_user_id($user_id){
        $this->db->where('user_id', $user_id);
        $this->db->delete('car_owner');
    }
    
}


?>
