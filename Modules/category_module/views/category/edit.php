<div class="container-fluid">
    <div class="row">
     <?php  echo $this->session->flashdata('confirmation'); ?>
        <div class="panel panel-default">
            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                   <h1>পরিবর্তন করুন</h1>
                </div>
            </div>

            <div class="panel-body">
                <!-- category form start -->
                <?php  $attr=array('class'=>"form-horizontal");?>
                <?php  echo form_open('category/category/edit/'.$category[0]->id,$attr);?>
                    <div class="form-group row">
                        <label class="col-md-2 control-label">ক্যাটাগরী <span class="req">&nbsp;*</span></label>
                        <div class="col-md-5">
                            <input type="text" name="category"  required value="<?php echo str_replace('_',' ',$category[0]->category);?>" class="form-control">
                        </div>

                        <div class="col-md-2">
                            <div class="btn-group">
                                <input type="submit" value="আপডেট" class="btn btn-primary">
                            </div>
                        </div>
                    </div>
               <?php  echo form_close();?>
                <!-- category form end -->
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

