<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleados extends CI_Controller {

    public function __construct() {
  
        //llamamos al constructor de la clase padre
          parent::__construct();
         
        //llamo al helper url
          $this->load->helper("url"); 
  
        //llamo o incluyo el modelo
            $this->load->model("EmployeeModel");
         
        //cargo la libreria de sesiones
          $this->load->library("session");
    
          $this->load->helper("cookie");
  
    }

	public function index()
	{
        $this->load->view('header');
		$this->load->view('empleados');
        $this->load->view('footer');

	}

    function consultar() {
        $request = $this->EmployeeModel->ver();// Enviamos al modelo el estado que recibimos como parametro y la variable temp

        $data = [];// creamos el arreglo data
    
        // $ACTIONS = "<div class='btn-group'><a href=".site_url('Ventas/dtventa/{ID}')."><button type='button' class='btn btn-info dropdown-toggle' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>Detalles</button></a></div>";
    
        //     foreach ($request as $row) { // Recorremos el arreglo que recivimos de la variable $request
        //             $row["ACTIONS"] = str_replace('{ID}', $row['ID'], $ACTIONS); // Creamos el campo Actions dentro del arreglo y reemplazamos el comodin con la columna ID del arreglo
        //             $data[] = $row; // En el arreglo data le pasamos la fila de datos que acabamos de generar
        //     }        
    
        $this->data["request"] = $request;
    
        echo json_encode(["data" => $request], JSON_UNESCAPED_UNICODE);
    }

    function viewinsert() {

        $this->load->view('header');
        $this->load->view("insertEmployee");
        $this->load->view('footer');

    }

    function insertar() {
        // var_dump($this->input->post());
        // die;
        $addemp = $this->input->post();
		$addemp["FECHA_INGRESO"] = date("Y-m-d");
		
		$this->EmployeeModel->addemployee($addemp);
    }
}
