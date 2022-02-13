<?php
if(isset($_POST["submit"]))
{

  $target_dir = "/data/private/uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;

  $fileMimeType = mime_content_type($_FILES["fileToUpload"]["tmp_name"]);
  $getAcceptableMimeTypes = exec("grep -h '^[^#]' /usr/share/cups/mime/*.convs | sort | awk '{print $1}' | uniq" , $acceptableMimeTypes);

  if(in_array($fileMimeType, $acceptableMimeTypes) == false) {
    echo "Sorry, this file is not supported. Only these mime types are supported:" . "<br>";
    foreach ($acceptableMimeTypes as $key=>$item){
      echo "$key => $item <br>";
    }
    echo "To find out what mime type your file has, go " . "<a href='https://www.iana.org/assignments/media-types/media-types.xhtml'>here</a>" . ".";
    $uploadOk = 0;
  } 

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
      echo " Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " is being uploaded.";
      } else {
        echo " Sorry, there was an error uploading your file.";
      }
    }
}else{
  echo "Not post ERROR";
}
?>