<?php
    include 'components/header.php';
    if ($_SESSION['role'] == 'admin') {
?>
                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-white-800">Instructor List</h1>
                        </div>

                        <!-- Content Row -->
                        <div class="row">
                            <!-- Monday -->
                            <div class="col-md-6 bg-white text-dark border rounded p-1 mb-2">
                                <h3 class="m-0 font-weight-bold text-dark d-flex justify-content-center pt-2">Registered Instructor</h6>
                                <div class="table-responsive overflow-hidden">
                                    <table id="instructorTable" class="table table-bordered display nowrap" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>UID</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                    </table>
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

    <!-- Update Modal-->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Details</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form id="updateForm" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="update_uid" id="update_uid">                          
                    <div class="form-group">
                        <label for="Name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter name">
                    </div>                  
                </div>
                <div class="modal-footer">
                    <button type="submit" name="updatedata" class="btn btn-primary">Update</button>
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                </div>
                </form>
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

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>


    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>
    <!-- ALERTIFY -->
    <script src="js/alertify/alertify.min.js"></script>

</body>
<script>
    let instructorTable;
    $(document).ready(function(){
        instructorTable = $('#instructorTable').DataTable({
            'processing': true,
            'serverSide': true,
            'searching': true,
            'paging': false,
            'info': false,
            'lengthChange': true,
            'ordering': false,
            'ajax': {
                'url':'includes/get_instructor_data.php',
                'type':'post',
            }
        });
    });
    $(document).on('click','.updateBtn',function (){
        let parent = $(this).parent().parent();
        let td = parent.children();

        $('#updateModal #name').val(td.eq(1).text());

	});
    $('#updateForm').on("submit", function(event){
        event.preventDefault();
        var name = $("#name").val();
        if( name != '' ) {
        $.ajax({  
            url:"includes/updatedata.php?action=userupdate",  
            method:"POST",  
            data:$('#updateForm').serialize(),  
            success:function(data){  
                $('#updateForm')[0].reset();  
                $('#updateModal').modal('hide');
                    teacherTable.draw();
                alertify.set('notifier','position', 'top-right');
                var notification = alertify.notify('Update Success', 'success', 5,);
            }  
        });
        } else {
            alertify.set('notifier','position', 'top-right');
            var notification = alertify.notify('Please fill data field', 'error', 5,);
        }
    });
    $(document).on('click','.instructorDelBtn',function (event){
        event.preventDefault();
        let uid = $(this).attr('uid');
        $.ajax({  
            url:"includes/updatedata.php?action=instructor_delete",
            method:"POST",  
            data: "uid="+uid,
            success:function(data){  
                instructorTable.draw();
                alertify.set('notifier','position', 'top-right');
                var notification = alertify.notify('Deletion Success', 'error', 5,);
            }  
        });
        
	});
</script>
</html>

<?php } ?>