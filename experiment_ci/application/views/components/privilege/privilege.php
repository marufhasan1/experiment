<div class="container-fluid">
    <div class="row">
    <?php echo $confirmation;
     ?>
        <div class="panel panel-default">
             <!-- horizontal form -->
                <?php
                    $attr=array("class"=>"form-horizontal");
                    echo form_open_multipart('', $attr);
                ?>

            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <div class="form-group">
                        <label class="col-md-2 control-label"><input type="checkbox"> <h2>Privilege</h2> </label>
                    </div>
                </div>
            </div>

            <div class="panel-body">
                    <div class="form-group">
                        <label class="col-md-2 control-label"><input type="chackbox"> Privilege </label>
                    </div>


                    
                <?php echo form_close(); ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>