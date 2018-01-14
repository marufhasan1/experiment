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
			<a href="<?php echo site_url('panel/dashboard'); ?>">Client&nbsp<span>Panel</span></a>
		</h3>
    </div>

    <nav class="aside-nav">
        <ul class="sidebar-nav">

            <li id="dashboard">
                <a href="<?php echo site_url('panel/dashboard'); ?>">
                    <i class="fa fa-home"></i> &nbsp; Dashboard
                </a>
            </li>  

             <li id="ledger">
                <a href="<?php echo site_url('panel/clientLedger'); ?>">
                     <i class="fa fa-money"></i> &nbsp; Ledger
                </a>
            </li>   

            <li id="order-menu">
                <a href="#order" data-toggle="collapse">
                    <i class="fa fa-male"></i>
                    Order
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="order" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('panel/order');?>">
                            <i class="fa fa-angle-right"></i>
                            New Order
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('panel/order/all'); ?>">
                            <i class="fa fa-angle-right"></i>
                            All Order
                        </a>
                    </li>

                </ul>
            </li>

        </ul>
    </nav>
</aside>
<!--sidebar-->
