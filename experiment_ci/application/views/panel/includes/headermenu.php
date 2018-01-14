<style>
    .view-site:hover{
        color: #333;
    }
    a:focus{border: none;}
</style>


<!-- Page Content -->
<div id="page-content-wrapper">


    <!-- top navigation start -->
    <div class="row">
        <nav class="col-xs-12 content-fixed-nav">
            <ul>
                <li>
                    <a href="#menu-toggle" id="menu-toggle">
                        <i class="fa fa-angle-left"></i>
                        <i class="fa fa-angle-right"></i>
                    </a>
                </li>

                <li class="dropdown">
                    <a id="message-menu" data-toggle="dropdown">
                        <i class="fa fa-envelope-o"></i>
                        <span class="badge badge-messages">0</span>
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-left" aria-labelledby="message-menu">
                        <li class="dropdown-menu-description"><a>Messages</a></li>                        
                        <li class="divider"></li>
                        <li><a href="#">All</a></li>
                    </ul>
                </li> 
                <li id="home-btn"><a class="home-btn" target="_blank" title="Visit Site" href="<?php echo site_url(); ?>"><i class="fa fa-home"></i></a></li>             
            </ul>

            <ul class="nav-inner-right">
                <li style="width: auto;">
                    <a style="font-weight: bold;"><span style="color: #000;">Hello: </span> <span style="color: #00A8FF;"><?php echo $name; ?></span></a>
                </li>
                <li class="user-menu dropdown" style="width: 72px;">
                    <a class="dropdown-toggle" type="button" data-toggle="dropdown" >
                        <img class="nav-pic" src="<?php echo site_url($photo); ?>" />
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-menu-description"><a>Settings</a></li>
                        <li><a href="<?php echo site_url("panel/profile");?>">Profile</a></li>                       
                        <li class="divider"></li>
                        <li><a href="<?php echo site_url('access/subscriber/logout'); ?>">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
    <!-- top navigation end -->

    <div class="main-area">&nbsp;</div>