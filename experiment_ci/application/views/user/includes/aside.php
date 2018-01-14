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
                <a href="<?php echo site_url('user/dashboard'); ?>">
                    <i class="fa fa-home"></i> &nbsp; Dashboard
                </a>
            </li>


            <li id="client-menu">
                <a href="#client" data-toggle="collapse">
                    <i class="fa fa-users"></i>
                    &nbsp;Client
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="client" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('client/client');?>">
                            <i class="fa fa-angle-right"></i>
                            Add Client
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('client/client/view_all'); ?>">
                            <i class="fa fa-angle-right"></i>
                            All Client
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('client/transaction/'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Add Transaction
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('client/all_transaction'); ?>">
                            <i class="fa fa-angle-right"></i>
                            All Transaction
                        </a>
                    </li>
                </ul>
            </li>

            <li id="stock_menu">
                <a href="#stock" data-toggle="collapse">
                    <i class="fa fa-bar-chart" aria-hidden="true"></i>
                    &nbsp;Stock
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="stock" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('stock/stock'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Retail Stock
                        </a>
                    </li>

                    <?php /* <li>
                        <a href="<?php echo site_url('stock/stock/do_stock'); ?>">
                            <i class="fa fa-angle-right"></i>
                            DO Stock
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('stock/stock_distribution'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Stock Distribution
                        </a>
                    </li> */ ?>
                </ul>
            </li>

            <li id="sale_menu">
                <a href="#sale" data-toggle="collapse">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    Sale
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="sale" class="sidebar-nav collapse">
                    <!-- <li>
                        <a href="<?php //echo site_url('sale/do_sale'); ?>">
                            <i class="fa fa-angle-right"></i>
                            DO Sale
                        </a>
                    </li> -->

                    <li>
                        <a href="<?php echo site_url('sale/sale'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Retail Sale
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('sale/searchSale'); ?>">
                            <i class="fa fa-angle-right"></i>
                            View All
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('sale/due'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Due List
                        </a>
                    </li>
                </ul>
            </li>

            <li id="cost_menu">
                <a href="#cost" data-toggle="collapse">
                    <i class="fa fa-money"></i>
                    &nbsp;Cost
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="cost" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('cost/cost'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Add New
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('cost/cost/showCost'); ?>">
                            <i class="fa fa-angle-right"></i>
                            View All
                        </a>
                    </li>
                </ul>
            </li>

            <li id="bank_menu">
                <a href="#bank" data-toggle="collapse">
                    <i class="fa fa-university"></i>
                    &nbsp;Bank
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="bank" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('bank/bankInfo'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Add Account
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('bank/bankInfo/all_account'); ?>">
                            <i class="fa fa-angle-right"></i>
                            All Account
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('bank/bankInfo/transaction'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Add Transaction
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('bank/bankInfo/allTransaction'); ?>">
                            <i class="fa fa-angle-right"></i>
                            All Transaction
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('bank/bankInfo/searchViewTransaction'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Search Trnasaction
                        </a>
                    </li>
                </ul>
            </li>

            <li id="salary_menu">
                <a href="#salary" data-toggle="collapse">
                    <i class="fa">৳</i> Salary
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="salary" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('salary/salary');?>">
                            <i class="fa fa-angle-right"></i>
                            Basic
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('salary/salary/incentive'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Incentive
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('salary/salary/bonus'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Bonus
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('salary/salary/deduction'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Deduction
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('salary/payment'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Payment
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('salary/payment/all_payment'); ?>">
                            <i class="fa fa-angle-right"></i>
                            All Payment
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('salary/salary/report'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Report
                        </a>
                    </li>
                </ul>
            </li>

            <li id="profite_menu">
                <a href="#profite" data-toggle="collapse">
                    <i class="fa fa-money"></i>&nbsp; 
                    Profit/loss
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="profite" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('profite/profite');?>">
                            <i class="fa fa-angle-right"></i>
                            Product
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('profite/profite/brand_wise'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Brand
                        </a>
                    </li>
                </ul>
            </li>

            <li id="sms_menu">
                <a href="#sms" data-toggle="collapse">
                    <i class="fa fa-envelope-o"></i>
                    &nbsp;SMS
                    <span class="icon"><i class="fa fa-sort-desc"></i></span>
                </a>

                <ul id="sms" class="sidebar-nav collapse">
                    <li>
                        <a href="<?php echo site_url('sms/sendSms');?>">
                            <i class="fa fa-angle-right"></i>
                            Send
                        </a>
                    </li>

                    <li>
                        <a href="<?php echo site_url('sms/sendSms/send_custom_sms'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Custom
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('sms/sendSms/sms_report'); ?>">
                            <i class="fa fa-angle-right"></i>
                            Report
                        </a>
                    </li>
                </ul>
            </li>

            <li id="backup_menu">
                <a href="<?php echo site_url('data_backup'); ?>">
                    <i class="fa fa-database"></i>
                    &nbsp;Data Backup
                </a>
            </li>
            

        </ul>
    </nav>
</aside>
<!-- /#sidebar-wrapper -->

