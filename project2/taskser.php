<?php     
    include('connection.php');  
    $empid = "";
    $assetid = "";
    $assetdt   = "";
    $catg = "";
    $make = "";
    $model = "";
    $loc = "";
    $status= "";
    $compdt = "";
    $db = mysqli_connect('localhost', 'root' , '', 'javatpoint');

    if (isset($_POST['submit']))

   
{
  $empid = mysqli_real_escape_string($con, $_POST['empid']);

  $assetid = mysqli_real_escape_string($con, $_POST['assetid']);
  $assetdt = mysqli_real_escape_string($con, $_POST['assetdt']);
  $catg = mysqli_real_escape_string($con, $_POST['catg']);
  $srno = mysqli_real_escape_string($con, $_POST['srno']);

  $make = mysqli_real_escape_string($con, $_POST['make']);

  $model = mysqli_real_escape_string($con, $_POST['model']);
  $loc = mysqli_real_escape_string($con, $_POST['loc']);
  $stat = mysqli_real_escape_string($con, $_POST['stat']);

  $compdt = mysqli_real_escape_string($con, $_POST['compdt']);
  

  $insertquery = "INSERT INTO task(empid,assetid,assetdt,catg,srno,make,model,loc,stat ,compdt) 
    VALUES('$empid','$assetid', '$assetdt','$catg' ,'$srno','$make' , '$model','$loc' , '$stat','$compdt')";

//$insertquery =`student` (`assetid`, `assetdt`, `catg`, `make`, `made`, `srno`, `descp`, `warrexpdt`, `empid`, `deptcd`, `loc`, `section`, `creif`, `credate`)
// VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]')

$res=mysqli_query($con , $insertquery);
header('Location: opt.php');

if($res){
?>
<script>
  alter("data inserted");
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

 
