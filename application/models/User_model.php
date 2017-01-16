<?php
class User_model extends CI_Model {
public function __construct(){
  $this->load->database() ;

    }




public function register($data){
    $this->load->helper('url');



          return $this->db->insert('user',$data);



    }

    public function panel($id){
        $this->load->helper('url');

$this->db->select(' COUNT(*) ');
 $this -> db -> from('query');
$this -> db -> where('user_id', $id);
$this -> db -> where('status', 0);
$query = $this->db->get();
$result = $query->row_array();
$data['notfi']=$result['COUNT(*)'];

$this->db->select(' COUNT(*) ');
 $this -> db -> from('query');
$this -> db -> where('user_id', $id);
$this -> db -> where('status', 1);
$query = $this->db->get();
$result = $query->row_array();
$data['fin']=$result['COUNT(*)'];



return $data ;






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
