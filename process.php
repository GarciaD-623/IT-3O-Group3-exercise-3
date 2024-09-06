<?php

$comment = $_POST["comment"];  //$_POST contains an array of variables received via the HTTP POST method.
$file = "log.tt";  //declaring variable, $file as "log.tt" file.


//this put contents to the file
file_put_contents($file, $comment);

//returns to main page.
header('location: http://localhost:8889/exercise%202/folder%203/main.php')

?>
