<style>
    ul li a span.icon{
        float: right;
        margin-right: 20px;
    }
    .aside-head{
        position: fixed;
        z-index: 2;
        width: 150px;
    }
    .sidebar-brand{
        position: fixed;
        width: 250px;
        z-index: 2;
        transition: all 0.4s ease-in-out;
    }
    .sidebar-brand.sidebar-slide{
        transform: translateX(-100%);
        transition: all 0.4s ease-in-out;
    }
    .aside-nav{
        margin-top: 65px;
        z-index: -3;
    }
    @media screen and (max-width: 768px){
        .sidebar-brand{
            transform: translateX(-100%);
            transition: all 0.4s ease-in-out;
        }
        .sidebar-brand.sidebar-slide{
            transform: translateX(0%);
            transition: all 0.4s ease-in-out;
        }
    }
</style>


<!-- Sidebar -->
<aside id="sidebar-wrapper">
    <div class="sidebar-nav">
        <h3 class="sidebar-brand <?php if($this->data['width'] == 'full-width') {echo 'sidebar-slide';} ?>">
			<a style="font-size: 23px !important;" href="<?php echo site_url('super/dashboard'); ?>">Super Admin <span>Panel</span></a>
		</h3>
    </div>

    <nav class="aside-nav">
        <ul class="sidebar-nav">
            <li id="dashboard">
                <a href="<?php echo site_url('super/dashboard'); ?>">
                    <i class="fa fa-home"></i> &nbsp; Dashboard
                </a>
            </li>


            <li id="privilege">
                <a href="<?php echo site_url('privilege/privilege'); ?>">
                    <i class="fa fa-home"></i> &nbsp; Privilege
                </a>
            </li>
        </ul>
    </nav>
</aside>
<!-- /#sidebar-wrapper -->
