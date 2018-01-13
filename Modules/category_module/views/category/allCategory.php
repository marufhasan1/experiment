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

<div class="container-fluid" ng-controller="showcategoryCtrl">
    <div class="row"> 
    <?php  echo $this->session->flashdata('confirmation'); ?>
    <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">সকল ক্যাটাগরী</h1>
                    <a class="btn btn-primery pull-right" style="font-size: 14px; margin-top: 0;" onclick="window.print()"><i class="fa fa-print"></i> প্রিন্ট</a>                </div>
            </div>

            <div class="panel-body">

                <div class="row hide">
                    <div class="view-profile">
                        <div class="col-xs-2">
                            <figure class="pull-left">
                              
                            </figure>
                        </div>

                        <div class="col-xs-8">
                            <div class="institute">
                                <h2 class="text-center title" style="margin-top: 10; font-weight: bold;">Avarest</h2>
                                <h3 class="text-center" style="margin: 0;">Mymensingh</h3>
                            </div>
                        </div>                                
                       
                    </div>
                </div>

                <hr class="hide" style="border-bottom: 1px solid #ccc;">
                <h3 class="text-center hide" style="margin-top: -10px;">সকল ক্যাটাগরি</h3>
                
                <div class="row none" style="margin-bottom:15px;">
                     <div class="col-md-4">
                         <input type="text" ng-model="search" placeholder="অনুসন্ধান করুন...." class="form-control">
                    </div>
                    <div class="col-md-5">&nbsp;</div>
                    <div class="col-md-3">
                        <div>
                             <span style="margin-left: 55px;line-height: 2.4;font-weight: bold;">প্রতি পেইজ&nbsp;:&nbsp;</span>
                             <select ng-model="perPage" class="form-control" style="width:92px;float:right;">
                             <option value="2">2</option>
                             <option value="3">3</option>
                             <option value="10">10</option>
                             <option value="20">20</option>
                             <option value="30">30</option>
                             <option value="50">50</option>
                             <option value="100">100</option>
                             </select>
                         </div>
                    </div>
                </div>


                <table class="table table-bordered">
                    <tr>
                        <th style="width: 50px;">ক্র.নং</th>
                        <th>তারিখ</th>
                        <th style="cursor:pointer;" ng-click="sortField='category'; reverse = !reverse;">ক্যাটাগরী &nbsp;<span><i class="fa fa-sort pull-right none" aria-hidden="true"></i></span></th>
                        <th class="none" style="width: 115px;">একশন</th>
                    </tr>                                         
                    <tr dir-paginate="category in categories|filter:search|itemsPerPage:perPage|orderBy:sortField:reverse">
                        <td>{{category.sl}}</td>
                        <td>{{category.datetime}}</td>
                        <td>{{category.category | textBeautify}}</td>
                        <td  class="none">
                            <a class="btn btn-warning" title="Edit" href="<?php echo site_url('category/category/editCategory/{{category.id}}');?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                            <a onclick="return confirm('Do you want to delete this Category?');" class="btn btn-danger" title="Delete" href="<?php echo site_url('category/category/deleteCategory/{{category.id}}');?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                        </td>
                    </tr>                                    
                </table>
                <dir-pagination-controls max-size="perPage" direction-links="true" boundary-links="true" class="none"></dir-pagination-controls>
            </div>
            <div class="panel-footer">&nbsp;</div>
        </div>       
    </div>
</div>

