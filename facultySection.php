<?php 
    require('server/database.php');
    require('includes/headerlinks.php');
?>
    <title>Section</title>
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
                            <h4 class="title">User Accounts 
                            <!-- Button Trigger Modal for ADD -->
                                <button type="submit" class="btn btn-primary btn-md btn-fill pull-right" data-toggle="modal" data-target="#myModalAdd" title="Add New User">
                                    <b class="fa fa-plus"> </b> 
                                </button>
                            </h4>
                            <p class="category">Here is a list of user accounts of the system</p>

                        </div>
                        <div class="content table-responsive table-full-width">
                        <div class="container-fluid">
                            <table class="table table-hover table-striped table-bordered">
                                <thead>
                                    <th>No.</th>
                                    <th>Section Code</th>
                                    <th>Section Name</th>
                                    <th style="text-align: center;">Update</th>
                                    <th style="text-align: center;">Action</th>
                                </thead>
                                <?php 
                                    $sql ="SELECT * FROM section";
                                    $query = mysqli_query($conn, $sql);
                                    $count = 1; 
                                    while ($row = mysqli_fetch_assoc($query)) {
                                ?>
                                <tbody>
                                    <tr>
                                    <?php if($row['sec_status'] == "1") { ?>
                                        <td><?php echo $count;?></td>
                                        <td><?php echo $row['sec_name'];?></td>
                                        <td><?php echo $row['sec_code'];?></td>
                                        <td style="text-align: center;"><button type="submit" class="btn btn-success btn-sm btn-fill" data-toggle="modal" data-target="#myModalEdit<?php echo $row['sec_id'];?>"> Edit </button></td>
                                        <td style="text-align: center;">
 
                                                <button type="button" class="btn btn-danger btn-sm btn-fill" id="<?php echo $row['sec_id']; ?>" value="">Deactivate</button>

                                        </td>
                                     

                                    <?php $count++; } else { ?>
                                        <td style="background-color: #FF4A55;"><?php echo $count;?></td>
                                        <td style="background-color: #FF4A55;"><?php echo $row['sec_code'];?></td>
                                        <td style="background-color: #FF4A55;"><?php echo $row['sec_name'];?></td>
                                        <td style="background-color: #FF4A55;"><button type="submit" class="btn btn-success btn-sm btn-fill" data-toggle="modal" data-target="#myModalEdit<?php echo $row['sec_id'];?>" disabled> Edit </button></td>
                                        <td style="text-align: center; background-color: #FF4A55;">
                                        
                                                <button type="button" class="btn btn-primary btn-sm btn-fill activate" value="<?php echo $row['sec_id']; ?>"> Activate</button>                        
                                  
                                        </td>
                                    </tr>
                                </tbody>
                                <?php $count++; } } ?>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

    <!-- Modal for ADD USER ACCOUNT -->
<div id="myModalAdd" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add New User Account</h4>
      </div>

    <form action="server/add_useraccount.php" method="POST" autocomplete="on">
        <div class="modal-body" style="background-color: #F7F7F8;">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="content" style="background-color: ; border-radius: 8px;">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><b>Company</b></label>
                                        <input type="text" class="form-control" disabled placeholder="Company" value="Informatics College Manila">
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="required"><b>Department</b></label>
                                        <select class="form-control" name="department" placeholder="Department" type="text" required>
                                            <option value=""><small><b>Select Department:</b></small></option>
                                            <option value="Faculty Department">Faculty Department</option>
                                            <option value="Services Department">Services Department</option>
                                            <option value="Administrative Department">Administrative Department</option>
                                            <option value="Student Council Department">Student Council Department</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="required"><b>Position</b></label>
                                        <select class="form-control" name="position" placeholder="Department" type="text" required>
                                            <option value=""><small><b>Select Position:</b></small></option>
                                            <option value="Head Officer">Head Officer</option>
                                            <option value="Assistant Officer">Assistant Officer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label class="required"><b>Username</b></label>
                                        <input type="text" class="form-control" placeholder="Username" name="username" required>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label class="required"><b>Email Address</b></label>
                                        <input type="email" class="form-control" placeholder="Email Address" name="email" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required"><b>First Name</b></label>
                                        <input type="text" class="form-control" placeholder="First Name" name="firstname" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="required"><b>Last Name</b></label>
                                        <input type="text" class="form-control" placeholder="Last Name" name="lastname" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label><b>Address</b></label>
                                        <input type="text" class="form-control" placeholder="Home Address" name="address">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><b>City</b></label>
                                        <input type="text" class="form-control" placeholder="City" name="city">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><b>Country</b></label>
                                        <input type="text" class="form-control" placeholder="Country" name="country">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label><b>Postal Code</b></label>
                                        <input type="number" class="form-control" placeholder="ZIP Code" name="postal">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label><b>About Me</b></label>
                                        <textarea rows="5" class="form-control" placeholder="Tell me something about yourself" name="aboutme"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><b>Facebook</b></label>
                                        <input type="text" class="form-control" placeholder="Facebook" name="facebook">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><b>Twitter</b></label>
                                        <input type="text" class="form-control" placeholder="Twitter" name="twitter">
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
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="add" value="add">Save</button>
        </div>
    </form>
    </div>
  </div>
</div>

<?php 
    $sql ="SELECT * FROM useraccount";
    $query = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($query)) {
?>
    <!-- Modal for Edit USER ACCOUNT -->
<div id="myModalEdit<?php echo $row['user_id'];?>" class="modal fade" tabindex="-1" role="dialog">
  <div class="modal-dialog modal-dialog-centered modal-lg" role="document">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit USer Account</h4>
      </div>
      <form method="POST" action="server/add_useraccount.php">
      <div class="modal-body">
            <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="content">
                            <div class="row">

                                <div class="form-group" hidden>
                                    <input type="text" class="form-control" name="user_id" value="<?php echo $row['user_id'];?>">
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Company</label>
                                        <input type="text" class="form-control" disabled placeholder="Company" value="Informatics College Manila">
                                    </div>
                                </div>

                                <div class="col-md-5">
                                    <div class="form-group">
                                        <label class="required"><b>Department</b></label>
                                        <select class="form-control" name="department" placeholder="Department" type="text" required>
                                            <option value="<?php echo $row['user_department'];?>"><?php echo $row['user_department'];?></small></option>
                                            <option value="Faculty Department">Faculty Department</option>
                                            <option value="Services Department">Services Department</option>
                                            <option value="Administrative Department">Administrative Department</option>
                                            <option value="Student Council Department">Student Council Department</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label class="required"><b>Position</b></label>
                                        <select class="form-control" name="position" placeholder="Department" type="text" required>
                                            <option value="<?php echo $row['user_position'];?>"><?php echo $row['user_position'];?></small></option>
                                            <option value="Head Officer">Head Officer</option>
                                            <option value="Assistant Officer">Assistant Officer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label class="required">Username</label>
                                                <input type="text" class="form-control" name="username" placeholder="Username" value="<?php echo $row['user_name'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group">
                                                <label class="required">Email Address</label>
                                                <input type="text" class="form-control" name="email" placeholder="Email Address" value="<?php echo $row['user_email'];?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="required">First Name</label>
                                                <input type="text" class="form-control" name="firstname" placeholder="First Name" value="<?php echo $row['user_firstname'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="required">Last Name</label>
                                                <input type="text" class="form-control" name="lastname" placeholder="Last Name" value="<?php echo $row['user_lastname'];?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address" placeholder="Home Address" value="<?php echo $row['user_address'];?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>City</label>
                                                <input type="text" class="form-control" name="city" placeholder="City" value="<?php echo $row['user_city'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <input type="text" class="form-control" name="country" placeholder="Country" value="<?php echo $row['user_country'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label>Postal Code</label>
                                                <input type="number" class="form-control" name="postal" placeholder="ZIP Code" value="<?php echo $row['user_postal'];?>">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>About Me</label>
                                                <textarea rows="5" class="form-control" name="aboutme" placeholder="Tell me something about yourself" value="<?php echo $row['user_aboutme'];?>"><?php echo $row['user_aboutme'];?></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Facebook</label>
                                                <input type="text" class="form-control" name="facebook" placeholder="Facebook" value="<?php echo $row['user_facebook'];?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Twitter</label>
                                                <input type="text" class="form-control" name="twitter" placeholder="Twitter" value="<?php echo $row['user_twitter'];?>">
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
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function()
    {
         $('#facultyManageSettingsview').addClass('active');
        $('.activate').on('click',function()
        {
            var id     =    $(this).val;
            var status =    '1';
            var action =    "activate";
            $.ajax({
                    type: "POST",
                    url: "server/section.php",
                    data: {id:id, status:status, action:action},
                    success: function(data)
                    {
                        if(data == "success"){
                            alert('zedek');
                        }                   
                    }
                });
        });
    });
</script>
<?php
require("includes/footerlinks.php");
?>