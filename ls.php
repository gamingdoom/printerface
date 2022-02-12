<?php
    $directory = "/data/private/uploads/";
    if (is_dir($directory)){
        if ($opendirectory = opendir($directory)){
        while (($file = readdir($opendirectory)) !== false){
            if ($file == "." || $file == ".."){
            }else{
                echo "<a href='print.php?file=$file' target='printingframe'>" . $file . "</a>" . " | " . "<a href='delete.php?file=$file' target='printingframe'> delete </a>" ."<br>";
            }
        }
        closedir($opendirectory);
        }
    }
?>