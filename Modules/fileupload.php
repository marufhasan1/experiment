<?php 
                    if ($_FILES["attachFile"]["name"]!=null or $_FILES["attachFile"]["name"]!="" ) {

                        $config['upload_path'] = './public/employee';
                        $config['allowed_types'] = 'png|jpeg|jpg|gif';
                        $config['max_size'] = '4096';
                        $config['max_width'] = '3000'; /* max width of the image file */
                        $config['max_height'] = '3000';
                        $config['file_name'] =str_shuffle("employee_".rand(100000,999999)); 
                        $config['overwrite']=true;   
                        
                        $this->upload->initialize($config);
                        
                        if ($this->upload->do_upload("attachFile")){
                            $upload_data = $this->upload->data();
                            
                            $data_emp["image"]="public/employee/".$upload_data['file_name'];


                        } else {
                            $msg_array=array(
                                "title" => "Error",
                                "emit"  => $this->upload->display_errors(),
                                "btn"   => true
                            );
                            $this->data['confirmation'] = message("warning", $msg_array);
                        }

                    }