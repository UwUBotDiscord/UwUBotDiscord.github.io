<?php
session_start();
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true) {
    echo "<h1><center>Welcome to the server file upload page, " . $_SESSION['username'] . "!</center></h1>";
    echo "<html>
<head>
    <meta charset='us-ascii'>
	<title>Server File upload</title>
	   <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.1/css/all.css'>
<style>
.formholder{ 
    text-align: center;
}

input[type=button], input[type=submit], input[type=reset] {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  margin: 4px 2px;
  cursor: pointer;
}

//input[type='file'] {
//    display: none;
//}

.custom-file-upload {
    border: 1px solid #ccc;
    display: inline-block;
    padding: 6px 12px;
    cursor: pointer;
}
</style>
</head>
<body>
<div class='formholder'>
<form action='http://uwubot.org/server/main/logout.php'>
    <input type='submit' value='Logout' />
</form>
<!-- <label for='file-upload' class='custom-file-upload'>
    <i class='fa fa-cloud-upload'></i> Custom Upload
</label> -->
<form id='file-upload' action='uploader.php' enctype='multipart/form-data' method='post'>Select File: <input name='fileToUpload' type='file' /> <input name='submit' type='submit' value='Upload File to server' /></form>
</div>
</body>
</html>";
} else {
    echo "<h1><center> Please log in first to see this page. </center></h1>";
    echo "<h2><center> Redirecting to login page in 5 seconds... </center></h2>";
    echo "<h2><center> If redirect does not occur in 5 seconds, Heres a manual <a href='http://uwubot.org/server/'>Link</a>. </center></h2>";
    echo "<meta http-equiv='refresh' content='5;url=http://uwubot.org/server/'>";
}?>