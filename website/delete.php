<?php
    parse_str($_SERVER['QUERY_STRING']);
    if ($yes == 1){
        echo "Deleting $file ...";
        $out = exec("rm '/data/private/uploads/$file'");
        echo " Done";
    }else{
        echo "Are you sure that you would like to delete $file?". "<br>" . "<input type='button' value='Yes' onclick='location=\x22delete.php?yes=1&file=$file\x22'>" . "<input type='button' value='No' onclick='location=\x22about:blank\x22'>";
    }
?>