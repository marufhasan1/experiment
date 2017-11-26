<?php

$mbox = imap_open ("{imap.gmail.com:993/imap/ssl}INBOX", "xxxxxxxxx@gmail.com", "xxxxxxxxxxxxxx");

/*echo "<h1>Mailboxes</h1>\n";
$folders = imap_listmailbox($mbox, "{imap.gmail.com:143}", "*");

if ($folders == false) {
    echo "Call failed<br />\n";
} else {
    foreach ($folders as $val) {
        echo $val . "<br />\n";
    }
}*/
/*
echo "<h1>Headers in INBOX</h1>\n";
$headers = imap_headers($mbox);

if ($headers == false) {
    echo "Call failed<br />\n";
} else {
    foreach ($headers as $val) {
        echo $val . "<br />\n";
    }
}*/


/*
IMAP qprint*/
if($mbox) {
   
     //Check no.of.msgs
     $num = imap_num_msg($mbox);
     echo "<hr>";
     echo "Num is:". $num;
     echo "<hr>";

     //if there is a message in your inbox
     if( $num >0 ) {
          //read that mail recently arrived
          //echo imap_qprint(imap_body($mbox, $num));
     		$body = imap_body($mbox, $num);
     		$body1 = quoted_printable_decode($body);
     		echo $body1;

     }

     //close the stream
     imap_close($mbox);
} 



//imap_close($mbox);