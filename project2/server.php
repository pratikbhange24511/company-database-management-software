<?php     
    include('connection.php');  
    $assetid = "";
    $assetdt   = "";
    $catg = "";
    $make = "";
    $model = "";
    $srno = "";
    $descp = "";
    $warrexpdt = "";
    $empid = "";
    $deptcd = "";
    $loc = "";
    $section = "";
    $creby = "";
    $db = mysqli_connect('localhost', 'root' , '', 'javatpoint');

    if (isset($_POST['submit']))

   
{
  $assetid = mysqli_real_escape_string($con, $_POST['assetid']);
  $assetdt = mysqli_real_escape_string($con, $_POST['assetdt']);
  $catg = mysqli_real_escape_string($con, $_POST['catg']);
  $make = mysqli_real_escape_string($con, $_POST['make']);

  $model = mysqli_real_escape_string($con, $_POST['model']);
  $srno = mysqli_real_escape_string($con, $_POST['srno']);
  $descp = mysqli_real_escape_string($con, $_POST['descp']);
  $warrexpdt = mysqli_real_escape_string($con, $_POST['warrexpdt']);

  $empid = mysqli_real_escape_string($con, $_POST['empid']);
  $deptcd = mysqli_real_escape_string($con, $_POST['deptcd']);
  $loc = mysqli_real_escape_string($con, $_POST['loc']);
  $section = mysqli_real_escape_string($con, $_POST['section']);

  $creby = mysqli_real_escape_string($con, $_POST['creby']);
  $stat = mysqli_real_escape_string($con, $_POST['stat']);


  $insertquery = "INSERT INTO assetexide(assetid,assetdt,catg,make,model,srno,descp,warrexpdt,empid,deptcd,loc,section,creby,stat) 
    VALUES('$assetid', '$assetdt','$catg' ,'$make' , '$model', '$srno' , '$descp' , '$warrexpdt' , '$empid','$deptcd' , '$loc' , '$section' ,' $creby', '$stat')";

//$insertquery =`student` (`assetid`, `assetdt`, `catg`, `make`, `made`, `srno`, `descp`, `warrexpdt`, `empid`, `deptcd`, `loc`, `section`, `creif`, `credate`)
// VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]')

$res=mysqli_query($con , $insertquery);
header('Location: opt.php');
if($res){
?>
<script>
  echo("data inserted");
  header('Location: opt.php');

  </script>
  <?php

}else {
  ?>
  <script>
  echo("data not inserted")
  </script>
  <?php

}
mysqli_close($con);

}
////////////,./,.,/,,,,,,,,,,,,,,,,,,,,;'''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''''
//session_start();

// initializing variables

