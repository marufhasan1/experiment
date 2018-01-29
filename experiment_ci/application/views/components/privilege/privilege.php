<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
    @media (min-width: 768px){
        .form-horizontal .control-label {
            text-align: left !important;
        }
    }
    .panal-header {
        background: rgb(240, 240,240);
    }
    .header .form-group {
        margin-bottom: 0;
        padding-left: 20px;
        float: left;
        width: 100%;
        margin-right: 5px;
    }
    .header .form-group label {
        position: relative;
        border: 1px solid rgb(240, 240, 240);
        display: block;
        width: 100%;
        padding-left: 15px;
        line-height: 34px;
        transition: all 0.3s ease-in-out;
    }
    .header .form-group label:hover {
        box-shadow: 1px 1px 2px 3px rgb(210, 210, 210);
    }
    .header .form-group label .action {
        position: absolute;
        top: 5px;
        right: 5px;
        visibility: hidden;
        transition: all 0.3s ease-in-out;
    }
    .header .form-group label:hover .action { visibility: visible;}
    .header .form-group label input[type=checkbox] {margin: 0 10px 0 0;}
    .header .form-group label input[type=text] {margin-top:5px;}
    .header .form-group label input.form-control {width:85% !important;}
</style>
<div class="container-fluid">
    <div class="row">
    <?php echo $confirmation;
     ?>
        <div class="panel panel-default">
             <!-- horizontal form -->
                <?php
                    $attr=array("class"=>"form");
                    echo form_open_multipart('', $attr);
                ?>

            <div class="panel-heading panal-header">
                <div class="panal-header-title">
                    <h2>All Privilege </h2>
                </div>
            </div>

            <div class="panel-body">
                <div class="row">
                    <div class="col-md-5 header">
                        <div class="panel panel-default">
                            <div class="panel-heading panal-header">
                                <div class="panal-header-title">
                                    <label class="control-label">
                                        <input type="checkbox">
                                        <span style="font-size: 20px;">Aside One</span>
                                    </label>
                                </div>
                            </div>

                            <div class="panel-body">
                                <div class="form-group">
                                    <label class="control-label">
                                      <input class="w3-check pull-left" type="checkbox" checked="checked">
                                      <input type="text" value="View" class="form-control">
                                        <span class="action btn-group">
                                            <a href="#" class="btn btn-danger">Delete</a>
                                            <a href="#" class="btn btn-info">Edit</a>
                                            <a href="#" class="btn btn-success">view</a>
                                        </span>
                                    </label>
                                    <label class="control-label">
                                      <input class="w3-check pull-left" type="checkbox" checked="checked">
                                      <input type="text" value="Edit" class="form-control">
                                        <span class="action btn-group">
                                            <a href="#" class="btn btn-danger"><input class="w3-check pull-left" type="checkbox" checked="checked">Delete</a>
                                            <a href="#" class="btn btn-info"><input class="w3-check pull-left" type="checkbox" checked="checked">Edit</a>
                                            <a href="#" class="btn btn-success"><input class="w3-check pull-left" type="checkbox" checked="checked">view</a>
                                        </span>
                                    </label>
                                    <label class="control-label">
                                      <input class="w3-check pull-left" type="checkbox" checked="checked">
                                      <input type="text" value="Delete" class="form-control">
                                        <span class="action btn-group">
                                            <a href="#" class="btn btn-danger">Delete</a>
                                            <a href="#" class="btn btn-info">Edit</a>
                                            <a href="#" class="btn btn-success">view</a>
                                        </span>
                                    </label>
                                    <label class="control-label">
                                      <input class="w3-check pull-left" type="checkbox" checked="checked">
                                      <input type="text" value="Main" class="form-control">
                                        <span class="action btn-group">
                                            <a href="#" class="btn btn-danger">Delete</a>
                                            <a href="#" class="btn btn-info">Edit</a>
                                            <a href="#" class="btn btn-success">view</a>
                                        </span>
                                    </label>
                                    <label class="control-label">
                                      <input class="w3-check pull-left" type="checkbox" checked="checked">
                                      <input type="text" value="Edit" class="form-control">
                                        <span class="action btn-group">
                                            <a href="#" class="btn btn-danger">Delete</a>
                                            <a href="#" class="btn btn-info">Edit</a>
                                            <a href="#" class="btn btn-success">view</a>
                                        </span>
                                    </label>
                                </div>
                            </div>
                            <div class="panel-footer">&nbsp;</div>
                        </div>
                    </div>
                </div>
                    
                <?php echo form_close(); ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>