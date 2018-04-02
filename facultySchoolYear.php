<?php 
    require('server/database.php');
    require('includes/headerlinks.php');
?>
    <title>School Year</title>
<style>

#table {
    height:450px;
    overflow:auto;
    overflow-x:hidden;    
}   

</style>

</head>
<body>

    <!--

        Tip 1: you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple"
        Tip 2: you can also add an image using data-image tag

    -->
<!-- Trigger the modal with a button -->
<?php
// includes sidebar
require('includes/sidebar.php')
?>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="collapse navbar-collapse">

                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="facultyManageSettings.php">
                                <p><i class="fa fa-long-arrow-left"></i>
                                 Return</p>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right" style="padding-right: 20px;">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <p> Manage Settings <b class="caret"></b></p>
                            </a>
                            <ul class="dropdown-menu" >
                                <li><a href="facultyUserAccount.php">1. User Account</a></li>
                                <li><a href="facultySchoolYear.php">2. School Year</a></li>
                                <li><a href="facultyStrandCourse.php">3. Strand & Course</a></li>
                                <li><a href="facultyRoom.php">4. Room</a></li>
                                <li><a href="facultySubject.php">5. Subject</a></li>
                                <li><a href="facultyTeacher.php">6. Teacher</a></li>
                                <li><a href="facultySection.php">7. Section</a></li>
                            </ul>
                        </li>
                        <li class="separator hidden-lg"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Body -->
        <div class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="card" id="table">
                        <div class="header">
                            <h4 class="title">School Year 
                            <!-- Button Trigger Modal for ADD -->
                                <button type="submit" class="btn btn-primary btn-md btn-fill pull-right" data-toggle="modal" data-target="#myModalAdd" title="Add School Year">
                                    <b class="fa fa-plus"> </b> 
                                </button>
                            </h4>
                            <p class="category">Here is a list of school year for the schedules</p>

                        </div>
                        <div class="content table-responsive table-full-width">
                        <div class="container-fluid">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <th>No.</th>
                                    <th>School Year</th>
                                    <th style="text-align: center;">Update</th>
                                    <th style="text-align: center;">Action</th>
                                </thead>
                                <?php 
                                    $sql ="SELECT * FROM school_year ORDER BY school_year ASC";
                                    $query = mysqli_query($conn, $sql);
                                    $count = 1;
                                    while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                <tbody>
                                    <tr>
                                    <?php if($row['status'] == "1") { ?>
                                        <td><?php echo $count;?></td>
                                        <td><?php echo $row['school_year'];?></td>
                                        <td style="text-align: center;"><button type="submit" class="btn btn-success btn-fill" data-toggle="modal" data-target="#myModalEdit<?php echo $row['school_year_id'];?>"> Edit </button></td>
                                        <td style="text-align: center;"><button type="button" class="btn btn-danger btn-fill" id="<?php echo $row['school_year_id']; ?>" onclick="window.location.href='server/schoolyear.php?status=0&syid=<?php echo $row['school_year_id'] ?>'">Deactivate</button></td>

                                    <?php $count++ ; } else { ?>

                                        <td style="background-color: #FF4A55;"><?php echo $count ;?></td>
                                        <td style="background-color: #FF4A55;"><?php echo $row['school_year'];?></td>
                                        <td style="background-color: #FF4A55; text-align: center;" ><button type="submit" class="btn btn-success btn-fill" data-toggle="modal" data-target="#myModalEdit<?php echo $row['school_year_id'];?>" disabled> Edit </button></td>
                                        <td style="text-align: center; background-color: #FF4A55;"><button type="button" class="btn btn-primary btn-fill" id="<?php echo $row['school_year_id']; ?>" onclick="window.location.href='server/schoolyear.php?status=1&syid=<?php echo $row['school_year_id'] ?>'"> Activate</button></td>
                                    </tr>
                                </tbody>
                                <?php $count++ ; } } ?>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

    <!-- Modal for ADD  -->
<div id="myModalAdd" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New School Year</h4>
      </div>

    <form action="server/schoolyear.php" method="POST" autocomplete="on">
        <div class="modal-body" style="background-color: #F7F7F8;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="content" style="background-color: ; border-radius: 8px;">
                            <div class="row">
                               
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="required"><b>School Year</b></label>
                                        <select class="form-control" name="school_year" placeholder="Department" type="text" required>
                                            <option value="">Select School Year:</option>
                                                <?php
                                                    $date = date('Y', strtotime('+ 1 Years'));
                                                        for($i=date('Y'); $i < $date + 5; $i++){
                                                            echo '<option>'.$i.'-'.($i + 1).'</option>';
                                                    }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                            
                            </div>
                           <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div> 
        </div>
     
        <div class="modal-footer">
            <button type="button" class="btn btn-default btn-fill" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-fill" name="add" value="add">Save</button>
        </div>
    </form>
    </div>
  </div>
</div>

<?php 
    $sql ="SELECT * FROM school_year";
    $query = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($query)) {
?>
    <!-- Modal for Edit  -->
<div id="myModalEdit<?php echo $row['school_year_id'];?>" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit School Year</h4>
      </div>

    <form action="server/schoolyear.php" method="POST" autocomplete="on">
        <div class="modal-body" style="background-color: #F7F7F8;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="content" style="background-color: ; border-radius: 8px;">
                            <div class="row">
                                
                                <div class="form-group" hidden>
                                    <input type="text" class="form-control" name="school_year_id" value="<?php echo $row['school_year_id'];?>">
                                </div>

                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="required"><b>School Year</b></label>
                                        <select class="form-control" name="school_year" placeholder="School_year" type="text" required>
                                            <option value="<?php echo $row['school_year'];?>"><?php echo $row['school_year'];?></option>
                                                <?php
                                                    $date = date('Y', strtotime('+ 1 Years'));
                                                        for($i=date('Y'); $i < $date + 5; $i++){ 

                                                                if($row['school_year'] != $i.'-'.($i + 1)){

                                                                    echo '<option>'.$i.'-'.($i + 1).'</option>';

                                                                    print_r($i);
                                                                }
                                                    }
                                                ?>
                                        </select>
                                    </div>
                                </div>
                            
                            </div>
                           <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div> 
        </div>
     
        <div class="modal-footer">
            <button type="button" class="btn btn-default btn-fill" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-fill" name="update" value="update">Update</button>
        </div>
    </form>
    </div>
  </div>
</div>

<?php } ?>

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
</body>
<?php
require("includes/footerlinks.php");
?>