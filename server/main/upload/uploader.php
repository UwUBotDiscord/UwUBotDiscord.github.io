

<?php
$target_dir = "/home4/uwubotor/public_html/server/main/upload/uploaded/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
//if(isset($_POST["submit"])) {
//  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//  if($check !== false) {
//    echo "File is an image - " . $check["mime"] . ".";
//    $uploadOk = 1;
//  } else {
//    echo "File is not an image.";
//    $uploadOk = 0;
//  }
//}

// Check if file already exists
if (file_exists($target_file)) {
  echo "<h1><center>Sorry, the file already exists on the server, please try again!</center></h1>";
  $uploadOk = 0;
}

// Check file size
//if ($_FILES["fileToUpload"]["size"] > 500000) {
//  echo "<h1><center>Sorry, your file is to large to upload to the server, please try again!</center></h1>";
//  $uploadOk = 0;
//}

// Allow certain file formats
//if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
//&& $imageFileType != "gif" ) {
  //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  //$uploadOk = 0;
//}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<h1><center>Sorry, the file not uploaded to server, please try again!</center></h1>";
    echo "<h2><center> Redirecting to main page in 5 seconds... </center></h2>";
    echo "<h2><center> If redirect does not occur in 5 seconds, Heres a manual <a href='http://uwubot.org/server/main/upload/'>Link</a>. </center></h2>";
    echo "<meta http-equiv='refresh' content='5;url=http://uwubot.org/server/main/upload/'>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<h1><center> File uploaded to server successfully! </center></h1>";
    echo "<h2><center> Redirecting to main page in 5 seconds... </center></h2>";
    echo "<h2><center> If redirect does not occur in 5 seconds, Heres a manual <a href='http://uwubot.org/server/main/upload/'>Link</a>. </center></h2>";
    echo "<meta http-equiv='refresh' content='5;url=http://uwubot.org/server/main/upload/'>";
    echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
  } else {
    echo "<h1><center>Sorry, there was an error uploading the file to the server, please try again!</center></h1>";
    echo "<h2><center> Redirecting to main page in 5 seconds... </center></h2>";
    echo "<h2><center> If redirect does not occur in 5 seconds, Heres a manual <a href='http://uwubot.org/server/main/upload/'>Link</a>. </center></h2>";
    echo "<meta http-equiv='refresh' content='5;url=http://uwubot.org/server/main/upload/'>";
  }
}
?>