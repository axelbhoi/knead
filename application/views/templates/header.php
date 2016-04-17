        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url();?>dashboard">Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">

                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;<?php echo $this->session->userdata('username');?>&nbsp;&nbsp;&nbsp;<b class="caret"></b></a>
                    <ul class="dropdown-menu">
                       
                        <li>
                            <a href="#" id = "add-user-btn"><i class="fa fa-fw fa-user"></i> Add User</a>
                        </li>

                        <li>
                            <a href="#" id = "password-btn"><i class="fa fa-fw fa-lock"></i> Change Password</a>
                        </li>

                        <li class="divider"></li>
                    
                        <li>
                            <a href="<?php echo base_url();?>admin/logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li id = "home-nav">
                        <a href="<?php echo base_url();?>dashboard"><i class="fa fa-fw fa-file"></i> Home</a>
                    </li>

                    <li id = "clients-nav">
                        <a href="<?php echo base_url();?>dashboard/testimonials"><i class="fa fa-fw fa-file"></i> Testimonials</a>
                    </li>

                    <li id = "portfolio-nav">
                        <a href="<?php echo base_url();?>dashboard/portfolios"><i class="fa fa-fw fa-file"></i> Portfolios</a>
                    </li>

                    <li id = "covers-nav">
                        <a href="<?php echo base_url();?>dashboard/covers"><i class="fa fa-fw fa-file"></i> Gallery</a>
                    </li>
                                        <!--
                    <li id = "covers-nav">
                        <a href="<?php echo base_url();?>dashboard/covers"><i class="fa fa-fw fa-file"></i> Covers</a>
                    </li>
                    -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
