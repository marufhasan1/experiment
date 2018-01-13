<div class="container-fluid">
    <div class="row">
    <?php echo $confirmation;
     ?>
        <div class="panel panel-default">

            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>নতুন যোগ করুন</h1>
                </div>
            </div>

            <div class="panel-body">
                <!-- horizontal form -->
                <?php
                    $attr=array("class"=>"form-horizontal");
                    echo form_open_multipart(site_url('employee/employee/edit_employee/'.$id), $attr);
                ?>
                    <input type="hidden" name="old_image" value="<?php echo "./".$emp_info[0]->image; ?>">

                    <div class="form-group">
                        <div class="col-md-7">
                            
                            <img class="pull-right" src="<?php echo site_url($emp_info[0]->image); ?>" width="100" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Name <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input type="text" name="name" value="<?php echo $emp_info[0]->name; ?>" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Father's Name <span class="req">&nbsp;</span></label>
                        <div class="col-md-5">
                            <input type="text" name="father_name" value="<?php echo $emp_info[0]->father_name; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Mother's Name <span class="req">&nbsp;</span></label>
                        <div class="col-md-5">
                            <input type="text" name="mother_name" value="<?php echo $emp_info[0]->mother_name; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Mobile Number <span class="req">&nbsp;</span></label>
                        <div class="col-md-5">
                            <input type="text" name="mobile" value="<?php echo $emp_info[0]->mobile; ?>" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Designation <span class="req">*</span></label>
                        <div class="col-md-5" >
                            <select name="designation" class="form-control" required >
                                <option value="">-- Select Designation --</option>
                                <?php foreach(config_item('designation') as $des_value){ ?>
                                <option <?php if($emp_info[0]->designation==$des_value){ echo "selected"; }; ?> value="<?php echo $des_value?>"><?php echo $des_value; ?></option>
                                <?php } ?>
                            </select>   
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Preasent Address <span class="req">&nbsp;</span></label>
                        <div class="col-md-5">
                            <textarea name="preasent_address" id="pre_addr" class="form-control" cols="30" rows="5"><?php echo $emp_info[0]->preasent_address; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Permanent Address <span class="req">&nbsp;</span></label>
                        <div class="col-md-5">
                            <input type="checkbox" id="permanent_address" value="0"> <label for="permanent_address">Same as Preasent Address</label>
                            <textarea name="permanent_address" id="per_addr" class="form-control" cols="30" rows="5"><?php echo $emp_info[0]->permanent_address; ?></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-2 control-label">Joining Date <span class="req">&nbsp;</span></label>
                        <div class="input-group date col-md-5" id="datetimepicker">
                            <input type="text" value="<?php echo $emp_info[0]->joining_date; ?>" name="joining_date" class="form-control" placeholder="YYYY-MM-DD">
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>
                    </div>
                    <script type="text/javascript">
                        $(document).ready(function(){
                              $('#datetimepicker').datetimepicker({
                                  format: 'YYYY-MM-DD'
                              });
                        });
                    </script>
                    <div class="form-group">
                        <label class="col-md-2 control-label">Image <span class="req">*</span></label>
                        <div class="col-md-5">
                            <input id="input-test" type="file" name="attachFile" class="form-control file" data-show-preview="false" data-show-upload="false" data-show-remove="false">
                        </div>
                    </div> 


                    <div class="col-md-7">
                        <div class="btn-group pull-right">
                            <input type="submit" name="update" value="Update" class="btn btn-success">
                        </div>
                    </div>
                    
                <?php echo form_close(); ?>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $("#permanent_address").on("click",function(){
            
            if ($(this).is(":checked")) {
                $("#per_addr").val($("#pre_addr").val());
            }
            else{
                $("#per_addr").val("");
            }
        });
    });
</script>