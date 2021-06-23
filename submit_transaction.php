<?php

    $saveData = json_encode($_POST);  

    $savefile = fopen("save.txt", "w") or die("Unable to open file!");
    fwrite($savefile, $saveData);
    fclose($savefile);
    


    $myfile = fopen("Data.txt", "r") or die("Unable to open file!");
    $json = fread($myfile, filesize("Data.txt"));
    fclose($myfile);

    $RegInfo = json_decode($json, true);

    array_push($RegInfo, $_POST);

    $json = json_encode($RegInfo);  

    $myfile = fopen("Data.txt", "w") or die("Unable to open file!");
    fwrite($myfile, $json);
    fclose($myfile);
    
?>