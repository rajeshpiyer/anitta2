
<div class="row-fluid">
    <div class="span12">


        <div class="navbar navbar-fixed-top navbar-inverse">
            <div class="navbar-inner">
                <div class="container">

                    <!-- .btn-navbar is used as the toggle for collapsed navbar content -->
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <!-- Be sure to leave the brand out there if you want it shown -->


                    <!-- Everything you want hidden at 940px or less, place within here -->



                    <div class="nav-collapse collapse">
                        <!-- .nav, .navbar-search, .navbar-form, etc -->
                        <a href="//www.facebook.com"><i class="icon-facebook-sign icon-large" id="color_white"></i></a>
                        <a href="//www.twitter.com"><i class="icon-twitter icon-large" id="color_white"></i></a>
                        <a href="//www.googleplus.com"><i class="icon-google-plus icon-large" id="color_white"></i></a>
                        <i class="icon-github-alt icon-large" id="color_white"></i>
                        <a href="//www.linkedin.com"><i class="icon-linkedin-sign icon-large" id="color_white"></i></a>

                        <!-- end collapse -->
                    </div>

                </div>
            </div>
        </div>
        <div class="hero-unit-header">
            <div class="container">

                <div class="row-fluid">
                    <div class="span12">
                        <div class="row-fluid">
                            <div class="span6">
                             <img src="admin/images/head1.png">

                            </div>
                            <div class="span6">
                                <div class="pull-right">
								<br>
								<br>
								
								
                                    <!--- login button -->
                                    <?php
                                    $student_query=mysql_query("select * from tbl_student where student_id='$session_id'")or die(mysql_error());
                                    $student_row=  mysql_fetch_array($student_query);
                                    ?>

                                     <img  src="admin/<?php echo $student_row['image']; ?>"  class="img img-rounded" id="picture">
                                        &nbsp;
                                    <div class="btn-group">

                                        <button class="btn btn-success"><i class="icon-user icon-large"></i>&nbsp; <?php echo $student_row['fullname']; ?></button>
                                        <button class="btn dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a href="#logout" role="button"  data-toggle="modal"><i class="icon-signout icon-large"></i>&nbsp;Logout</a></li>
                                        </ul>

                                    </div>

                                    <?php include('logout_modal.php') ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
