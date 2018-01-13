    <?php
	
	public function delete($id){
        $where = array("id" => $id);

        $msg_array=array(
            "title"=>"Deleted",
            "emit"=>"Order Successfully Deleted",
            "btn"=>true
        );

        $confirmation = message($this->action->deleteData("order", $where), $msg_array);
        $this->session->set_flashdata('confirmation', $confirmation);
        redirect('order/order/all','refresh');
    }