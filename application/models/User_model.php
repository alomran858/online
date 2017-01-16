<?php
class User_model extends CI_Model {
public function __construct(){
  $this->load->database() ;

    }




public function register($data){
    $this->load->helper('url');



          return $this->db->insert('user',$data);



    }




public function login($username,$password){
  $this -> db -> select('user_id, username, password');
     $this -> db -> from('user');
     $this -> db -> where('username', $username);
     $this -> db -> where('password', $password);
     $this -> db -> limit(1);

     $query = $this -> db -> get();
     if($query -> num_rows() == 1)
        {
          return $query->result();
        }
        else
        {
          return false;
        }


}


}







?>
