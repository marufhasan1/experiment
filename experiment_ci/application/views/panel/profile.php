<style>
    .message{
        border: 1px solid #ddd;
        border-radius: 10px;
        display: none;
        background: #E99126;
        color: #fff;
        padding: 15px;
        margin-top: 15px;
        text-align: center;
    }
</style>
<div class="container-fluid">
    <div class="row">   
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title pull-left">
                    <h1>Client  Profile</h1>                    
                </div>
            </div>

            <div class="panel-body no-padding">

                <h3 style="padding: 0 15px; margin: 15px 0;">
                    Profile : <strong><?php echo $profile_info[0]->name; ?></strong>
                </h3>
                <br>           

                <!-- left side -->
                <aside class="col-md-3">
                    <div class="border-top">&nbsp;</div>
                    <figure class="profile-pic">
                        <img style="margin-bottom: 0;" src="<?php echo site_url($profile_info[0]->photo)?>" alt="Photo not found!" class="img-responsive img-thumbnail" style="width: 100%;">
                    </figure>
                    <br>
                </aside>


                <div class="col-md-9">

                      <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Profile </a></li>
                    </ul>

                  <!-- Tab panes -->

                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="profile">
                            <div class="col-xs-12 profile-title no-padding">
                                <div class="col-xs-6">
                                    <h3 class="pull-left" style="margin-bottom: 20px;">
                                    <i class="glyphicon glyphicon-user" style="font-size: 30px;"></i> &nbsp; 
                                    About
                                    </h3>
                                </div>                              
                            </div>                    




                            <div class="row">
                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label col-xs-5">Name</label>
                                    <div class="col-xs-7">
                                        <p><?php echo $profile_info[0]->name; ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label col-xs-5">Username </label>
                                    <div class="col-xs-7">
                                        <p><?php echo $profile_info[0]->username; ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label col-xs-5">Email</label>
                                    <div class="col-xs-7">
                                        <p><?php echo $profile_info[0]->email; ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label col-xs-5">Mobile Number</label>
                                    <div class="col-xs-7">
                                        <p><?php echo $profile_info[0]->contact; ?></p>
                                    </div>
                                </div>
                                
                                 <div class="col-sm-6 col-xs-12">
                                    <label class="control-label col-xs-5">Privilege</label>
                                    <div class="col-xs-7">
                                        <p><?php echo "Client"; ?></p>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xs-12">
                                    <label class="control-label col-xs-5">Showroom</label>
                                    <div class="col-xs-7">
                                        <p>
                                          <?php
                                            $info = $this->retrieve->read("showroom",array("showroom_id" => $profile_info[0]->showroom_id));
                                          if($info)   echo  filter($info[0]->name); ?>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                     </div>
                  </div>
               </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
    </div>
</div>