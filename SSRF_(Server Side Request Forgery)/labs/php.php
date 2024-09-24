<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

$flag = shell_exec("/readflag");

if(isset($_GET['action']) && isset($_GET['p'])) {
    $action = $_REQUEST['action'];
    $p = $_REQUEST['p'];

    if($p == 'flag') {
        die("p contains an illegal value");
    }
    
    if($action == 'flag') {
        die("action contains an illegal value");
    }
    
    if($_SERVER['CONTENT_TYPE'] != 'application/x-www-form-urlencoded' && strpos($_SERVER['CONTENT_TYPE'], "multipart") !== 0) {
        if(isset($_REQUEST['token']) && $_REQUEST['token'] == 0 && md5($_REQUEST['token']) == 'cfcd208495d565ef66e7dff9f98764da') {
            echo compact($action)[trim($p)];
        }
        else {
            echo "Almost there";
        }
    }
}

?>
