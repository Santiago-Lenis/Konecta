<?php
class EmployeeModel extends CI_Model{

    public function __construct(){

        parent::__construct();
        $this->load->database();
    }

    public function ver(){
        
        return $this->db->get('EMPLEADO')->result_array();

    }

    public function addemployee($data){

        return $this->db->insert('EMPLEADO', $data);

    }

 
}
?>