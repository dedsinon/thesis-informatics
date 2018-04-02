<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/info.jpg" style="border-radius: 10px;">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Dashboard</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>

    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="assets/css/demo.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
   

</head>
<body>

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->

<div class="wrapper">

    <div class="sidebar" data-color="blue" data-image="assets/img/info.jpg">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="dashboard.php" class="simple-text">
                        <img src="assets/img/logo.jpg" style="width: 220px; border-radius: 5px; box-shadow: -3px 3px 2px 0px #303030;">
                </a>
            </div>
            <ul class="nav">
                <li class="active">
                    <a onclick="nav('facultyManageSettings.php');">
                        <i class="pe-7s-graph"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="facultyProfile.php">
                        <i class="pe-7s-user"></i>
                        <p>User Profile</p>
                    </a>
                </li>
                <hr>
                <li>
                    <a onclick="nav('https://wikipedia.org');">
                        <i class="pe-7s-settings"></i>
                        <p>Manage Settings</p>
                    </a>
                </li>
                <li>
                    <a href="typography.html">
                        <i class="pe-7s-date"></i>
                        <p>Manage Schedule</p>
                    </a>
                </li>
                <li>
                    <a href="icons.html">
                        <i class="pe-7s-note2"></i>
                        <p>Monitor Schedule</p>
                    </a>
                </li>
                <li>
                    <a href="maps.html">
                        <i class="pe-7s-print"></i>
                        <p>View & Print Reports</p>
                    </a>
                </li>
				<li class="active-pro">
                    <a href="upgrade.html">
                        <i class="pe-7s-back"></i>
                        <p>Logout Session</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel" style="overflow: hidden">
           <script>
              function nav(page) {
                 var viewer = document.getElementById('components');
                 viewer.src = page;
              }
           </script>
            <iframe id="components" style='border:0; width: 100%;height: 100vh;' src='' ></iframe>
        </div>


       
    </div>

</div>

</body>
    <!--   Core JS Files   -->
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="assets/js/demo.js"></script>

   

	<script type="text/javascript">
    	$(document).ready(function(){

        	demo.initChartist();

        	$.notify({
            	icon: 'pe-7s-gift',
            	message: "Welcome to <b>Informatics Scheduling & Monitoring System</b> - a fastest way to plot and monitor schedules."

            },{
                type: 'info',
                timer: 4000
            });

    	});
	</script>

</html>
