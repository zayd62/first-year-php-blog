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

  $host   =   "dbprojects.eecs.qmul.ac.uk"  ;
  $user   =   "zp302"  ;
  $pass   =   "gGsR2pROgtmV0"  ;
  $db   =   "zp302"  ;

  $link  =  mysql_connect ( $host ,  $user ,  $pass );
  if (! $link ) {
    die( 'Could not connect: '  .  mysql_error ());
  }

  echo 'connected successfully';

  $db_selected  =  mysql_select_db ( $db ,  $link );
    if (! $db_selected ) {
      die ( 'Can\'t use $db : '  .  mysql_error ());
    }

    mysql_query($link, "USE blog");







  $currentUnixTimeStamp = time(); //get the time and returns it as a unix time stamp
  $submissionDate =  date("l jS \of F Y \@ h:i:s A", $currentUnixTimeStamp); //prints timestamp in readable english
  //submission date in database along with filename
  $filename = $currentUnixTimeStamp.".txt";
  $currentUnixTimeStamp = (int)$currentUnixTimeStamp;






  $entry = fopen(__DIR__ . "/entry/" .$currentUnixTimeStamp.".txt" ,"w"); //create txtfile where blog entry is stored in entry and filename is timestamp
  fwrite($entry, $_POST["title"]."\n");//from form, title is written
  fwrite($entry, $_POST["blogEntry"]."\n");//from form, blogEntry is written
  $sql="INSERT INTO blog(unxtime, entryfilename) VALUES ('$currentUnixTimeStamp', '$filename');";
  fclose($entry);//close file

  if (mysql_query($sql) === false) {
    echo "Error: " . $sql . "<br>";

    }

  mysql_close ( $link );
  echo '<script> window.location.href = "viewBlog.php";</script>';




?>
</body>

</html>
