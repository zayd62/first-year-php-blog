<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!-- helloworld.html
     A trivial document
     -->
<html xmlns="http://www.w3.org/1999/xhtml">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">


<head>
    <title> Zayd Patels blog</title>
</head>

<body style="background-color:#eff1f2">
    <div class="head">
        <img src="/media/images/logo.png" alt="image of logo" height="200" width="100%" style="margin:0;padding:0; background-color:#eff1f2">
    </div>

    <div class="col-container">
        <div class="col">
          <!-- within a div with class dark, the blog entry is stored -->
          <?php

          $host   =   "dbprojects.eecs.qmul.ac.uk"  ;
          $user   =   "zp302"  ;
          $pass   =   "gGsR2pROgtmV0"  ;
          $db   =   "zp302"  ;

          $link  =  mysql_connect ( $host ,  $user ,  $pass );
          if (! $link ) {
            die( 'Could not connect: '  .  mysql_error ());
          }

          $db_selected  =  mysql_select_db ( $db ,  $link );
            if (! $db_selected ) {
              die ( 'Can\'t use $db : '  .  mysql_error ());
            }

          mysql_query("USE blog", $link);
            //code to take txt entry and turn into blog here
                // $fileList = scandir(getcwd()); //array of all files in folder of current working directory
                // $fileList2 = scandir(getcwd()."/".$fileList[5],1);
                //
                //  print_r($fileList2);
                //  print_r($dotsremoved);



                $sql = "SELECT * FROM blog ORDER BY unxtime DESC";



                $result = mysql_query($sql, $link);



             // $row = mysql_fetch_assoc($result);


                 while ($row = mysql_fetch_assoc($result)) {
                  $fileToBeRender = fopen(__DIR__ . "/entry/" .$row['entryfilename'], "r");

                  $titleToRender = fgets($fileToBeRender);//first line from file is title
                  $dateToRender = date("l jS \of F Y \@ h:i:s A", $row['unxtime']);// time from database
                  $entryToRender = fgets($fileToBeRender);//second line from file is entry
                  fclose($fileToBeRender);

                  echo '<div class="dark">
                  <h2 class="blogTitle">'.$titleToRender.'</h2>
                  <p class="date">' .$dateToRender.'</p>
                  <p class="light">' .$entryToRender.' </p>
                  </div>';
                 }


                mysql_free_result($result);


            ?>
            
        </div>

        <div class="col2">
            <ul class="menu">
                <li>
                    <a href="viewBlog.php" class="menu">Home</a>
                </li>
                <li>
                    <a href="login.html" class="menu">Add entry</a>
                </li>
            </ul>
        </div>
    </div>

</body>

</html>
