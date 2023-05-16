<?php
    include 'components/header.php';
    if ($_SESSION['role'] == 'admin') {
?>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-white-800">Register User</h1>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            
                        <form id="user_register_form" method="POST">
                            <div class="modal-body">
                            <div class="form-group">
                                    <label for="username">Name:</label>
                                    <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
                                </div>     
                                <div class="form-group">
                                    <label for="username">Username:</label>
                                    <input type="text" name="username" id="username" class="form-control" placeholder="Enter username">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password:</label>
                                    <input type="text" name="password" id="password" class="form-control" placeholder="Enter password">
                                </div>
                                <div class="form-group">
                                    <label for="role">Role:</label>
                                    <select name="role" id="role" class="form-select form-select-lg mb-3">
                                      <option selected value="user">User</option>
                                      <option value="admin">Admin</option>
                                    </select>
                                </div>                                               
                            </div>
                            <div class="modal-footer">
                                <button type="submit" name="user_register" class="btn btn-warning text-dark">Submit</button>
                                <button class="btn btn-danger clearBtn" type="button">Clear</button>
                            </div>
                        </form>

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

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>
    <script src="js/content.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

    <!-- ALERTIFY -->
    <script src="js/alertify/alertify.min.js"></script>

</body>
<script>
    $(document).ready(function(){
        $('#user_register_form').on('submit', function(event){
            event.preventDefault();
            var name = $("name").val();
            var username = $("username").val();
            var password = $("password").val();
            var role = $("role").val();
            if( name != '' && username != '' && password != '' && role != ''){
                $.ajax({
                    url:"includes/updatedata.php?action=user_register",  
                    method:"POST",  
                    data:$('#user_register_form').serialize(),  
                    success:function(data){  
                        $('#user_register_form')[0].reset();
                        alertify.set('notifier','position', 'top-right');
                        var notification = alertify.notify('Succefully Added Data', 'success', 5,);
                    }
                });
            }
        });
    });
    $(document).on('click', '.clearBtn', function(event){
        event.preventDefault();
        $('#regForm')[0].reset();
    })
</script>
</html>

<?php } ?>