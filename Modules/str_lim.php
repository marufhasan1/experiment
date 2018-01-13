<?php
function str_lim($string,$amount){
        $strings=explode(" ", $string);

        if(count($strings)<=$amount)
		{
            return $string;
        }
        else
		{
            $out_string=array();
            for ($i=0; $i<$amount; $i++) { 
                $out_string[]=$strings[$i];
            }
            $final=implode(" ",$out_string);
               return($final);
        }
}