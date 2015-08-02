<?php
//ini_set('display_errors','off');


    $json = file_get_contents('php://input');
    $dataAry= json_decode($json,true);
    $taskNum = $dataAry["taskId"];
    switch($taskNum) {
        case 1:
            include 'getName.php';
            $response = getName();
            echo json_encode($response);
            break;

        case 2:
            require 'setName.php';
            $object1 = new setName;
            $ss = $object1->aMemberFunc($dataAry);
           echo  json_encode($ss);
            break;
        default:
            echo("Not a valid task");
    };


?>






















<?php /*address for debugging: D:\wampserver\www\site3\debug.txt
        function for debugging:     exec("echo $taskNum >> D:\wampserver\www\site3\debug.txt");

  */ ?>
