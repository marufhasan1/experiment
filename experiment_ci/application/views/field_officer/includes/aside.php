<style>
    ul li a span.icon{
        float: right;
        margin-right: 20px;
    }
</style>
<!-- Sidebar -->
<aside id="sidebar-wrapper">
    <div class="sidebar-nav">
        <h3 class="sidebar-brand"><a href="#">Admin <span>Panel</span></a></h3>
    </div>
    
    <nav>
        <ul class="sidebar-nav">
            <li id="dashboard">
                <a href="<?php echo site_url('field_officer/dashboard'); ?>">
                    <i class="fa fa-home"></i> &nbsp; Dashboard
                </a>
            </li>

            <li id="order-menu">
                <a href="#order" data-toggle="collapse">
                    <i class="fa fa-male"></i>
                    &nbsp; Order
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="order" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('order/order');?>">
                            <i class="fa fa-angle-right"></i>
                            New Order
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('order/order/all'); ?>">
                            <i class="fa fa-angle-right"></i>
                            All Order
                        </a>
                    </li>

                </ul>
            </li>
        </ul>
    </nav>
</aside>
<!-- /#sidebar-wrapper -->

