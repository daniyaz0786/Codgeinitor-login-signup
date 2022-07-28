<style>
.profileimage {
    width: 200px;
    height: auto;
    border-radius: 50%;
    margin-left: 60px;
    padding: 20px;
}
.table th, .table td {
    padding: 0.75rem;
    vertical-align: top;
    border-top: 1px solid #e3e6f0;
    border: none !important;
}
div#content {
    background-color: #6e65651c;
}
.userprofile.mt-4 {
    padding: 20px;
}
.mt-1.profiledata {
    text-align: center;
    margin-top: 30px !important;
}
.card.image {
    height: 369px;
}
.picon{
  background-color: red;
}

.picon i {
    color: #fff;
    margin-left: 5px;
    margin-top: 5px;
}
.procam {
    text-align: start;
    margin-left: 190px;
    margin-top: -59px;
    cursor: pointer;
   

}
span.picon {
    background: red;
    padding: 6px;
    border-radius: 50%;
    min-height: 38px;
    display: inline-block;
    min-width: 38px;
}

</style>

<div class="container">
   <?php
                                $this->load->helper('form');
                                $error = $this->session->flashdata('error');
                                if($error)
                                {
                              ?>
                              <div class="alert alert-danger alert-dismissable" id="error">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <?php echo $this->session->flashdata('error'); ?>                    
                              </div>
                              <?php } ?>
                              <?php  
                                $success = $this->session->flashdata('success');
                                if($success)
                                {
                              ?>
                              <div class="alert alert-success alert-dismissable" id="success">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <?php echo $this->session->flashdata('success'); ?>
                              </div>
                            <?php } ?>
  <div class="row">
    <div class="col-md-2">
   
      
       <!--  <a  href="#" class="btn btn-success btn-block mt-2" data-toggle="modal" data-target="#exampleModal" > Upload Image</a> -->
     
          <form method="post"  name="createuser" action=" <?php echo  base_url();?>admin/profile/propicupdate" enctype="multipart/form-data">
          

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                      <label for="myfile">Select files:</label>
                      <input type="hidden"  id="myfile" name="old_image" value="<?php echo $admin_details->image;?>">
                      <input type="file" required id="myfile" name="image" multiple>
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <button type="submit"  name="submit" id="submit"class="btn btn-primary">Submit</button>
                  </div>
                </div>
              </div>
            </div>
                                                          
          </form>
    </div>
<div class="container">
  <div class="row">
   
      <div class="col-md-4">

         <div class="card image">
        <div class="userpic ">
             <img src="<?php echo base_url();?>profile/images/<?php echo $admin_details->image;?>" class=" profileimage img-fluid" alt="Flowers in Chania ">
             <div class="procam">
                <span class="picon" data-toggle="modal" data-target="#exampleModal"><i class="fa-solid fa-camera"></i></span>
             </div>
             
               <!--  <a  href="#" class="btn btn-success btn-block mt-2" data-toggle="modal" data-target="#exampleModal" > Upload Image</a>  -->
               <div class="mt-1 profiledata">
                <!-- <?php print_r($admin_details);?> -->
                        <h4><span><?php echo $admin_details->fullname;?></span> </h4>
                        <p class="text-secondary mb-1"><?php echo $admin_details->bio;?></p>
                        <p class="text-muted font-size-sm"> <?php echo $admin_details->address;?></p>
                        <button class="btn btn-primary">Follow</button>
                        <button class="btn btn-outline-primary">Message</button> 
                      </div>
        </div>
        
      </div>
    </div>
    <div class="col-md-8">
      <div class="card ">
         <div class="userprofile mt-4">
        <table class="table">
          <tr>
            <td><span style=""><?php echo $admin_details->fullname;?><span></td>

          </tr>
          <tr>
            <td><span><?php echo $admin_details->bio;?><span></td>
          </tr>
          <tr>
            <td><span><?php echo $admin_details->mobilenumber;?><span></td>
          </tr>
          <tr>
            <td><span><?php echo $admin_details->address;?><span></td>
          </tr>
        </table>
        <div class="form-group">
        
         <a href="<?php echo base_url().'admin/profile/profileedit'?>" class="btn btn-danger">Edit Profile</a>
                              
        </div>

      </div>
      
      
    </div>
  </div>

</div>
<div class=container">
  <div class="row">
    <div class="card mt-5">
                <ul class="list-group list-group-flush">
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-globe mr-2 icon-inline"><circle cx="12" cy="12" r="10"></circle><line x1="2" y1="12" x2="22" y2="12"></line><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"></path></svg>Website</h6>
                    <span class="text-secondary">https://bootdey.com</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github mr-2 icon-inline"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>Github</h6>
                    <span class="text-secondary">bootdey</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter mr-2 icon-inline text-info"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>Twitter</h6>
                    <span class="text-secondary"><a href="https://twitter.com/i/flow/login" target="_blank">https://twitter.com</a></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram mr-2 icon-inline text-danger"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>Instagram</h6>
                    <span class="text-secondary"><a href="https://www.instagram.com/accounts/login/" target="_blank">https://www.instagram.com</a></span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-facebook mr-2 icon-inline text-primary"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>Facebook</h6>
                    <span class="text-secondary"><a href="https://www.facebook.com/" target="_blank">https://www.facebook.com/</a></span>
                  </li>
                </ul>
              </div>
             
                 <div class="col-sm-8 mb-3 mt-5">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
  </div>
  <!-- <div class="col-md-9"> -->
    <!-- <div class="row gutters-sm">
               
                <div class="col-sm-6 mb-3">
                  <div class="card h-100">
                    <div class="card-body">
                      <h6 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">assignment</i>Project Status</h6>
                      <small>Web Design</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Website Markup</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 72%" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>One Page</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 89%" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Mobile Template</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                      <small>Backend API</small>
                      <div class="progress mb-3" style="height: 5px">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 66%" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
  </div>

  
</div>





    
                   
                        
                       
                        
                          
                    
                
              
                 
                

                <script type="">
                  setTimeout(function(){ $('#error').hide();},3000);
                  setTimeout(function(){ $('#success').hide();},3000);
                </script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="<?php echo base_url()?>asset1/main2/vendor/jquery/jquery.min.js"></script>
                    <script src="<?php echo base_url()?>asset1/main2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

                    <!-- Core plugin JavaScript-->
                    <script src="<?php echo base_url()?>asset1/main2/vendor/jquery-easing/jquery.easing.min.js"></script>

                    <!-- Custom scripts for all pages-->
                    <script src="<?php echo base_url()?>asset1/main2/js/sb-admin-2.min.js"></script>

                    <!-- Page level plugins -->
                  <!--   <script src="<?php echo base_url()?>asset1/main2/vendor/chart.js/Chart.min.js"></script>
 -->
                    <!-- Page level custom scripts -->
                    <!-- <script src="<?php echo base_url()?>asset1/main2/js/demo/chart-area-demo.js"></script>
                    <script src="<?php echo base_url()?>asset1/main2/js/demo/chart-pie-demo.js"></script> -->

</body>

</html>