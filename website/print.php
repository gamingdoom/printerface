<?php
    parse_str($_SERVER['QUERY_STRING']);
    if ($cancel == 1){
        exec("cancel -a");
        echo "Canceled.";
    }else{
        echo "Printing " . $file . "<br>" . "<input type='button' value='Cancel' onclick='location=\x22print.php?cancel=1\x22'>";// . "Using this command: cd /data/private/uploads/ && lp $file";
        $out = exec("cd /data/private/uploads/ && lp '$file'");
        echo $out;
    }
?>