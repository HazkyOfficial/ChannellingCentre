<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 3 | DataTables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{asset('template')}}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Toastr (Message) -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/toastr/toastr.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('template')}}/dist/css/adminlte.min.css">
  <!-- Preloader CSS -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/preloader/preloader.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="{{asset('template')}}/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('template')}}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixedy layout-footer-fixed layout-navbar-fixed">

  <!-- ***** Preloader Start ***** -->
  <div id="preloader">
      <div class="jumper">
          <div></div>
          <div></div>
          <div></div>
      </div>
  </div>  
  <!-- ***** Preloader End ***** -->

<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/Dashboard" class="nav-link"><i class="fas fa-home"></i> <b>Home</b></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/Contact" class="nav-link"><i class="fas fa-id-card"></i> <b>Contact</b></a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item d-none d-sm-inline-block">
        <a  class="nav-link"><b><p id="time"></p></b></a>
        <script>
                setInterval(function() {
            var today = new Date();
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            var date = today.getDate()+'/'+(today.getMonth()+1)+'/'+today.getFullYear();
            document.getElementById('time').innerHTML = time + " &nbsp; &nbsp;"+date;
                }, 1000);
        </script>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/logout" class="nav-link"><b><i class="fas fa-sign-out-alt"></i> Logout</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
   

      <!-- Message Part -->


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-purple elevation-4">
    <!-- Brand Logo -->
    <a href="{{asset('template')}}/index3.html" class="brand-link">
      <img src="{{asset('template')}}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light"><b>Resulect</b></span>
    </a>

    <!-- -------------------------------------------Sidebar Navigation Part Start --------------------------------- -->
    <!-- -------------------------------------------Sidebar Profile Part Start --------------------------------- -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('template')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar nav-child-indent nav-flat flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a class="nav-link active" href="/Dashboard">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/Dashboard" class="nav-link">
              <i class="nav-icon fas fa-user-circle"></i>
              <p>Patent Details</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/Doctors" class="nav-link">
              <i class="nav-icon fas fa-feather-alt"></i>
              <p>Doctor Details</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="/Dashboard" class="nav-link">
              <i class="nav-icon fab fa-accusoft"></i>
              <p>Shedul Details</p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- -------------------------------------------Sidebar Navigation Part End --------------------------------- -->
  </aside>

  <!-- Model Start   -->
  <!-- Add Model Start -->
        <div class="modal fade" id="AddClass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">&#9776; Doctor Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- form start -->
                    <form role="form" action="/addDoctors" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputText" class="form-label">Doctor Name</label>
                            <input type="text" class="form-control"name="DName" placeholder="Enter doctor name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText" class="form-label">Doctor Address</label>
                            <input type="text" class="form-control"name="DAddress" placeholder="Enter doctor Address">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText" class="form-label">Doctor Mobile No</label>
                            <input type="text" class="form-control"name="DMobileNo" placeholder="Enter doctor Mobile No">
                        </div>
                        <div class="form-group">
                        <label>Specization</label>
                            <select class="form-control select2" name="Specization" data-placeholder="Select an option">
                                <option value="" selected disabled hidden>(select an option)</option>
                                <option value="GCE-A/L"><b>General Surgen</b></option>
                                <option value="GCE-O/L"><b>Orthopaedic Surgen</b></option>
                                <option value="SecondaryLevel"><b>Heard Surgen</b></option>
                                <option value="PrimaryLevel"><b>Pediatrician</b></option>
                                <option value="PrimaryLevel"><b>Eye Surgen</b></option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText" class="form-label">Status</label><br>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadioInline1" value="Active" name="DStatus" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline1">Active</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                              <input type="radio" id="customRadioInline2" value="Deactive" name="DStatus" class="custom-control-input">
                              <label class="custom-control-label" for="customRadioInline2">Deactive</label>
                            </div>
                        </div>
                        </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary ">Save changes</button>
                                </div> 
                            </div>
                    </form>
            
        </div>
        </div>
  <!-- Add Model End -->

  <!-- Edit Model Start -->
  <div class="modal fade" id="EditClass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">&#9776; Class Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <!-- form start -->
                    <form role="form" action="/editclass" method="post">
                    @csrf
                        <div class="form-group">
                            <label for="exampleInputText" class="form-label">Class ID</label>
                            <input type="text" class="form-control" id="ECId" name="ECId" placeholder="Enter class id" readonly>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputText" class="form-label">Class Name</label>
                            <input type="text" class="form-control" id="ECName" name="ECName" placeholder="Enter class name">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Class Type</label>
                            <select class="form-control select2" id="ECType" name="ECType">
                                <option value="GCE-A/L"><b>GCE Advanced Level</b></option>
                                <option value="GCE-O/L"><b>GCE Ordinary Level</b></option>
                                <option value="SecondaryLevel"><b>Secondary Level</b></option>
                                <option value="PrimaryLevel"><b>Primary Level</b></option>
                            </select>
                        </div>
                            
                        
              </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div> 
                            </div>
                    </form>
        </div>
        </div>

        <!-- Edit Model Get Function Start-->
        <script>
          function edit(i) {
            var id = document.getElementById('id' +i).value;
            var name = document.getElementById('name' +i).value;
            var type = document.getElementById('type' +i).value;
            var status = document.getElementById('status' +i).value;

            document.getElementById('ECId').value = id;
            document.getElementById('ECName').value = name;
            document.getElementById('ECType').value = type;

          }
        </script>
        <!-- Edit Model Get Function End-->

  <!-- Edit Model End -->
  <!-- Model End   -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">&#9745; <b>Doctor Page</b></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/Dashboard">Home</a></li>
              <li class="breadcrumb-item active">Doctor</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Class Page Full Front View Part Start -->
    <div class="card">
              <!-- Table part start -->
              <div class="card-body">
                <!-- Add Button Part Start -->
                <div class="row">
                            <div class="col-md-12 text-end">
                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#AddClass">Add New Doctor</button>
                            </div>
                </div>
                <br>
                <!-- Add Button Part End -->
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th scope="col">Doctor ID</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Doctor Address</th>
                    <th scope="col">Doctor Contact No</th>
                    <th scope="col">Specization</th>
                    <th scope="col">Status</th>
                    <th style="width:  12%">Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $k = 0; ?> <!-- identify row number -->
                      @foreach($doctors as $dor)
                      <tr>
                        <td>{{$dor->id}}</td>
                        <td>{{$dor->doctor_name}}</td>
                        <td>{{$dor->doctor_address}}</td>
                        <td>{{$dor->doctor_contact_no}}</td>
                        <td>
                          @if($dor->status == "Deactive")
                          <a type = "button" href = "{{route('changeclassstatus',$dor->id)}}"  class ="btn btn-success btn-sm">&nbsp;&nbsp;&nbsp;Active&nbsp;&nbsp;</a>
                          @else
                          <a type = "button" href = "{{route('changeclassstatus',$dor->id)}}" class ="btn btn-danger btn-sm">Deactive</a>
                          @endif
                        
                        </td>
                        <td>
                          <input type="hidden" id="id<?php echo $k; ?>" value="{{$dor->id}}">
                          <input type="hidden" id="name<?php echo $k; ?>" value="{{$dor->doctor_name}}">
                          <input type="hidden" id="type<?php echo $k; ?>" value="{{$dor->doctor_address}}">
                          <input type="hidden" id="dcno<?php echo $k; ?>" value="{{$dor->doctor_contact_no}}">
                          <input type="hidden" id="speci<?php echo $k; ?>" value="{{$dor->specization}}">
                          <input type="hidden" id="status<?php echo $k; ?>" value="{{$dor->status}}">
                            
                            <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#DeleteClass">Delete</button>
                            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" onclick="edit(<?php echo $k; ?>)" data-target="#EditClass">Edit</button>
                        </td>
                      </tr>
                      <?php $k++; ?>
                        <!-- Delete Conformation Model Start -->
                        <div class="modal fade" id="DeleteClass">
                                <div class="modal-dialog modal-sm">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h4 class="modal-title">&#11088;Delete Confirmation</h4>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div class="modal-body">
                                      <p><b>Are you sure you want to delete?</b></p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                      <button type="button" class="btn btn-default" data-dismiss="modal">No</button>
                                      <a  href="{{route('deletedoctor',$dor->id)}}" class="btn btn-danger">Yes</a> <!-- $cls->id = passing variable-->
                                    </div>
                                  </div>
                                  <!-- /.modal-content -->
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                              <!-- /.modal -->
                          <!-- Delete Conformation Model End-->
                      @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                  <th scope="col">Doctor ID</th>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Doctor Address</th>
                    <th scope="col">Doctor Contact No</th>
                    <th scope="col">Specization</th>
                    <th scope="col">Status</th>
                    <th style="width:  12%">Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
  </div>
  <!-- Class Page Full Front View Part End -->
  <!-- /.content-wrapper -->

  <!-- Footer Start -->
  <footer class="main-footer text-sm">
      <strong>Copyright &copy; 2020-2021 <a href="#">Reselect.info</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.2.2
      </div>
      <div class="float-right d-none d-sm-inline-block">
            <a href="#"><b>HAZKY EDITS &nbsp;<b></a> | &nbsp;
      </div>
    </footer>
  <!-- Footer End -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark"> 
    <!-- color, type change  -->
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

</div>
<!-- ./wrapper -->

<!-- ====================================      Include Scrips Part Start      ========================================= -->

<!-- jQuery -->
<script src="{{asset('template')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('template')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="{{asset('template')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('template')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('template')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('template')}}/dist/js/demo.js"></script>
<!-- Toastr (Message Box) -->
<script src="{{asset('template')}}/plugins/toastr/toastr.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{asset('template')}}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- Select2 -->
<script src="{{asset('template')}}/plugins/select2/js/select2.full.min.js"></script>
<!-- Plugins -->
<script src="{{asset('template')}}/plugins/preloader/scrollreveal.min.js""></script>
<!-- Global Init -->
<script src="{{asset('template')}}/plugins/preloader/custom.js"></script>
<!-- ====================================      Include Scrips Part End      ========================================= -->

<!-- page script Part Start-->
<!-- Data Table Start -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- Data Table End -->

<!-- Alert Part Start -->

  @if(Session::has('message'))
  <script>
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        case 'info':
            toastr.info("{{ Session::get('message') }}");
            break;
        
        case 'warning':
            toastr.warning("{{ Session::get('message') }}");
            break;

        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
    </script>
  @endif

        @if($errors->any())
          @foreach($errors->all()  as $error)
          <script>
            toastr.info("{{$error}}");
          </script>
          @endforeach
        @endif

<!-- Alert Part End -->
<!-- select 2 script start -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'classic'
    })

  })
</script>
<!-- select 2 script end -->
<!-- page script Part End-->
</body>
</html>
