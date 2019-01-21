<?php

class patient_model extends CI_Model {

    //put your code herep



    public function savePatientInfo($data) {
        $this->db->insert('patient', $data);
         return $this->db->insert_id();
    }
     public function saveLoginInfo($data) {
        $this->db->insert('admin', $data);
    }
      public function saveMessage($data) {
        $this->db->insert('message', $data);
    }
    public function saveComplaint($data) {
        $this->db->insert('complaint', $data);
    }
    public function selectComplaint($patientID) {
        $this->db->select('*');
        $this->db->from('complaint');
        $this->db->where('patientID', $patientID);
        $this->db->order_by("complaint_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
      public function deleteComplaint($complaint_id){
        $this->db->where('complaint_id', $complaint_id);
        $this->db->delete('complaint');
    }
     public function selectChatDoctors($patientID) {
        $this->db->select('*');
        $this->db->from('message');
        $this->db->join('doctor', 'doctor.doctor_id  = message.recieverID', 'full outer');
        $this->db->where('message.senderID', $patientID);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function selectMessage() {
        $this->db->select('*');
        $this->db->from('message');
         $this->db->order_by("message_id", "desc");
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
   public function selectPatientInfo($patientID) {
        $this->db->select('*');
        $this->db->from('patient');
         $this->db->where("patient_id", $patientID);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
     public function searchDoctor($search) {
        $this->db->select('*');
        $this->db->from('doctor');
        $this->db->like('firstName', $search);
        $this->db->or_like('lastName', $search);
        $this->db->or_like('degree',$search);
        $this->db->or_like('address', $search);
        $this->db->or_like('chamAddress', $search);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
}

?>
