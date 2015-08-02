<?php
class setName{

    function aMemberFunc($dataAry2) {
        $tempFile = fopen('database.txt','w');
        $newName = $dataAry2["name"];
        fwrite($tempFile,$newName);
        //exec('echo setName >> D:\wampserver\www\site3\debug.txt');
        fclose($tempFile);
        $message = "Name has successfully set to: ".$newName;
        return $message;
    }
}


?>