<?php defined('BASEPATH') or exit('No direct script access allowed');
class Survey_Model extends CI_Model
{


    public function startNewForm(){
        $data = array(
            "ip_address" => 1,
            "date" => 1,
        );
        $this->db->insert('survey_main', $data);
        $_SESSION['form_id'] = $this->db->insert_id();
        return true;
    }
    public function saveData($data,$table){
        $this->db->insert($table, $data);
    }
    public function updateOrSave($data,$table){
        $this->db->where('main_id',$_SESSION['form_id']);
        $this->db->update($table, $data);
    }
    public function getData($table){
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('main_id',$_SESSION['form_id']);
        $result =  $this->db->get()->row();
        if(!$result){
            $this->db->insert($table,['main_id'=> $_SESSION['form_id']]);
            $_SESSION[$table] = $this->db->insert_id();
        }
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where('main_id',$_SESSION['form_id']);
        $result =  $this->db->get()->row();
        return $result;
    }

}