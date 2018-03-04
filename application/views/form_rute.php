<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin</title>
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>node_modules/font-awesome/css/font-awesome.min.css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>node_modules/perfect-scrollbar/dist/css/perfect-scrollbar.min.css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>css/style.css" />
  <link rel="stylesheet" href="<?php echo base_url('assets/admin/');?>css/DateTimePicker.min.css" />
  <link rel="shortcut icon" href="<?php echo base_url('assets/admin/');?>images/favicon.png" />
</head>

<body>
  <div class=" container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar navbar-default col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="bg-white text-center navbar-brand-wrapper">
        <a class="navbar-brand brand-logo" href="<?php echo site_url('admin');?>"><img src="<?php echo base_url('assets/admin/');?>images/logo_star_black.png" /></a>
        <a class="navbar-brand brand-logo-mini" href="<?php echo site_url('admin');?>"><img src="<?php echo base_url('assets/admin/');?>images/logo_star_mini.jpg" alt=""></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center">
        <button class="navbar-toggler navbar-toggler d-none d-lg-block navbar-dark align-self-center mr-3" type="button" data-toggle="minimize">
          <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline mt-2 mt-md-0 d-none d-lg-block">
          <input class="form-control mr-sm-2 search" type="text" placeholder="Search">
        </form>
        <ul class="navbar-nav ml-lg-auto d-flex align-items-center flex-row">
          <li class="nav-item">
            <a class="nav-link profile-pic" href="#"><img class="rounded-circle" src="<?php echo base_url('assets/admin/');?>images/face.jpg" alt=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#"><i class="fa fa-th"></i></a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-dark navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <!-- partial -->
    <div class="container-fluid">
      <div class="row row-offcanvas row-offcanvas-right">
        <!-- partial:../../partials/_sidebar.html -->
        <nav class="bg-white sidebar sidebar-offcanvas" id="sidebar">
          <div class="user-info">
            <img src="<?php echo base_url('assets/admin/');?>images/face.jpg" alt="">
            <p class="name"><?php echo $this->session->userdata('fullname'); ?></p>
            <p class="designation">Manager</p>
            <span class="online"></span>
          </div>
          <ul class="nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/1.png" alt="">
                <span class="menu-title">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/table_reservation');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/8.png" alt="">
                <span class="menu-title">Reservation</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/table_user');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/5.png" alt="">
                <span class="menu-title">User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/table_transportation');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/6.png" alt="">
                <span class="menu-title">Transportation</span>
              </a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url('admin/table_rute');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/7.png" alt="">
                <span class="menu-title">Rute</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('admin/table_customer');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/8.png" alt="">
                <span class="menu-title">Customer</span>
              </a>
            </li>            
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('login/logout');?>">
                <img src="<?php echo base_url('assets/admin/');?>images/icons/10.png" alt="">
                <span class="menu-title">Log out</span>
              </a>
            </li>
          </ul>
        </nav>

        <!-- partial -->
        <div class="content-wrapper">
          <h3 class="page-heading mb-4">Forms</h3>
          <div class="row mb-2">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title mb-4">Add rute</h5>
                  <?php if ($rute != 0) {
                      foreach ($rute as $r ) { 
                        $id                 = $r->id;                  
                        $transportation_id  = $r->transportation_id;                  
                        $depart_from        = $r->rute_from;
                        $depart_to          = $r->rute_to;
                        $depart_at          = $r->depart_at;
                        $transit_to         = $r->transit_to;
                        $transit_arrived    = $r->transit_arrived;
                        $arrived            = $r->arrived;
                        $price              = $r->price;
                      }
                    } else {
                        $id                 = null;
                        $transportation_id  = null;
                        $depart_from        = null;
                        $depart_to          = null;
                        $depart_at          = null;
                        $transit_to         = null;
                        $transit_arrived    = null;
                        $arrived            = null;
                        $price              = null;
                    }
                  ?>
                  <form class="forms-sample" action="<?php echo base_url();?>index.php/crud/add_rute" method='post'>
                    <div class="form-group">
                      <input type="hidden" class="form-control p-input" name="id" id="id" aria-describedby="idHelp" value="<?php echo $id?>">
                      <label for="depart_from">Depart from </label>
                      <input type="text" class="form-control p-input" name="rute_from" id="rute_from" aria-describedby="depart_fromHelp" placeholder="Depart From" value="<?php echo $depart_from?>">
                    </div>
                    <div class="form-group">
                      <label for="transportation_id">ID Pesawat</label>
                      <input type="text" class="form-control p-input" name="transportation_id" id="transportation_id" aria-describedby="transportation_idHelp" placeholder="ID Pesawat" value="<?php echo $transportation_id?>">
                    </div>
                    <div class="form-group">
                      <label for="depart_to">Depart to</label>
                      <input type="text" class="form-control p-input" name="rute_to" id="rute_to" aria-describedby="depart_toHelp" placeholder="Depart To" value="<?php echo $depart_to?>">
                    </div>
                    <div class="form-group">
                      <label for="depart_at">Depart at</label>
                      <!-- !TODO Change input type to timepicker -->
                      <input type="time" data-format="HH:mm:ss" class="form-control p-input" name="depart_at" id="depart_at" aria-describedby="depart_atHelp" placeholder="Depart At" value="<?php echo $depart_at?>">
                    </div>
                    <div class="form-group">
                      <label for="transit_to">Transit to</label>
                      <input type="text" class="form-control p-input" name="transit_to" id="transit_to" aria-describedby="transit_toHelp" placeholder="Transit To" value="<?php echo $transit_to?>">
                    </div>
                    <div class="form-group">
                      <label for="transit_arrived">Transit arrived</label>
                      <input type="time" data-format="HH:mm:ss" class="form-control p-input" name="transit_arrived" id="transit_arrived" aria-describedby="transit_arrivedHelp" placeholder="Transit Arrived" value="<?php echo $transit_arrived?>">
                    </div>
                    <div class="form-group">
                      <label for="arrived">Arrived</label>
                      <input type="time" data-format="HH:mm:ss" class="form-control p-input" name="arrived" id="arrived" aria-describedby="arrivedHelp" placeholder="Arrived" value="<?php echo $arrived?>">
                    </div>
                    <div class="form-group">
                      <label for="price">Price</label>
                      <input type="text" class="form-control p-input" name="price" id="price" aria-describedby="priceHelp" placeholder="Price" value="<?php echo $price?>">
                    </div>
                    <div id="dtBox"></div>
                    <div class="form-group">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div id="dtBox"></div>

        <!-- partial:../../partials/_footer.html -->

        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="float-right">
                <a href="#">Star Admin</a> &copy; 2017
            </span>
          </div>
        </footer>


        <!-- partial -->
      </div>
    </div>

  </div>

  <script src="<?php echo base_url('assets/admin/');?>node_modules/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>node_modules/popper.js/dist/umd/popper.min.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>/node_modules/perfect-scrollbar/dist/js/perfect-scrollbar.jquery.min.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>js/off-canvas.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>js/hoverable-collapse.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>js/misc.js"></script>
  <script src="<?php echo base_url('assets/admin/');?>js/DateTimePicker.min.js"></script>
  >

  <script type="text/javascript">
    
      $(document).ready(function()
      {
        $("#dtBox").DateTimePicker({
          mode : "time",
          titleContentTime : "Time Picker"
        });
      });
    
  </script>

</body>

</html>
