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
    <h1 class="header" style="text-align: center">Log in to start blogging</h1>

    <div style="margin-right:3%;margin-top:1%" >
        <form action="login.php" method="post" class="login">
            <table class="login">
                <tr>
                    <td>
                        <p class="light">Username</p>
                    </td>
                    <td>
                        <input type="text" name="uname" id="uname" class="uname">
                    </td>
                </tr>
                <tr>
                    <td>
                        <p class="light">Password</p>
                    </td>
                    <td>
                        <input type="password" name="password" id="password" class="uname">
                    </td>
                </tr>
            
            </table>
            <input type="submit" value="Submit" class="button" style="margin:auto;display:block;">

        </form>
    </div>

<?php 
$uname = "zayd";
$pass = "zayd";
  if ( strcmp($_POST["uname"], $uname) == 0 && strcmp($_POST["password"], $pass) == 0 ) {
    echo '<script> window.location.href = "addentry.html";</script>';
  } else {
    echo '<p class="light" style="text-align:center;color:#f44336;font-weight: 525;">Username or password incorrect</p>';
  }
?>
</body>

</html>