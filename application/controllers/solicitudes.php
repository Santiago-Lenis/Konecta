<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitudes extends CI_Controller {

    public function __construct() {
  
        //llamamos al constructor de la clase padre
          parent::__construct();
         
        //llamo al helper url
          $this->load->helper("url"); 
  
        //llamo o incluyo el modelo
            $this->load->model("SoliModel");
         
        //cargo la libreria de sesiones
          $this->load->library("session");
    
          $this->load->helper("cookie");
  
    }

	public function index()
	{
        $this->load->view('header');
		$this->load->view('solicitudes');
        $this->load->view('footer');
        
	}

    function consultar() {
        $request = $this->SoliModel->ver();// Enviamos al modelo el estado que recibimos como parametro y la variable temp
    
        // var_dump($request);
        // die;
    
        $this->data["request"] = $request;
    
        echo json_encode(["data" => $request], JSON_UNESCAPED_UNICODE);
    }

    function viewinsert() {

        $this->load->view('header');
        $this->load->view("insertSolicitud");
        $this->load->view('footer');

    }

    function insertar() {
        $addsoli = $this->input->post();

		
		$this->SoliModel->addsolicitud($addsoli);
    }
}
