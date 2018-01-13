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
            font-size:  25px;
        }
    }
</style>

<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default">

            <div class="panel-heading panal-header">
                <div class="panal-header-title">
                    <h1 class="pull-left">Profile</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> Print</a>
                </div>
            </div>

            <div class="panel-body">
               
                <div class="row">

                    <div class="view-profile">
                        <div class="col-xs-2">
                            <figure class="pull-left">
                                <img class="img-responsive" src="<?php echo site_url('public/logo/logo.png'); ?>" style="width: 100px; height: 100px;" alt="">
                            </figure>
                        </div>
                            	<?php 
                            		$title=config_item('header');
                            		$title= $title['title'];
                            		$place=config_item('header');
                            		$place=$place['place'];
                            	?>

                        <div class="col-xs-8">
                            <div class="institute">
                                <h2 class="text-center title" style="margin-top: 10; font-weight: bold;"><?php echo $title; ?></h2>
                                <h3 class="text-center" style="margin: 0;"><?php echo $place; ?></h3>
                            </div>
                        </div>
                                
                        <div class="col-xs-2">
                            <figure class="pull-right">
                                <img class="img-responsive" src="<?php echo site_url($emp_info[0]->image); ?>" style="width: 100px; height: 100px;" alt="Photo not found!" class="img-responsive">
                            </figure>
                        </div>

                    </div>

                </div>

                <hr style="border-bottom: 1px solid #ccc;">
                <h4 class="hide text-center" style="margin: -10px 0 20px 0;">সদস্য ইনফর্মেশন</h4>

                <div class="row">
            
                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Name</label>
                        <div class="col-xs-6">
                            <p><?php echo $emp_info[0]->name; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Father's Name</label>
                        <div class="col-xs-6">
                            <p><?php echo $emp_info[0]->father_name; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Mother's Name</label>
                        <div class="col-xs-6">
                            <p><?php echo $emp_info[0]->mother_name; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Designation</label>
                        <div class="col-xs-6">
                            <p><?php echo $emp_info[0]->designation; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Preasent Address</label>
                        <div class="col-xs-6">
                            <p><?php echo $emp_info[0]->preasent_address; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Permanent Address </label>
                        <div class="col-xs-6">
                            <p><?php echo $emp_info[0]->permanent_address; ?></p>
                        </div>
                    </div>

                    <div class="col-md-6 no-padding">
                        <label class="control-label col-xs-6">Joining Date</label>
                        <div class="col-xs-6">
                            <p><?php echo $emp_info[0]->joining_date; ?></p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

