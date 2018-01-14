<div class="container-fluid">
    <div class="row">
    <?php
    echo $confirmation;
    echo $this->session->flashdata("confirmation");
    ?>
        <?php /*
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="panal-header-title">
                    <h1 class="pull-left">Filter</h1>
                </div>
            </div>

            <div class="panel-body none">
                <?php
                $attr = array('class' => 'form-horizontal');
                echo form_open('', $attr);
                ?>

                <div class="form-group">
                    <label class="col-md-2 control-label"> Field Officer </label>
                    <div class="col-md-5">
                        <select name="name" class="form-control">
                            <option value="" selected disabled>&nbsp;</option>
                            <?php
                                foreach ($fo as $row) {
                            ?>
                            <option value="<?php echo $row->name; ?>"><?php echo $row->name; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-7">
                        <input type="submit" name="show" value="Show" class="btn btn-primary pull-right">
                    </div>
                </div>
                <?php echo form_close(); ?>
            </div>

            <div class="panel-footer">&nbsp;</div>
        </div> */?>

        <?php if($orders != null){?>
        <div class="panel panel-default">

            <div class="panel-heading panal-header">
                <div class="panal-header-title pull-left">
                    <h1>All Order</h1>
                </div>
            </div>

            <div class="panel-body">

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <tr>
                            <th width="40px">SL</th>
                            <th>Name</th>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Amount</th>
                            <th>Mobile</th>
                            <th>Delivary Date</th>
                            <th>Order By</th>
                            <th width="130">Status</th>
                            <th class="none" width="160px">Action</th>
                        </tr>
                        <?php foreach ($orders as $key => $value) { ?>

                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $value->name; ?></td>
                            <td><?php echo $value->products; ?></td>
                            <td><?php echo $value->price; ?></td>
                            <td><?php echo $value->amount; ?></td>
                            <td><?php echo $value->mobile_number; ?></td>
                            <td><?php echo $value->delivary_date; ?></td>
                            <td><?php echo $value->order_by; ?></td>
                            <td>
                                <!--select class="status form-control" data-id="<?php echo $value->id; ?>">
                                    <option <?php selected($value->status,"pending"); ?> value="pending">Pending</option>
                                    <option <?php selected($value->status,"complete"); ?> value="complete">Complete</option>
                                </select-->
                                <?php echo filter($value->status); ?>
                            </td>
                            <td class="none">
                                <a class="btn btn-primary" title="View" href="<?php echo site_url("panel/order/view/".$value->id); ?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                <a class="btn btn-warning" title="Edit" href="<?php echo site_url("panel/order/edit/".$value->id); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                <a class="btn btn-danger" title="Delete" onclick="return confirm('Are you sure to delete this data?');" href="<?php echo site_url("panel/order/delete/".$value->id); ?>"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>

            </div>

            <div class="panel-footer">&nbsp;</div>
        </div>
        <?php } ?>
    </div>
</div>
<script>
    $(".status").on('change',  function(event) {
        var status = $(this).val();
        var id = $(this).data("id");
        $.ajax({
            url: '<?php echo site_url("order/order/ajax_change_status"); ?>',
            type: 'POST',
            data: {status: status, id: id},
        })
        .done(function(response) {
            if(response=="success"){
                alert("Status Changed Successfully..!");
            }
        });
    });

</script>
