<?php

class doctor_model extends CI_Model {

    //put your code herep



    public function saveDoctorInfo($data) {
        $this->db->insert('doctor', $data);
         return $this->db->insert_id();
    }
    public function saveLoginInfo($data) {
         $this->db->insert('admin', $data);
    }
   public function selectDoctorInfo($doctorID) {
        $this->db->select('*');
        $this->db->from('doctor');
         $this->db->where("doctor_id", $doctorID);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    public function selectPatient() {
        $this->db->select('*');
        $this->db->from('patient');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
}

?>
