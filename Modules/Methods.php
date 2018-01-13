<?php

//Search query start here-----------------------------
        if(isset($_POST['viewQuery'])) {
            $where = array();
            if ($this->input->post('search')) {
              foreach ($this->input->post('search') as $key => $value) {
                  if($value != NULL){
                      $where[$key] = $value;
                  }
              }
            }


            foreach ($this->input->post('date') as $key => $value) {
                if($value != NULL){
                    if($key=="from"){
                      $where["date >="] = $value;
                    }
                    if($key=="to"){
                      $where["date <="] = $value;
                    }
                }
            }

            $this->data['transaction']=$this->action->read('member_transaction', $where);
        } 
//Search query end here-----------------------------


//Dynamic Update And Save start -------------------------------
<script type="text/javascript">
    
    $(document).ready(function(){
        $(document).on("change","#village",function(){
            var village=$(this).val();
            $.ajax({
                type: "POST",
                url: "<?php echo site_url('m_transaction/m_transaction/initial_ajax'); ?>",
                data: {
                    village:village
                }
            }).success(function(response){
                if (response!="Error"){
                    var data=JSON.parse(response);
                    $('input[name="send"]').val(parseInt(data.send));
                    $('input[name="receive"]').val(parseInt(data.receive));

                    $('input[type="submit"]').attr(
                        {
                            "value":"আপডেট",
                            "name":"update",
                            "class":"btn btn-success"
                        });
                }
                else{
                    $('input[name="send"]').val("");
                    $('input[name="receive"]').val("");

                    $('input[type="submit"]').attr(
                        {
                            "value":"সেইভ",
                            "name":"save",
                            "class":"btn btn-primary"
                        });
                }
            });
        });
    });
</script>
//Dynamic Update And Save end -------------------------------