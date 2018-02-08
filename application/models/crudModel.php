<?php

class CrudModel extends CI_Model {
    public function getRecords(){
           $query = $this->db->get('user');
           return $query->result_array();
    }

    public function insertUser($data) {
        return $this->db->insert('user', $data);
    }
    public function getUserById($userId) {
        $query= $this->db->get_where('user',array('user_id' => $userId ));
        return $query->row_array();
    }
    public function deleteUserById($userId) {
        $this->db->where('user_id', $userId);
        return $this->db->delete('user');
    }

    public function updateUser($id,$data) {
          $this->db->where('user_id', $id);
          return $this->db->update('user', $data);
    }





}


?>
