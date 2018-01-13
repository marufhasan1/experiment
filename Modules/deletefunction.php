<?php
    public function delete($id=NULL){

        $info=$this->action->read('slider',array('id'=>$id));
        if($info != NULL){
            unlink($info[0]->path);
        }
        $options= array(
            'title' => 'delete',
            'emit'  => 'Successfully Deleted!',
            'btn'   => true
        );

       $this->data['confirmation']=message($this->action->deletedata('slider', array('id' => $id)), $options);
       $this->session->set_flashdata("confirmation",$this->data['confirmation']);
       redirect("slider/slider/show","refresh");
    }