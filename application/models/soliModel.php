<?php
class SoliModel extends CI_Model{

    public function __construct(){

        parent::__construct();
        $this->load->database();
    }

    public function ver(){
        
        return $this->db->select('SOLICITUD.*, SOLICITUD.ID, EMPLEADO.ID, EMPLEADO.NOMBRE')->join('EMPLEADO', 'SOLICITUD.ID_EMPLEADO=EMPLEADO.ID')->get('SOLICITUD')->result_array();

    }

    public function addsolicitud($data){

        return $this->db->insert('SOLICITUD', $data);

    }

 
}
?>