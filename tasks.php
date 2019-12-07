<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <!-- Basic -->
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1">
  <meta name="google-site-verification" content="gXeMBX--H7xSFeawu77WYuSIYyuZQdkI4YQQnV0Hf_Y" />
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Campus Ambassador</title>
  <meta name="keywords" content="Ecell, vnit, E-cell VNIT, entreprenuship cell, consortium 18, 2018, consortium'18, Jugaad, Jugaad 18" />
  <meta name="description" content="Jugaad is an annual event organised by Ecell VNIT which aims to create an inexorable spirit of entrepreneurship amongst students, with the freshmen as particular consideration for the Club. It aims to function as a guide in the form of a fun event for students with creative ideas which can be transformed into successful street level transactions.">

  <meta name="theme-color" content="#000000">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />
  <link href="css/paper-dashboard.css?v=2.0.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="css/demo.css" rel="stylesheet" />
</head>

<body class="">
  <div class="wrapper ">
    <div class="sidebar" data-color="white" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        <a href="https://ca.ecellvnit.org/" class="simple-text logo-mini">
          <div class="logo-image-small">
            <img src="assets/img/ecell.png">
          </div>
        </a>
        <a href="https://ca.ecellvnit.org/" class="simple-text logo-normal">
          CA-PROGRAM
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <ul class="nav">
          <li>
            <a href="dashboard.php">
              <i class="nc-icon nc-bank"></i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="active ">
            <a href="tasks.php">
              <i class="nc-icon nc-diamond"></i>
              <p>TASKS</p>
            </a>
          </li>
          <li>
            <a href="notifications.php">
              <i class="nc-icon nc-bell-55"></i>
              <p>NOTIFICATIONS</p>
            </a>
          </li>
          <li>
            <a href="reglog/logout.php">
              <i class="nc-icon nc-bulb-63"></i>
              <p>LOGOUT</p>
            </a>
          </li>
          <li>
            <a href="https://consortium.ecellvnit.org/team.php">
              <i class="nc-icon nc-single-02"></i>
              <p>CONTACT</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand">Tasks</a>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <!-- <div class="panel-header panel-header-lg">

  <canvas id="bigDashboardChart"></canvas>


</div> -->
<div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h5 class="card-title text-center">TASKS</h5>
          <p class="text-center">Here you will be alloted tasks<p>
          <p class="text-center">Points table based on your performance will be shown in your Dashboard.<p></br>



        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <div class="card card-plain">
                <div class="card-header">
                  <h5 class="card-title">List of Tasks</h5>
                </div>

      </div>
    </div>
  </div>

</div>
  <!--   Core JS Files   -->
  <script src="js/core/jquery.min.js"></script>
  <script src="js/core/popper.min.js"></script>
  <script src="js/core/bootstrap.min.js"></script>
  <script src="js/core/perfect-scrollbar.jquery.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="js/core/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="js/core/paper-dashboard.min.js?v=2.0.0" type="text/javascript"></script>
  <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="js/core/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>

</html>
