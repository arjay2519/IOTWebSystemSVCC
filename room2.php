<?php
include 'components/header.php';
include_once 'includes/db.inc.php';
$current_room = 'CB2-202';
?>
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-md-12 d-flex justify-content-between mb-3">
                            <div class="align-items-center justify-content-between">
                                <h1 class="h2 mb-0 text-white-800">CB2-202</h1>
                            </div>
                            <?php if ($_SESSION['role'] == 'admin') {?>
                            <div class="float-right p-0">
                                <button type="button" class="btn btn-warning text-dark" data-toggle="modal" data-target="#addModal">Add Schedule</button>
                            </div>   
                            <?php } ?>
                        </div>                   
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <!-- Monday -->
                        <div class="col-md-6 bg-white text-dark border rounded p-1 mb-2">
                            <h3 class="m-0 font-weight-bold text-dark d-flex justify-content-center pt-2">MONDAY</h6>
                            <div class="table-responsive">
                                <table id="mondayTable" class="table table-bordered display nowrap"
                                width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Subject</th>
                                            <th>Time In</th>
                                            <th>Time Out</th>
                                            <th>Instructor</th>
                                            <?php if ($_SESSION['role'] == 'admin') {?>
                                            <th>Action</th>
                                            <?php }?>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div> 
                        <!-- Tuesday -->
                        <div class="col-md-6 bg-white text-dark border rounded p-1 mb-2">
                            <h3 class="m-0 font-weight-bold text-dark d-flex justify-content-center pt-2">Tuesday</h6>
                            <div class="table-responsive">
                                <table id="tuesdayTable" class="table table-bordered display nowrap" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Subject</th>
                                            <th>Time In</th>
                                            <th>Time Out</th>
                                            <th>Instructor</th>
                                            <?php if ($_SESSION['role'] == 'admin') {?>
                                            <th>Action</th>
                                            <?php }?>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <!-- Wednesay -->
                        <div class="col-md-6 bg-white text-dark border rounded p-1 mb-2">
                            <h3 class="m-0 font-weight-bold text-dark d-flex justify-content-center pt-2">WEDNESDAY</h6>
                            <div class="table-responsive">
                                <table id="wednesdayTable" class="table table-bordered display nowrap" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Subject</th>
                                            <th>Time In</th>
                                            <th>Time Out</th>
                                            <th>Instructor</th>
                                            <?php if ($_SESSION['role'] == 'admin') {?>
                                            <th>Action</th>
                                            <?php }?>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div> 
                        <!-- Thursday -->
                        <div class="col-md-6 bg-white text-dark border rounded p-1 mb-2">
                            <h3 class="m-0 font-weight-bold text-dark d-flex justify-content-center pt-2">THURSDAY</h6>
                            <div class="table-responsive">
                                <table id="thursdayTable" class="table table-bordered display nowrap" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Subject</th>
                                            <th>Time In</th>
                                            <th>Time Out</th>
                                            <th>Instructor</th>
                                            <?php if ($_SESSION['role'] == 'admin') {?>
                                            <th>Action</th>
                                            <?php }?>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <!-- Friday -->
                        <div class="col-md-6 bg-white text-dark border rounded p-1 mb-2">
                            <h3 class="m-0 font-weight-bold text-dark d-flex justify-content-center pt-2">FRIDAY</h6>
                            <div class="table-responsive">
                                <table id="fridayTable" class="table table-bordered display nowrap" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Subject</th>
                                            <th>Time In</th>
                                            <th>Time Out</th>
                                            <th>Instructor</th>
                                            <?php if ($_SESSION['role'] == 'admin') {?>
                                            <th>Action</th>
                                            <?php }?>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div> 
                        <!-- Saturday -->
                        <div class="col-md-6 bg-white text-dark border rounded p-1 mb-2">
                            <h3 class="m-0 font-weight-bold text-dark d-flex justify-content-center pt-2">SATURDAY</h6>
                            <div class="table-responsive">
                                <table id="saturdayTable" class="table table-bordered display nowrap" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Subject</th>
                                            <th>Time In</th>
                                            <th>Time Out</th>
                                            <th>Instructor</th>
                                            <?php if ($_SESSION['role'] == 'admin') {?>
                                            <th>Action</th>
                                            <?php }?>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </div> 
                    </div>
                    <div class="row">
                        <!-- Sunday -->
                        <div class="col-md-6 bg-white text-dark border rounded p-1 mb-2">
                            <h3 class="m-0 font-weight-bold text-dark d-flex justify-content-center pt-2">SUNDAY</h6>
                            <div class="table-responsive">
                                <table id="sundayTable" class="table table-bordered display nowrap" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Subject</th>
                                            <th>Time In</th>
                                            <th>Time Out</th>
                                            <th>Instructor</th>
                                            <?php if ($_SESSION['role'] == 'admin') {?>
                                            <th>Action</th>
                                            <?php }?>
                                        </tr>
                                    </thead>
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
    <!-- Add Modal -->
    <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Schedule</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form id="addForm" method="POST">
                <div class="modal-body">
                    <div class="alert alert-warning alert-dismissible fade show">
                        <strong>Note:</strong>The system operates on military time<br>(24-hour clock).
                    </div>
                    <input type="hidden" name="add_id" id="add_id">
                    <input type="hidden" name="room" id="room" value="<?php echo $current_room ?>">
                    <div class="form-group">
                        <label for="Add_subject">Subject:</label>
                        <input type="text" name="add_subject" id="add_subject" class="form-control" placeholder="Enter subject">
                    </div>                            
                    <div class="form-group">
                        <label for="Timein_hrs">Time in hrs:</label>
                        <input type="text" name="timein_hrs" id="timein_hrs" maxlength="2" class="form-control" placeholder="Enter time">
                    </div>
                    <div class="form-group">
                        <label for="Timein_hrs">Time in min:</label>
                        <input type="text" name="timein_min" id="timein_min" maxlength="2" class="form-control" placeholder="Enter time">
                    </div>
                    <div class="form-group">
                        <label for="Timein_min">Time out hrs:</label>
                        <input type="text" name="timeout_hrs" id="timeout_hrs" maxlength="2" class="form-control"  placeholder="Enter time">
                    </div>
                    <div class="form-group">
                        <label for="Timein_min">Time out min:</label>
                        <input type="text" name="timeout_min" id="timeout_min" maxlength="2" class="form-control"  placeholder="Enter time">
                    </div>                   
                    <div class="form-group">
                        <label for="add_instructor">Instructor:</label>
                        <select class="form-select form-select-lg" name="add_instructor" id="add_instructor">
                            <?php 
                                $sql = "SELECT * FROM instructor_tb";
                                if($result = mysqli_query($GLOBALS['conn'], $sql)){
                                    while($row = mysqli_fetch_array($result)){
                                        echo '<option id="'.$row['uid'].'" value="'.$row['uid'].'">'.$row['instructor_name'].'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Day">Day:</label>
                        <select class="form-select form-select-lg" name="day" id="day">
                            <option value="monday" selected>Monday</option>
                            <option value="tuesday">Tuesday</option>
                            <option value="wednesday">Wednesday</option>
                            <option value="thursday">Thursday</option>
                            <option value="friday">Friday</option>
                            <option value="saturday">Saturday</option>
                            <option value="sunday">Sunday</option>
                        </select>
                    </div>                                 
                </div>
                <div class="modal-footer">
                    <button type="submit" name="add_data" class="btn btn-warning text-dark">Submit</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Update Modal-->
    <div class="modal fade" id="updateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Schedule</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form id="updateForm" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="update_id" id="update_id">
                    <div class="form-group">
                        <label for="Update_subject">Subject</label>
                        <input type="text" name="update_subject" id="update_subject" class="form-control" placeholder="Enter subject">
                    </div>                             
                    <div class="form-group">
                        <label for="Timein_hrs">Time in hrs</label>
                        <input type="text" name="time_in_hrs" id="time_in_hrs" maxlength="2" class="form-control" placeholder="Enter time">
                    </div>
                    <div class="form-group">
                        <label for="Timein_hrs">Time in min</label>
                        <input type="text" name="time_in_min" id="time_in_min" maxlength="2" class="form-control" placeholder="Enter time">
                    </div>
                    <div class="form-group">
                        <label for="Timein_min">Time out hrs</label>
                        <input type="text" name="time_out_hrs" id="time_out_hrs" maxlength="2" class="form-control"  placeholder="Enter time">
                    </div>
                    <div class="form-group">
                        <label for="Timein_min">Time out min</label>
                        <input type="text" name="time_out_min" id="time_out_min" maxlength="2" class="form-control"  placeholder="Enter time">
                    </div>                   
                    <div class="form-group">
                        <label for="update_instructor">Instructor</label>
                        <select class="form-select form-select-lg" name="update_instructor" id="update_instructor">
                            <?php 
                                $sql = "SELECT * FROM instructor_tb";
                                if($result = mysqli_query($GLOBALS['conn'], $sql)){
                                    while($row = mysqli_fetch_array($result)){
                                        echo '<option id="'.$row['uid'].'" value="'.$row['uid'].'">'.$row['instructor_name'].'</option>';
                                    }
                                }
                            ?>
                        </select>
                    </div>                                
                </div>
                <div class="modal-footer">
                    <button type="submit" name="updatedata" class="btn btn-warning text-dark">Update</button>
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Cancel</button>
                </div>
                </form>
            </div>
        </div>
    </div>

</body>
    <!-- Bootstrap core JavaScript-->
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
    <script>
    let mondayTable;
    let tuesdayTable;
    let wednesdayTable;
    let thursdayTable;
    let fridayTable;
    let saturdayTable;
    let sundayTable;
    $(document).ready(function(){
        if ($(window).width() < 514) 
        {
            $('.table-responsive').removeClass('overflow-hidden');
        } else 
        {
            $('.table-responsive').addClass('overflow-hidden');
        };
            mondayTable = $('#mondayTable').DataTable({
                'processing': true,
                'serverSide': true,
                'searching': true,
                'paging': false,
                'info': false,
                'lengthChange': true,
                'ordering': false,
                'ajax': {
                    'url':'includes/get_monday_data.php?room=CB2-202',
                    'type':'post',
                },
                'columnDefs': [{
                    className: 'hide_column',
                    targets: 0
                }]
            });
            tuesdayTable = $('#tuesdayTable').DataTable({
                'processing': true,
                'serverSide': true,
                'searching': true,
                'paging': false,
                'info': false,
                'lengthChange': true,
                'ordering': false,
                'ajax': {
                    'url':'includes/get_tuesday_data.php?room=CB2-202',
                    'type':'post',
                },
                'columnDefs': [{
                    className: 'hide_column',
                    targets: 0
                }]
            });
            wednesdayTable = $('#wednesdayTable').DataTable({
                'processing': true,
                'serverSide': true,
                'searching': true,
                'paging': false,
                'info': false,
                'lengthChange': true,
                'ordering': false,
                'ajax': {
                    'url':'includes/get_wednesday_data.php?room=CB2-202',
                    'type':'post',
                },
                'columnDefs': [{
                    className: 'hide_column',
                    targets: 0
                }]
            });
            thursdayTable = $('#thursdayTable').DataTable({
                'processing': true,
                'serverSide': true,
                'searching': true,
                'paging': false,
                'info': false,
                'lengthChange': true,
                'ordering': false,
                'ajax': {
                    'url':'includes/get_thursday_data.php?room=CB2-202',
                    'type':'post',
                },
                'columnDefs': [{
                    className: 'hide_column',
                    targets: 0
                }]
            });
            fridayTable = $('#fridayTable').DataTable({
                'processing': true,
                'serverSide': true,
                'searching': true,
                'paging': false,
                'info': false,
                'lengthChange': true,
                'ordering': false,
                'ajax': {
                    'url':'includes/get_friday_data.php?room=CB2-202',
                    'type':'post',
                },
                'columnDefs': [{
                    className: 'hide_column',
                    targets: 0
                }]
            });
            saturdayTable = $('#saturdayTable').DataTable({
                'processing': true,
                'serverSide': true,
                'searching': true,
                'paging': false,
                'info': false,
                'lengthChange': true,
                'ordering': false,
                'ajax': {
                    'url':'includes/get_saturday_data.php?room=CB2-202',
                    'type':'post',
                },
                'columnDefs': [{
                    className: 'hide_column',
                    targets: 0
                }]
            });
            sundayTable = $('#sundayTable').DataTable({
                'processing': true,
                'serverSide': true,
                'searching': true,
                'paging': false,
                'info': false,
                'lengthChange': true,
                'ordering': false,
                'ajax': {
                    'url':'includes/get_sunday_data.php?room=CB2-202',
                    'type':'post',
                },
                'columnDefs': [{
                    className: 'hide_column',
                    targets: 0
                }]
            });
    });
    $('#addForm').on('submit', function(event) {
        event.preventDefault();
        var subject = $("#add_subject").val();
        var timeinhr = $("#timein_hrs").val();
        var timeinmin = $("#timein_min").val();
        var timeouthr = $("#timeout_hrs").val();
        var timeoutmin = $("#timeout_min").val();
        var add_instructor = $( "#add_instructor option:selected" ).text();
        if( subject != '' && timeinhr != '' && timeinmin != '' && timeouthr != '' && timeoutmin != '' && add_instructor != '' ) {
        $.ajax({  
            url:`includes/updatedata.php?action=add_schedule`,  
            method:"POST",  
            data:$('#addForm').serialize() + `&instructor=${add_instructor}`,  
            success:function(data){  
                $('#addForm')[0].reset(); 
                $('#addModal').modal('hide');
                    mondayTable.draw();
                    tuesdayTable.draw();
                    wednesdayTable.draw();
                    thursdayTable.draw();
                    fridayTable.draw();
                    saturdayTable.draw();
                    sundayTable.draw();  
                alertify.set('notifier','position', 'top-right');
                var notification = alertify.notify('Succefully Added Data', 'success', 5,);
            }  
        });
        } else {
            alertify.set('notifier','position', 'top-right');
            var notification = alertify.notify('Please fill data field', 'error', 5,);
        }
    });
    $(document).on('click','.updateBtn',function (){
        let parent = $(this).parent().parent();
        let td = parent.children();
        let string_arr_timein = td.eq(2).text().split(':');
        let string_arr_timeout = td.eq(3).text().split(':');

        $('#updateModal #update_id').val(td.eq(0).text());
        $('#updateModal #update_subject').val(td.eq(1).text());
        $('#updateModal #time_in_hrs').val(string_arr_timein[0]);
        $('#updateModal #time_in_min').val(string_arr_timein[1]);
        $('#updateModal #time_out_hrs').val(string_arr_timeout[0]);
        $('#updateModal #time_out_min').val(string_arr_timeout[1]);
        $('#updateModal #update_instructor_select').val(td.eq(4).text());
    });
    $('#updateForm').on("submit", function(event){
        event.preventDefault();
        var subject = $("#update_subject").val();
        var timeinhr = $("#time_in_hrs").val();
        var timeinmin = $("#time_in_min").val();
        var timeouthr = $("#time_out_hrs").val();
        var timeoutmin = $("#time_out_min").val();
        var updateinstructor = $("#update_instructor option:selected" ).text();
        if( subject != '' && timeinhr != '' && timeinmin != '' && timeouthr != '' && timeoutmin != '' && updateinstructor != '' ) {
        $.ajax({  
            url:"includes/updatedata.php?action=update_schedule",  
            method:"POST",  
            data:$('#updateForm').serialize()  + `&updateinstructor=${updateinstructor}`,  
            success:function(data){  
                $('#updateForm')[0].reset();  
                $('#updateModal').modal('hide');
                    mondayTable.draw();
                    tuesdayTable.draw();
                    wednesdayTable.draw();
                    thursdayTable.draw();
                    fridayTable.draw();
                    saturdayTable.draw();
                    sundayTable.draw(); 
                alertify.set('notifier','position', 'top-right');
                var notification = alertify.notify('Update Success', 'success', 5,);
            }  
        });
        } else {
            alertify.set('notifier','position', 'top-right');
            var notification = alertify.notify('Please fill data field', 'error', 5,);
        }
    });
    $(document).on('click','.updateBtn',function (){
        let parent = $(this).parent().parent();
        let td = parent.children();
        let string_arr_timein = td.eq(2).text().split(':');
        let string_arr_timeout = td.eq(3).text().split(':');

        $('#updateModal #update_id').val(td.eq(0).text());
        $('#updateModal #update_subject').val(td.eq(1).text());
        $('#updateModal #time_in_hrs').val(string_arr_timein[0]);
        $('#updateModal #time_in_min').val(string_arr_timein[1]);
        $('#updateModal #time_out_hrs').val(string_arr_timeout[0]);
        $('#updateModal #time_out_min').val(string_arr_timeout[1]);
        $('#updateModal #update_instructor_select').val(td.eq(4).text());
    });
    $('#updateForm').on("submit", function(event){
        event.preventDefault();
        var subject = $("#update_subject").val();
        var timeinhr = $("#time_in_hrs").val();
        var timeinmin = $("#time_in_min").val();
        var timeouthr = $("#time_out_hrs").val();
        var timeoutmin = $("#time_out_min").val();
        var updateinstructor = $("#update_instructor option:selected" ).text();
        if( subject != '' && timeinhr != '' && timeinmin != '' && timeouthr != '' && timeoutmin != '' && updateinstructor != '' ) {
        $.ajax({  
            url:"includes/updatedata.php?action=update_schedule",  
            method:"POST",  
            data:$('#updateForm').serialize()  + `&updateinstructor=${updateinstructor}`,  
            success:function(data){  
                $('#updateForm')[0].reset();  
                $('#updateModal').modal('hide');
                    mondayTable.draw();
                    tuesdayTable.draw();
                    wednesdayTable.draw();
                    thursdayTable.draw();
                    fridayTable.draw();
                    saturdayTable.draw();
                    sundayTable.draw(); 
                alertify.set('notifier','position', 'top-right');
                var notification = alertify.notify('Update Success', 'success', 5,);
            }  
        });
        } else {
            alertify.set('notifier','position', 'top-right');
            var notification = alertify.notify('Please fill data field', 'error', 5,);
        }
    });
    $(document).on('click','.scheduleDelBtn',function (event){
        event.preventDefault();
        let id = $(this).attr('id');
        $.ajax({  
            url:"includes/updatedata.php?action=delete_schedule",  
            method:"POST",  
            data: "id="+id,
            success:function(data){  
                    mondayTable.draw();
                    tuesdayTable.draw();
                    wednesdayTable.draw();
                    thursdayTable.draw();
                    fridayTable.draw();
                    saturdayTable.draw();
                    sundayTable.draw();  
                alertify.set('notifier','position', 'top-right');
                var notification = alertify.notify('Deletion Success', 'error', 5,);
            }  
        });
        
    });
</script>
</html>

