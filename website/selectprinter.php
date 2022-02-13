<?php
        if (isset ($_POST["selectedprinter"])){
                $printer = $_POST["selectedprinter"];
                //echo $printer;
                //echo ("export PRINTER='$printer'");
                $out = exec("export PRINTER='$printer'");
                echo $out;
                echo "Set printer to $printer";
        }else{
                echo "There was an error (Not Post)";
        }
?>