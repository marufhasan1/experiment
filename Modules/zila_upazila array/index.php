<?php

    //Generating zila upazila array Start here

    public function test(){
        $districts = $this->action->read("districts");
            echo '<meta charset="utf8" content="content">';
            echo '<table border="1">';
            $final_array = array();
        foreach ($districts as $dvalue) {
            $where = array(
                'district_id' => $dvalue->id
            );
            $upazilas = $this->action->read("upazilas",$where);
            $upazila_name = array();
            foreach ($upazilas as $uvalue) {
                $upazila_name[] = '"'.$uvalue->bn_name.'"';
            }
            echo "<tr>";
                echo "<td>". $dvalue->bn_name. "</td>";
                echo "<td>";
                echo "<textarea>";
                echo "array(".implode(", ",$upazila_name).")";
                echo "</textarea>";
                echo "</td>";
            echo "</tr>";
            $final_array[$dvalue->bn_name]="array(".implode(", ",$upazila_name).")";
        }
            echo "</table>";
            echo '<textarea rows="50" cols="150">';
                echo "array(\n";
            foreach ($final_array as $zila => $upazilas) {
                    echo "\"".$zila."\"=>".$upazilas.",\n";
            }
                echo ")";
            echo "</textarea>";
        
    }
    //Generating zila upazila array Start here