<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- helloworld.html
     A trivial document
     -->
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">


<head>
    <title> Log in </title>
</head>

<body style="position:fixed; top:0px; left:0px;bottom:0px; right:0px;  margin:0px; background-color:#eff1f2">

<?php
  echo "test";
  $fileList = scandir(getcwd()); //array of all files in folder of current working directory
  $fileList2 = scandir(getcwd()."/".$fileList[5]);


  if (sizeof($fileList2) == 2) {
    echo '<script> window.location.href = "login.html";</script>';
  } else {
    echo '<script> window.location.href = "viewBlog.php";</script>';
  }


?>
</body>

</html>
