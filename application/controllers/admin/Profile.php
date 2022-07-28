<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {
	function __construct() {
        parent::__construct();
        $this->load->model('sign_model');
        $this->load->model('profile_model');
    }

    public function index(){
            $sig_id =  $this->session->userdata('sig_id');
             
          
			$data['admin'] = array();
			$resutl_get  = $this->profile_model->find($sig_id);
			$data['admin'] = $resutl_get;
			$userdetail = $this->sign_model->admin_dtl($sig_id);
			$data['admin_details']  = $userdetail;
            $this->load->view('admin/template/header');
            $this->load->view('admin/profile', $data);     
         
               
    }
  
	public function editProfile(){
        $data = array();
        $user_id= $this->session->userdata('sig_id'); 
        
        

        // $data["file"] = "admin/editprofile";
        // $data["title"] = "New password";
         $this->load->view('admin/profile',$data);
    }
        public function profileedit() {
        	// $this->load->model('sign_model');
            $sig_id =  $this->session->userdata('sig_id');
            $userdetail = $this->sign_model->admin_dtl($sig_id);
			$data['admin_details']  = $userdetail;

        $this->load->view('admin/template/header');
    	$this->load->view('admin/profileedit',$data);
    }

    public function profileupdate()
    {
       $formArray = array();
		   $formArray['fullname'] = $this->input->post('fullname');
		   $formArray['bio'] = $this->input->post('bio');
		   $formArray['mobilenumber'] = $this->input->post('mobilenumber');
		   $formArray['address'] = $this->input->post('address');

        $user_id = $this->input->post('id');
		  $result =  $this->sign_model->updateusers( $user_id,$formArray);
		 
		   if($result)
		   {
			$this->session->set_flashdata('success' , 'Profile Updated Successfully!');
		   }
		   
		   redirect(base_url().'admin/profile');
	   }
	   public function propicupdate() {

	   	$formArray = array();

	   	if(isset($_FILES['image']['name']) && $_FILES['image']['name'] != '') {

			$f_name         =$_FILES['image']['name'];
			$f_tmp          =$_FILES['image']['tmp_name'];
			$f_size         =$_FILES['image']['size'];
			$f_extension    =explode('.',$f_name);
			$f_extension    =strtolower(end($f_extension));
			$f_newfile      =uniqid().'.'.$f_extension;
			$store          ="profile/images/".$f_newfile;
		
			if(!move_uploaded_file($f_tmp,$store))
			{
				$this->session->set_flashdata('error', 'Image Upload Failed .');
			}
			else
			{
			   $formArray['image'] = $f_newfile;
			   
			}
			 }else{
				$formArray['image'] =   $form_data['old_image'];
			 }

		  $user_id= $this->session->userdata('sig_id');
		  $result =  $this->sign_model->updateusers( $user_id, $formArray);

		 redirect(base_url().'admin/profile');

	   }

	   


    }



?>
