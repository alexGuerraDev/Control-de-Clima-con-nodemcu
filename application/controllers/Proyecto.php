<?php
/**
 * Created by PhpStorm.
 * * User: jguerra and Duvan Sarmiento
 * Date: 12/11/17
 * Time: 09:49 AM
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto extends CI_Controller {


    function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('Temperatura');
    }

       public function index(){
        $get= $this->Temperatura->listarDatos();
        $get2= $this->Temperatura->sensor2();
        $array = array('array'=>$get,'array2'=>$get2);
        $this->load->view('index',$array);
        //echo json_encode($get);
    }

    public function unix_timestamp(){
        $get= $this->Temperatura->unix_timestamp();
        $arrayNuevo = array();
        $conn=0;
        foreach ($get as $posicion=>$value){
            $arrayNuevo[$conn] = array($value['fecha']*1000,$value['temperatura']*1);
            $conn++;
        }
        echo json_encode($arrayNuevo);
    }
    
    
    public function registro(){
        $get= $this->Temperatura->registros();
        $arrayNuevo = array();
        $conn=0;
        foreach ($get as $posicion=>$value){
            $arrayNuevo[$conn] = array($value['fecha']*1000,$value['temperatura']*1);
            $conn++;
        }
        echo json_encode($arrayNuevo);
    }
    
    
    
      public function registroSensor2(){
        $get= $this->Temperatura->registrosSensor2();
        $arrayNuevo = array();
        $conn=0;
        foreach ($get as $posicion=>$value){
            $arrayNuevo[$conn] = array($value['fecha']*1000,$value['temperatura']*1);
            $conn++;
        }
        echo json_encode($arrayNuevo);
    }
       
        
  

}