<?php

$token = '0e215962017';
$md5_token = md5($token);
$comparison1 = ($token == 0); // True
$comparison2 = ($md5_token == 0); // True
echo $md5_token; // Outputs: 0e165465178879320403036323088082
var_dump($comparison1, $comparison2); // Outputs: bool(true) bool(true)


?>