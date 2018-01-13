<style>
    @media print{
        aside{
            display: none !important;
        }
        nav{
            display: none;
        }
        .panel{
            border: 1px solid transparent;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 100%;
        }
        .none{
            display: none;
        }
        .panel-heading{
            display: none;
        }
        
        .panel-footer{
            display: none;
        }
        .panel .hide{
            display: block !important;
        }
        .title{
            font-size: 25px;
        }
    }
</style>

<div class="container-fluid">
    <div class="row">
    <?php //echo "<pre>"; print_r($info); echo "</pre>"; ?>
    <?php echo $confirmation; ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title ">
                    <h1 class="pull-left">All Employees</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>


            <div class="panel-body">

                <div class="row hide">
                    <div class="view-profile">
                        <div class="col-xs-2">
                            <figure class="pull-left">
                                <img class="img-responsive" src="<?php echo site_url('public/logo/logo.png'); ?>" style="width: 100px; height: 100px;" alt="">
                            </figure>
                        </div>

                        <div class="col-xs-8">
                            <div class="institute">
                            	<?php 
                            		$title=config_item('header');
                            		$title= $title['title'];
                            		$place=config_item('header');
                            		$place=$place['place'];
                            	?>
                                <h2 class="text-center title" style="margin-top: 10; font-weight: bold;"><?php echo $title; ?></h2>
                                <h3 class="text-center" style="margin: 0;"><?php echo $place; ?></h3>
                            </div>
                        </div>
                                
                        <!--div class="col-xs-2">
                            <figure class="pull-right">
                                <img class="img-responsive" src="<?php echo site_url($member_info[0]->member_photo); ?>" style="width: 100px; height: 100px;" alt="Photo not found!" class="img-responsive">
                            </figure>
                        </div-->
                    </div>
                </div>

                <hr class="hide" style="border-bottom: 1px solid #ccc;">
                <h4 class="hide text-center" style="margin: -10px 0 20px 0;">সকল  কর্মকর্তা ও কর্মচারী </h4>
                
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Father's Name</th>
                        <th>Mother's Name</th>
                        <th>Mobile</th>
                        <th>Designation</th>
                        <th>Joining Date</th>
                        <th class="none">Action</th>
                    </tr>
                    <?php foreach ($employees as $emp_key => $emp_info) { ?>
                    <tr>
                        <td> <?php echo $emp_key+1; ?> </td>
                        <td> <img src="<?php echo base_url($emp_info->image); ?>" width="80px" height="80px" alt=""></td>
                        <td> <?php echo $emp_info->name; ?> </td>
                        <td> <?php echo $emp_info->father_name;?> </td>
                        <td> <?php echo $emp_info->mother_name;?> </td>
                        <td> <?php echo $emp_info->mobile;?> </td>
                        <td> <?php echo $emp_info->designation?> </td>
                        <td> <?php echo $emp_info->joining_date?> </td>
                        <td class="none" style="width: 160px;">
                            <a class="btn btn-primary" href="<?php echo site_url('employee/employee/profile/'.$emp_info->id);?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            <a class="btn btn-warning" href="<?php echo site_url('employee/employee/edit_employee/'.$emp_info->id) ;?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a class="btn btn-danger" onclick="return confirm('Are you sure to delete this data?');" href="?delete_token=<?php echo $emp_info->id; ?>&img_url=<?php echo $emp_info->image; ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </table>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

