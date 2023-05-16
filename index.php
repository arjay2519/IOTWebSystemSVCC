<?php
    include 'components/header.php';
    include 'includes/updatedata.php';
    // session_start();
    // $alert = $_SESSION['alert'];

    // echo 'alert'.  $alert;
    
?>

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <h1 class="h3 mb-0 text-white-800">Dashboard</h1>
                        </div>
                        <!-- Content Row -->
                        <div class="row justify-content-center">
                            <div class="col-md-5 bg-white text-dark border rounded p-1 m-2">
                                <h3 class="m-0 font-weight-bold text-dark d-flex justify-content-center pt-2">Room Class Schedule</h3>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <!-- Room 1 -->
                            <div class="col-sm-2 mb-2">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <a href="room.php">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col">
                                                    <div class="fs-1 font-weight-bold text-dark text-uppercase text-center">
                                                        CB2-201
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Room 2 -->
                            <div class="col-sm-2 mb-2">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <a href="room2.php">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col">
                                                    <div class="fs-1 font-weight-bold text-dark text-uppercase text-center">
                                                        CB2-202
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <!-- Room 3 -->
                            <div class="col-sm-2 mb-2">
                                <div class="card border-left-warning shadow h-100 py-2">
                                    <a href="room3.php">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col">
                                                    <div class="fs-1 font-weight-bold text-dark text-uppercase text-center">
                                                        CB2-203
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 bg-white text-dark border rounded p-1 m-2">
                                <h3 class="m-0 font-weight-bold text-dark d-flex justify-content-center pt-2">Important Notice<img src="img/danger.jpg" width="50px" height="30px"></h3>
                                <p align="center">Check that the room switch is off before turning on the electricity.</p>
                            </div>
                            <div class="col-md-6 bg-white text-dark border rounded p-1 m-2">
                                <h3 class="m-0 font-weight-bold text-dark d-flex justify-content-center pt-2">Instruction<img src="img/journal-text.svg" width="50px" height="30px"></h3>
                                <p align="center">Click the button in the room's electricity control to turn on/off the electricity.</p>
                            </div>
                        </div>
                        <div class="row">
                            <!-- Switch Room Status -->
                            <div class="col-md-4 bg-white text-dark border rounded p-1 m-2">
                                <h3 class="m-0 font-weight-bold text-dark d-flex justify-content-center pt-2">Status of Room Switches</h3>
                                <div class="table-responsive">
                                    <table id="switch_statusTable" class="table table-bordered display nowrap" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>CB2-201</th>
                                                <th>CB2-202</th>
                                                <th>CB2-203</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div>
                            </div> 
                            <!-- Electricity Room Status -->
                            <div class="col-md-6 bg-white text-dark border rounded p-1 m-2">
                                <h3 class="m-0 font-weight-bold text-dark d-flex justify-content-center pt-2">Room Electricity Control</h6>
                                <div class="table-responsive">
                                    <table id="electricity_statusTable" class="table table-bordered display nowrap" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Room</th>
                                                <th>AC Brand</th>
                                                <th>Date of Purchase</th>
                                                <th>Electricity</th>
                                            </tr>
                                        </thead>
                                    </table>
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
        let electricity_statusTable;
        let switch_statusTable;
        $(document).ready(function(){
            if ($(window).width() < 514) 
            {
                $('.table-responsive').removeClass('overflow-hidden');
            } else 
            {
                $('.table-responsive').addClass('overflow-hidden');
            };
            // $(".table").tooltip({ selector: '[data-toggle=tooltip]' });
            electricity_statusTable = $('#electricity_statusTable').DataTable({
                'processing': true,
                'serverSide': true,
                'searching': true,
                'paging': false,
                'info': false,
                'lengthChange': true,
                'ordering': false,
                'ajax': {
                    'url':'includes/electricity_status.php',
                    'type':'post',
                },
                'columnDefs': [
                {
                    targets: 0,
                    visible: false,
                    searchable: false,
                },
                // {
                //     "render": function ( data, type, row, meta ){
                //         if (row[3] == "1"){
                //         return '<span style="color:' + 'green' + '">' + "ON" + '</span>';
                //         }
                //         else if (row[3] == "0"){
                //         return '<span style="color:' + 'red' + '">' + "OFF"+ '</span>';
                //         }
                //     },
                //     targets: 3 
                // }
                ]
                
            });
            // setInterval( function(){
            //     electricity_statusTable.ajax.reload();
            // }, 1000);

            switch_statusTable = $('#switch_statusTable').DataTable({
                'processing': true,
                'serverSide': true,
                'searching': false,
                'paging': false,
                'info': false,
                'lengthChange': true,
                'ordering': false,
                'ajax': {
                    'url':'includes/switch_status.php',
                    'type':'post',
                },
                'columnDefs': [
                {
                    targets: 0,
                    visible: false,
                    searchable: false,
                },
                {
                    "render": function ( data, type, row, meta ){
                        if (row[1] == "0"){
                        return '<span style="color:' + 'green' + '">' + "ON" + '</span>';
                        }
                        else if (row[1] == "1"){
                        return '<span style="color:' + 'red' + '">' + "OFF"+ '</span>';
                        }
                    },
                    targets: 1
                },
                {
                    "render": function ( data, type, row, meta ){
                        if (row[2] == "0"){
                        return '<span style="color:' + 'green' + '">' + "ON" + '</span>';
                        }
                        else if (row[2] == "1"){
                        return '<span style="color:' + 'red' + '">' + "OFF"+ '</span>';
                        }
                    },
                    targets: 2
                },
                {
                    "render": function ( data, type, row, meta ){
                        if (row[3] == "0"){
                        return '<span style="color:' + 'green' + '">' + "ON" + '</span>';
                        }
                        else if (row[3] == "1"){
                        return '<span style="color:' + 'red' + '">' + "OFF"+ '</span>';
                        }
                    },
                    targets: 3
                }
                ]
            });
            setInterval( function(){
                switch_statusTable.ajax.reload();
            }, 1000);
        });


        $(document).on('click','.electricityBtnOn',function(event){
            event.preventDefault();
            let id = $(this).attr('id');
            $.ajax({  
                url:"includes/updatedata.php?action=electricity_turn_on",  
                method:"POST",  
                data:"id="+id,
                success:function(data){ 
                    console.log(data);
                    electricity_statusTable.draw();
                    alertify.set('notifier','position', 'top-right');
                    // console.log("status111",$status);
                    if(data[23] == '1'){
                        var notification = alertify.notify('There is an active switch on room CB2-20'+id+'. Please turn OFF first!', 'error', 5,);
                    }
                    
                    if(data[23] == '0'){
                        var notification = alertify.notify('Electricity Control ON in room CB2-20'+id, 'success', 5,); 
                    }
                }  
            });
        });
        $(document).on('click','.electricityBtnOff',function(event){
            event.preventDefault();
            let id = $(this).attr('id');
            $.ajax({  
                url:"includes/updatedata.php?action=electricity_turn_off",  
                method:"POST",  
                data:"id="+id,
                success:function(data){
                    console.log(data);   
                    electricity_statusTable.draw();
                // if(data == "success"){
                //     console.log("working");
                // } 
                    alertify.set('notifier','position', 'top-right');
                    var notification = alertify.notify('Electricity Control OFF ON ROOM CB2-20'+id, 'error', 5,);
                }  
            });
        });
    </script>
</html>