<style>
    .pagination {
    display: flex;
    padding-left: 0;
    list-style: none;
    border-radius: 0.35rem;
    float: right  !important;
}
</style>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                  

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Records</h1>
                    
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
               

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                            <div class="form-group mb-3">


                           
                                <a style="margin-left: 90%;" href="<?php echo base_url().'admin/user/create';?>" class="btn btn-primary">Add New</a>
           
                    </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>NAME</th>
                                            <th>EMAIL</th>
                                            <th>PHONE</th>
                                            <th>ADDRES</th>
                                            <th>Image</th>
                                            <th  width="50" class="craeteform">EDIT</th>
                                            <th width="90" class="craeteform">DELETE</th>
                                        </tr>
                                    </thead>
                                    <?php if(!empty($stform))  { foreach($stform as $stform) { ?>
                                    <tr>
                                    <td class="craeteform"><?php echo $stform['st_id']?></td> 
                                    <td class="craeteform"><?php echo $stform['name']?></td> 
                                    <td class="craeteform"><?php echo $stform['email']?></td> 
                                    <td class="craeteform"><?php echo $stform['phone']?></td> 
                                    <td class="craeteform"><?php echo $stform['address']?></td>  
                                        <!-- <td><img src="<?php echo base_url()?>uploads/images/<?php echo $stform['image']?>" width="100px" height="100px"></td> -->
                                        <td><img src="<?php echo base_url('uploads/images/'. $stform['image']);?>" width="100px" height="100px"/></td>
                                        <td>
                                            <a href="<?php echo base_url()?>admin/user/edit/<?php echo $stform['st_id']?>" class="btn btn-primary"><i class="fa fa-pen-square"></i></a>
                                        </td> 
                                        <td>
                                            <a href="<?php echo base_url()?>admin/user/delete/<?php echo $stform['st_id']?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                                        </td> 
                                        
                                        </tr>
                                        <?php } } else { ?>
                                            <tr> 
                                                <td colspan ="5">Record Not Found</td>
                                            </tr>
                                        <?php }?>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url()?>asset1/main2/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url()?>asset1/main2/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" ></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url()?>asset1/main2/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?php echo base_url()?>asset1/main2/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>asset1/main2/vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?php echo base_url()?>asset1/main2/js/demo/datatables-demo.js"></script>

</body>

</html>