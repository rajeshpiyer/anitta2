<?php
$sid=$_REQUEST["sid"];
$tid=$_REQUEST["tid"];

?>
<?php
include('header.php');
include ('session.php');
$student_query = mysql_query("select * from tbl_student where student_id='$session_id'") or die(mysql_error());
$student_row = mysql_fetch_array($student_query);

?>
<body>

    <?php include('navhead_student.php'); ?>

    <div class="container">
        <div class="row-fluid">
            <div class="span3">
                <div class="hero-unit-3">
                    <div class="alert-index alert-success">
                        <i class="icon-calendar icon-large"></i>
                        <?php
                        $Today = date('y:m:d');
                        $new = date('l, F d, Y', strtotime($Today));
                        echo $new;
                        ?>
                    </div>
                </div>
                <div class="hero-unit-1">
                    <ul class="nav  nav-pills nav-stacked">
                        <li class="nav-header">Links</li>
                        <li>
                            <a href="student_home.php"><i class="icon-home icon-large"></i>&nbsp;Home
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a>

                        </li>
                        <li class="active">
                            <a href="student_class.php"><i class="icon-group icon-large"></i>&nbsp;Class
                                <div class="pull-right">
                                    <i class="icon-double-angle-right icon-large"></i>
                                </div>  
                            </a></li>
                    </ul>
                </div>

            </div>
            <div class="span9">

                <div class="hero-unit-3">
                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                        <div class="alert alert-info">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong><i class="icon-user icon-large"></i>&nbsp;My Classes</strong>
                        </div>
                        <thead>
                            <tr>

                                <th>File Name</th>
                                <th>File </th>
                                <th>Upload Date</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                            $query = mysql_query("select * from tbl_files where  teacher_id='$tid' and subject_id='$sid'") or die(mysql_error());
                            while ($row = mysql_fetch_array($query)) {
                                $subject_id = $row['subject_id'];
                                $teacher_id = $row['teacher_id'];

                              
                                ?>
                                <tr class="odd gradeX">


                                    <td><?php echo $row['fname']; ?></td>
                                    <td><a rel="tooltip"  title="View Notes" id="v<?php echo $subject_id; ?>"  href="<?php echo $row['location'] ; ?>" class="btn btn-info">&nbsp;<i class="icon-file-alt icon-large"></i>&nbsp;<?php echo $row['description']; ?></a></td> 
                                    <td><?php echo $row['fdateIn'] ; ?></td>   
                                </tr>
<?php } ?>
                        </tbody>
                    </table>
                    <!-- end slider -->
                </div>
            </div>

        </div>
<?php include('footer.php'); ?>
    </div>
</div>
</div>
</body>
</html>

