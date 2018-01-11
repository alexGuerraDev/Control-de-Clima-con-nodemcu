<?php defined('BASEPATH') OR exit('No');
/**
 * Created by PhpStorm.
 * User: jguerra
 * Date: 12/11/17
 * Time: 09:55 AM
 */


class Temperatura extends CI_Model{



    public function listarDatos(){
    	$query = $this->db->query('Select * from temperatura order by id DESC LIMIT 1');
        $temp_actual = $query->result_array();
        return $temp_actual;

    }
    
    
    public function sensor2(){
    	$query = $this->db->query('Select * from sensor2 order by id DESC LIMIT 1');
        $temp_actual_ext = $query->result_array();
        return $temp_actual_ext;
    }


    public function unix_timestamp(){
        $this->db->select('unix_timestamp(fecha) as fecha,temperatura ,id');
        $this->db->from('temperatura');
        $array = $this->db->get();
        $timestamp = $array->result_array();
        return $timestamp;
    }
    
    public function registros(){
    	$query= $this->db->query('select * from (select unix_timestamp(fecha) as fecha,temperatura ,id FROM temperatura ORDER BY id desc LIMIT 2000) a order by id asc');
    	$timestamp = $query->result_array();
        return $timestamp;
    }
    
    
      public function registrosSensor2(){
    	$query= $this->db->query('select * from (select unix_timestamp(fecha) as fecha,temperatura ,id FROM sensor2 ORDER BY id desc LIMIT 2000) a order by id asc');
    	$sensor2 = $query->result_array();
        return $sensor2;
    }
    
    
  





}