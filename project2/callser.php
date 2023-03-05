<?php     

    include('connection.php');  
    $db = mysqli_connect('localhost', 'root' , '', 'javatpoint');

    $assetid = "";
    $assetdt   = "";
    $catg = "";
    $make = "";
    $made = "";
    $srno = "";
    $descp = "";
    $empid = "";
    $loc = "";
    $section = "";
    $stat = "";

    if (isset($_POST['submit']))

   
{
    $empid = mysqli_real_escape_string($con, $_POST['empid']);
  $assetid = mysqli_real_escape_string($con, $_POST['assetid']);
  $assetdt = mysqli_real_escape_string($con, $_POST['assetdt']);
  $catg = mysqli_real_escape_string($con, $_POST['catg']);
  $make = mysqli_real_escape_string($con, $_POST['make']);

  $model = mysqli_real_escape_string($con, $_POST['model']);
  $srno = mysqli_real_escape_string($con, $_POST['srno']);
  $descp = mysqli_real_escape_string($con, $_POST['descp']);

  $loc = mysqli_real_escape_string($con, $_POST['loc']);
  $section = mysqli_real_escape_string($con, $_POST['section']);

  $stat = mysqli_real_escape_string($con, $_POST['stat']);



  $insertquery = "INSERT INTO calllog(empid,assetid,assetdt,catg,make,model,srno,descp,loc,section,stat) 
    VALUES('$empid','$assetid', '$assetdt','$catg' ,'$make' , '$model', '$srno' , '$descp','$loc' ,'$section','$stat')";

$res=mysqli_query($con , $insertquery);
header('Location: opt.php');

if($res){
?>
<script>
  alter("data inserted");
  </script>
  <?php

}else {
  ?>
  <script>
  alter("data not inserted")
  header('Location: opt.php');

  </script>
  <?php

}
mysqli_close($con);

}

////////////,./,.,/,,,,,,,,,,,,,,,,,,,,;'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
//session_start();

// initializing variables

