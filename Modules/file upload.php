<?php
                    //Uploading dme_attachment
                    if ($_FILES["dme_attachment"]["name"]!=null && $_FILES["dme_attachment"]["name"]!="" ) {

                        $config['upload_path'] = './public/upload/member';
                        $config['allowed_types'] = 'png|jpeg|jpg|gif';
                        $config['max_size'] = '4096';
                        $config['max_width'] = '4000'; /* max width of the image file */
                        $config['max_height'] = '4000';
                        $config['file_name'] =str_shuffle("dme_attachment".rand(100000,999999));
                        $config['overwrite']=true;

                        $this->upload->initialize($config);
                        if ($this->upload->do_upload("dme_attachment")){

                            if(is_file("./".$this->input->post("old_photo"))){
                                unlink("./".$this->input->post("old_photo"));
                            }

                            $upload_data = $this->upload->data();
                            $data["dme_attachment"]="public/upload/member/".$upload_data['file_name'];
                        }
                    }