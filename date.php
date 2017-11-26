<?php
date_default_timezone_set ( "Asia/dhaka" );
$d = new DateTime("+6 hours");
echo $d->format("Y-m-d h:i:s a");