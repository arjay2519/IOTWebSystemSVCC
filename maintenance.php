<?php
    include 'components/header.php';
    if ($_SESSION['role'] == 'admin') {
?>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-white-800">Maintenance</h1>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <!-- Delete all schedule -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2 ">
                                    <a data-toggle="modal" data-target="#delallschedmodal" class="text-decoration-none">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="fs-1 font-weight-bold text-dark mb-1">
                                                        Delete all schedule
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <!-- Delete all user -->
                            <div class="col-xl-3 col-md-6 mb-4">
                                <div class="card border-left-warning shadow h-100 py-2 ">
                                    <a data-toggle="modal" data-target="#delallusermodal" class="text-decoration-none">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="fs-1 font-weight-bold text-dark mb-1">
                                                        Delete all instructor
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php 
                include 'components/footer.php';
            ?>
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
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-warning text-dark" href="logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Delete All Schedule Modal -->
    <div class="modal fade" id="delallschedmodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Delete All Schedule?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-footer">
            <button type="button" class="delAllSchedBtn btn btn-warning text-dark">Confirm</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Delete All User Modal -->
    <div class="modal fade" id="delallusermodal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Delete All Instructor?</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-footer">
            <button type="button" class="delAllUserBtn btn btn-warning text-dark">Confirm</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>

</body>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <!-- ALERTIFY -->
    <script src="js/alertify/alertify.min.js"></script>
<script type="text/javascript">
    $(document).on('click','.delAllSchedBtn',function(event){
        event.preventDefault();
        $.ajax({
            url:"includes/updatedata.php?action=delete_all_sched",
            method:"POST",
            success:function(){
                $('#delallschedmodal').modal('hide');
                alertify.set('notifier','position', 'top-right');
                var notification = alertify.notify('Deletion All Schedule Success', 'error', 5,);
            }
        })
    });
    $(document).on('click','.delAllUserBtn',function(event){
        event.preventDefault();
        $.ajax({
            url:"includes/updatedata.php?action=delete_all_instructor",
            method:"POST",
            success:function(){
                $('#delallusermodal').modal('hide');
                alertify.set('notifier','position', 'top-right');
                var notification = alertify.notify('Deletion All Instructor Success', 'error', 5,);
            }
        })
    });
</script>
</html>

<?php } ?>