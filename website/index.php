<html>
    <title>Printerface</title>
    <head>
        <link rel="icon" href="https://raw.githubusercontent.com/PapirusDevelopmentTeam/papirus-icon-theme/master/Papirus/64x64/devices/printer.svg">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
        <link rel="stylesheet" href="style.css">
        <h1 style="text-align: center; font-family: 'Courier New', Courier, monospace;">Printerface</h1> 
    </head>
    <body>
        <div class="drag-area" style="text-align: justify; display: flex;">
            <div class="icon" id="icon"><i class="fas fa-cloud-upload-alt"></i></div>
            <div class="bbtn">
                <form action="upload.php" method="post" enctype="multipart/form-data" target="upframe" id="upfile">
                    <input type="file" name="fileToUpload" id="fileToUpload" class="bbtn" style="text-align: center; margin: 0 auto;">
                    <script src="upload.js"></script>
                    <input type="submit" value="Upload File" name="submit" style="height: 35; width: 100px;">
                  </form>
            </div>
        </div>
        <div class="iframediv" style="display: flex;align-items: center; justify-content: center;"><iframe name="upframe" id="upframe" style="display: flex; align-items: center; justify-content: center; padding-right: 20px; border: 0px; height: 60;"></iframe></div>
        <h2>Files (Click)</h2>
        <div class="iframediv" style="display: flex;align-items: center; justify-content: center;"><iframe src="ls.php" name="lsframe" id="lsframe" style="display: flex; align-items: center; justify-content: center; padding-right: 20px; border: 0px; width: 400px;"></iframe></div>
        <script>
            window.setInterval("reloadIFrame();", 3000);
           
            function reloadIFrame() {
             window.frames["lsframe"].location.reload();
            }
        </script> 
        <div class="iframediv" style="display: flex;align-items: center; justify-content: center;"><iframe name="printingframe" id="printingframe" style="display: flex; align-items: center; justify-content: center; padding-right: 20px; border: 0px;"></iframe></div>
        <h2>Printers (Click to Select):</h2>
            <form action="selectprinter.php" method="post" enctype="multipart/form-data" target="selframe">
            <h4><?php
                    $printers = exec("lpstat -a | cut -f1 -d ' '");
                    $printerarr = preg_split("/\r\n|\n|\r/", $printers);
                    foreach ($printerarr as $key=>$value){
                        //echo "<script>console.log('$value');</script>";
                        echo "<input type='radio' id='$value' name='selectedprinter' value='$value'>";
                        echo "<label for='$value'>$value</label>";
                    }
            ?></h4>
                <input type="submit" value="Select"> 
            </form>
        <div class="iframediv" style="display: flex; align-items: center; justify-content: center;"><iframe name="selframe" id="selframe" style="display: flex; align-items: center; justify-content: center; padding-right: 20px; border: 0px; height: 60;"></iframe></div>
    </body>
</html>
