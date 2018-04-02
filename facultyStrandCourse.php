<?php 
    require('server/database.php');
    require('includes/headerlinks.php');
?>
    <title>Strand Course</title>
<style>

#table {
    height:570px;
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
                            <h4 class="title">Strand & Course 
                            <!-- Button Trigger Modal for ADD -->
                                <button type="submit" class="btn btn-primary btn-md btn-fill pull-right" data-toggle="modal" data-target="#myModalAdd" title="Add School Year">
                                    <b class="fa fa-plus"> </b> 
                                </button>
                            </h4>
                            <p class="category">Here is a list of strand and courses of the school</p>

                        </div>
                        <div class="content table-responsive table-full-width">
                        <div class="container-fluid">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <th>No.</th>
                                    <th>Code</th>
                                    <th>Description</th>
                                    <th>Classification</th>
                                    <th style="text-align: center;">Update</th>
                                    <th style="text-align: center;">Action</th>
                                </thead>
                                <?php 
                                    $sql ="SELECT * FROM strand_course ORDER BY sc_sc ASC";
                                    $query = mysqli_query($conn, $sql);
                                    $count = 1;
                                    while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                <tbody>
                                    <tr>
                                    <?php if($row['sc_status'] == "1") { ?>
                                        <td><?php echo $count;?></td>
                                        <td><?php echo $row['sc_code'];?></td>
                                        <td><?php echo $row['sc_name'];?></td>
                                        <td><?php echo $row['sc_sc'];?></td>
                                        <td style="text-align: center;"><button type="submit" class="btn btn-success btn-fill" data-toggle="modal" data-target="#myModalEdit<?php echo $row['sc_id'];?>"> Edit </button></td>
                                        <td style="text-align: center;"><button type="button" class="btn btn-danger btn-fill" id="<?php echo $row['sc_id']; ?>" onclick="window.location.href='server/strandcourse.php?status=0&scid=<?php echo $row['sc_id'] ?>'">Deactivate</button></td>

                                    <?php $count++ ; } else { ?>

                                        <td style="background-color: #FF4A55;"><?php echo $count ;?></td>
                                        <td style="background-color: #FF4A55;"><?php echo $row['sc_code'];?></td>
                                        <td style="background-color: #FF4A55;"><?php echo $row['sc_name'];?></td>
                                        <td style="background-color: #FF4A55;"><?php echo $row['sc_sc'];?></td>
                                        <td style="background-color: #FF4A55; text-align: center;" ><button type="submit" class="btn btn-success btn-fill" data-toggle="modal" data-target="#myModalEdit<?php echo $row['sc_id'];?>" disabled> Edit </button></td>
                                        <td style="text-align: center; background-color: #FF4A55;"><button type="button" class="btn btn-primary btn-fill" id="<?php echo $row['sc_id']; ?>" onclick="window.location.href='server/strandcourse.php?status=1&scid=<?php echo $row['sc_id'] ?>'"> Activate</button></td>
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
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New Strand & Course</h4>
      </div>

    <form action="server/strandcourse.php" method="POST" autocomplete="on">
        <div class="modal-body" style="background-color: #F7F7F8;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="content" style="background-color: ; border-radius: 8px;">
                            
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="required"><b>Description</b></label>
                                        <input type="text" class="form-control" placeholder="Description" name="description" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required"><b>Code</b></label>
                                        <input type="text" class="form-control" placeholder="Code" name="code" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required"><b>Classification</b></label>
                                        <select class="form-control" name="classification" placeholder="Classification" type="text" required>
                                            <option value=""><small><b>Select Position:</b></small></option>
                                            <option value="Course">Course</option>
                                            <option value="Strand">Strand</option>
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
    $sql ="SELECT * FROM strand_course";
    $query = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($query)) {
?>
    <!-- Modal for Edit  -->
<div id="myModalEdit<?php echo $row['sc_id']?>" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Strand & Course</h4>
      </div>

    <form action="server/strandcourse.php" method="POST" autocomplete="on">
        <div class="modal-body" style="background-color: #F7F7F8;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="content" style="background-color: ; border-radius: 8px;">
                            
                            <div class="form-group" hidden>
                                    <input type="text" class="form-control" name="sc_id" value="<?php echo $row['sc_id'];?>">
                                </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="required"><b>Description</b></label>
                                        <input type="text" class="form-control" placeholder="Description" name="description" value="<?php echo $row['sc_name']?>" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required"><b>Code</b></label>
                                        <input type="text" class="form-control" placeholder="Code" name="code" value="<?php echo $row['sc_code']?>" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required"><b>Classification</b></label>
                                        <select class="form-control" name="classification" placeholder="Classification" type="text" required>
                                            <option value="<?php echo $row['sc_sc'];?>"><?php echo $row['sc_sc'];?></small></option>
                                                <?php
                                                    $classification = array('Strand', 'Course');
                                                        for($i=0; $i < 2; $i++){
                                                            if ($row['sc_sc'] != $classification[$i]) {

                                                                echo '<option>'. $classification[$i] .'</option>';
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
            <button type="submit" class="btn btn-primary btn-fill" name="update" value="update">Save</button>
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