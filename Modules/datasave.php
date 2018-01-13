<?php
        if ($this->input->post('save_data')) {
          $data=array(
            "client_name" => $this->input->post('client_name'),
            "designation" => $this->input->post('designation'),
            "company"     => $this->input->post('company'),
            "comment"     => $this->input->post('comments')
          );

          $msg_array = array(
              "title" => "Success",
              "emit"  => "Payment successfully taken",
              "btn"   => true
          );
          $this->data['confirmation'] = message($this->action->add('testimonial', $data), $msg_array);
        }