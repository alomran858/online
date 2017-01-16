<?php
class List_model extends CI_Model {
public function __construct(){
  $this->load->database() ;

    }




public function enter($data){
    $this->load->helper('url');



          return $this->db->insert('list',$data);



    }




}







?>
