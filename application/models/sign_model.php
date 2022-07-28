<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Sign_model extends CI_Model
{
    function index ($insertArray){

        $this->db->insert('signup',$insertArray);
     
 }
      public function isvalidate($username,$password)
      {
          $q=$this->db->where(['email'=>$username,'password'=>$password])
              ->get('signup');
              
                 

              if($q->num_rows())
              {
                  return $q->row()->sig_id;
              }
              else
              {
                return false;
              }


      }
       public function admin_dtl ($userid)
      {
          $this->db->select('*'); 
          $this->db->from('profile'); 
           $this->db->where('id',$userid);  
            $query = $this->db->get();  
            if( !empty($query->result()))
            {
              $result_data = $query->result();
              return $result_data[0];
            }else{
              return array();
            }
      }
      public function updateusers($userid,$formArray){
  $this->db->where('id', $userid);
  $this->db->update('profile',$formArray);
 $result =  $this->db->affected_rows();
 return  $result ;
}

}
?>



