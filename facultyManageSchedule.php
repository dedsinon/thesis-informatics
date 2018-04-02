
<?php
require("includes/headerlinks.php");
?>
<style>

#table {
    height:375px;
    overflow:auto;
    overflow-x:hidden;    
}   

.back-to-top {
    cursor: pointer;
    position: fixed;
    bottom: 70px;
    right: 20px;
    display:none;
}
</style>

</head>
<body>

    <!--
        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag
    -->

<?php
require('includes/sidebar.php')
?>


    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right" style="padding-right: 20px;">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p> Manage Settings <b class="caret"></b></p>
                            </a>
                            <ul class="dropdown-menu" >
                                <li><a href="facultyUserAccount.php">1. User Account</a></li>
                                <li><a href="facultySchoolYear.php">2. School Year</a></li>
                                <li><a href="#">3. Strand & Course</a></li>
                                <li><a href="#">4. Room</a></li>
                                <li><a href="#">5. Subject</a></li>
                                <li><a href="#">6. Teacher</a></li>
                                <li><a href="#">7. Section</a></li>
                            </ul>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Body -->

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card" id="table">
                            <div class="header">
                                <h4 class="title">User Accounts</h4>
                                <p class="category">Here is a list of user accounts</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                            <div class="container-fluid">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Username</th>
                                        <th>Email Address</th>
                                        <th>Email Address</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Dakota Riceasdddddddddddddd</td>
                                            <td>$36,738</td>
                                            <td>Niger</td>
                                            <td>Oud-Turnhout</td>
                                            <td>Oud-Turnhout</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Minerva Hooper</td>
                                            <td>$23,789</td>
                                            <td>Curaçao</td>
                                            <td>Sinaai-Waas</td>
                                            <td>Sinaai-Waas</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Sage Rodriguez</td>
                                            <td>$56,142</td>
                                            <td>Netherlands</td>
                                            <td>Baileux</td>
                                            <td>Baileux</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Philip Chaney</td>
                                            <td>$38,735</td>
                                            <td>Korea, South</td>
                                            <td>Overland Park</td>
                                            <td>Overland Park</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Doris Greene</td>
                                            <td>$63,542</td>
                                            <td>Malawi</td>
                                            <td>Feldkirchen in Kärnten</td>
                                            <td>Feldkirchen in Kärnten</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" id="table">
                            <div class="header">
                                <h4 class="title">School Year</h4>
                                <p class="category">Here is a list of school year</p>
                            </div>
                            <div class="content table-responsive table-full-width">
                            <div class="container-fluid">
                                <table class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <th>School Year</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2017-2018</td>
                                        </tr>
                                        <tr>
                                            <td>2018-2019</td>
                                        </tr>
                                        <tr>
                                            <td>2019-2020</td>
                                        </tr>
                                        <tr>
                                            <td>2020-2021</td>
                                        </tr>
                                        <tr>
                                            <td>2021-2022</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>
                </div>
       
                <div class="col-md-9">
                    <div class="card" id="table">
                        <div class="header">
                            <h4 class="title">Strand & Course</h4>
                            <p class="category">Here is a list of strand & course</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                        <div class="container-fluid">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>Strand / Course</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>BSIT</td>
                                        <td>Bachelor of Science in Information Technology</td>
                                        <td>Course</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sinaai-Waas</td>
                                        <td>Sinaai-Waas</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Baileux</td>
                                        <td>Baileux</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Overland Park</td>
                                        <td>Overland Park</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Feldkirchen in Kärnten</td>
                                        <td>Feldkirchen in Kärnten</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" id="table">
                        <div class="header">
                            <h4 class="title">Rooms</h4>
                            <p class="category">Here is a list of rooms</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                        <div class="container-fluid">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <th>Number</th>
                                    <th>Description</th>
                                    <th>Classification</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Oud-Turnhout</td>
                                        <td>Oud-Turnhout</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sinaai-Waas</td>
                                        <td>Sinaai-Waas</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Baileux</td>
                                        <td>Baileux</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Overland Park</td>
                                        <td>Overland Park</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Feldkirchen in Kärnten</td>
                                        <td>Feldkirchen in Kärnten</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" id="table">
                        <div class="header">
                            <h4 class="title">Subjects</h4>
                            <p class="category">Here is a list of subjects</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                        <div class="container-fluid">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <th>Code</th>
                                    <th>Desciption</th>
                                    <th>Strand / Course Code</th>
                                    <th>Unit</th>
                                    <th>Term</th>
                                    <th>Room Classification</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Oud-Turnhout</td>
                                        <td>Oud-Turnhout</td>
                                        <td>Oud-Turnhout</td>
                                        <td>Oud-Turnhout</td>
                                        <td>Oud-Turnhout</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sinaai-Waas</td>
                                        <td>Sinaai-Waas</td>
                                        <td>Sinaai-Waas</td>
                                        <td>Sinaai-Waas</td>
                                        <td>Sinaai-Waas</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Baileux</td>
                                        <td>Baileux</td>
                                        <td>Baileux</td>
                                        <td>Baileux</td>
                                        <td>Baileux</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Overland Park</td>
                                        <td>Overland Park</td>
                                        <td>Overland Park</td>
                                        <td>Overland Park</td>
                                        <td>Overland Park</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Feldkirchen in Kärnten</td>
                                        <td>Feldkirchen in Kärnten</td>
                                        <td>Feldkirchen in Kärnten</td>
                                        <td>Feldkirchen in Kärnten</td>
                                        <td>Feldkirchen in Kärnten</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" id="table">
                        <div class="header">
                            <h4 class="title">Teachers</h4>
                            <p class="category">Here is a list of teachers</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                        <div class="container-fluid">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <th>Full Name</th>
                                    <th>Contact Number</th>
                                    <th>Masters/Profession</th>
                                    <th>Specialization</th>
                                    <th>Work Status</th>
                                    <th>Rest Day</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Daryl Elvin Sinon</td>
                                        <td>Oud-Turnhout</td>
                                        <td>Oud-Turnhout</td>
                                        <td>Oud-Turnhout</td>
                                        <td>Oud-Turnhout</td>
                                        <td>Oud-Turnhout</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sinaai-Waas</td>
                                        <td>Sinaai-Waas</td>
                                        <td>Sinaai-Waas</td>
                                        <td>Sinaai-Waas</td>
                                        <td>Sinaai-Waas</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Baileux</td>
                                        <td>Baileux</td>
                                        <td>Baileux</td>
                                        <td>Baileux</td>
                                        <td>Baileux</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Overland Park</td>
                                        <td>Overland Park</td>
                                        <td>Overland Park</td>
                                        <td>Overland Park</td>
                                        <td>Overland Park</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Feldkirchen in Kärnten</td>
                                        <td>Feldkirchen in Kärnten</td>
                                        <td>Feldkirchen in Kärnten</td>
                                        <td>Feldkirchen in Kärnten</td>
                                        <td>Feldkirchen in Kärnten</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" id="table">
                        <div class="header">
                            <h4 class="title">Sections</h4>
                            <p class="category">Here is a list of Sections</p>
                        </div>
                        <div class="content table-responsive table-full-width">
                        <div class="container-fluid">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <th>Code</th>
                                    <th>Description</th>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Oud-Turnhout</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Sinaai-Waas</td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Baileux</td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>Overland Park</td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>Feldkirchen in Kärnten</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<a id="back-to-top" href="#" class="btn btn-primary btn-sm back-to-top btn-fill" role="button" title="Click to return on the top page" data-toggle="tooltip" data-placement="left"><span class="fa fa-arrow-up"></span></a>
        
        <footer class="footer">
            <div class="container-fluid">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="#">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="http://www.informatics.edu.ph/">
                                Company
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Developers
                            </a>
                        </li>
                        <!-- <li>
                            <a href="#">
                               Blog
                            </a>
                        </li> -->
                    </ul>
                </nav>
                <p class="copyright pull-right">
                    Copyright &copy; <script>document.write(new Date().getFullYear())</script> 
                    <a href="#">Informatics Developers Team</a> All Rights Reserved
                </p>
            </div>
        </footer>
    </div>
</div>
</body>

<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script>
    $(document).ready(function() {
        $('#facultyManageScheduleview').addClass('active');
    });

</script>


<?php
require("includes/footerlinks.php");
?>