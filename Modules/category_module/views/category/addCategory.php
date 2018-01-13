<div class="container-fluid">
    <div class="row">
	<?php echo $this->session->flashdata('confirmation'); ?>
        <div class="panel panel-default">

            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>নতুন ক্যাটাগরী</h1>
                </div>
            </div>

            <div class="panel-body">

                <?php $attr = array(
                    'class' =>'form-horizontal'
                    );
	            echo form_open('category/category/addCategory',$attr); ?>

                    <div class="form-group">
                        <label class="col-md-2 control-label">ক্যাটাগরীর নাম <span class="req">*</span></label>
                        
                        <div class="col-md-4">
                            <input type="text" name="category" placeholder="" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                            <div class="btn-group">
                                <input type="submit" value="যোগ করুন " name="catetory_submit" class="btn btn-primary">
                            </div>
                        </div>
                    </div>

                <?php echo form_close(); ?>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>

