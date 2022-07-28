

                <!-- Begin Page Content -->
                <div class="container-fluid">
                  

                    <!-- Page Heading -->
                    <!-- <h1 class="h3 mb-2 text-gray-800">Tables</h1>
                    <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p> -->
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
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                          <form method="post"  name="createuser" action=" <?php echo  base_url();?>admin/user/create" enctype="multipart/form-data">
                                  <div class="form-group">
                                    <label class="craeteform">Name</label>
                                    <input type="text" name="name" value="<?php echo set_value('name'); ?>"  class="form-control">
                                    <?php echo form_error('name'); ?>
                      
                                  </div>
                                <div class="form-group">
                                  <label class="craeteform">Email</label>
                                  <input type="text" name="email" value="<?php echo set_value('email'); ?>"  class="form-control">
                                  <?php echo form_error('email'); ?>
                                  
                                </div>
                                <div class="form-group">
                                  <label class="craeteform">Phone</label>
                                  <input type="number" name="phone" value="<?php echo set_value('phone'); ?>"  class="form-control">
                                  <?php echo form_error('phone'); ?>
                                  
                                </div>
                              <div class="form-group">
                                <label class="craeteform">Address</label>
                                <input type="text" name="address" value="<?php echo set_value('address'); ?>"  class="form-control">
                                <?php echo form_error('address'); ?>
                              </div>
                              <div class="custom-file">
                                <label for="myfile">Select files:</label>
                                <input type="file" id="myfile" name="image" value="<?php echo set_value('image'); ?>" multiple>

                              </div>
                      
                              <div class="form-group">
                              <button class="btn btn-primary" name="submit"  id="submit" type="submit">Create</button>
                              <a href="<?php echo base_url().'admin/user/index'?>" class="btn btn-danger">Cancel</a>
                              
                              </div>
                          </form>
                    </div>
                    <div class="col-md-6">
                      <h6 class="m-0 font-weight-bold text-primary">Projects</h6>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Server Migration <span
                                            class="float-right">20%</span></h4>
                                    <div class="progress mb-6">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                            aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Sales Tracking <span
                                            class="float-right">40%</span></h4>
                                    <div class="progress mb-6">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                                            aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Customer Database <span
                                            class="float-right">60%</span></h4>
                                    <div class="progress mb-6">
                                        <div class="progress-bar" role="progressbar" style="width: 60%"
                                            aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Payout Details <span
                                            class="float-right">80%</span></h4>
                                    <div class="progress mb-6">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 80%"
                                            aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Account Setup <span
                                            class="float-right">Complete!</span></h4>
                                    <div class="progress">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                      </div>
                    </div>
                  </div>
                </div>
                    
 
               
  
      
    




    <!-- Bootstrap core JavaScript-->
    
    <script src="<?php echo base_url()?>asset1/main2/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>asset1/main2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url()?>asset1/main2/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>asset1/main2/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url()?>asset1/main2/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>asset1/main2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url()?>asset1/main2/js/demo/datatables-demo.js"></script>

</body>

</html>