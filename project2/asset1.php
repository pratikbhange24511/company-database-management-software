<?php
include_once 'includes/server.php';
?>
<!DOCTYPE html>

<html>
<head>

    <title>LOGIN </title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    


</head>
<body>


        <h2>submit</h2>
        <form name="f1" action = "server.php" onsubmit = "return validation()" method = "POST">  

    

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
        <style>
            .one{
                display :flex;
                flex-direction:row;
                justify-content: space-between;
            }
            </style>

<h1><center> ASSET  </center></h1>

<div class = "one" >

    <div >
            <label><B>ASSET ID
<input type="text" name="assetid" placeholder="assetid" ><br>

<label><B>ASSETDT
<input type="date" name="assetdt" placeholder="assetdt"><br>


<label><B>CATEGORY:
<select id="catg" name="catg">
    <option value="computer">computer</option>
    <option  value="laptop">laptop</option>
    <option value ="printer">printer</option>
        </select><br><br>


<label><B>MAKE

<input type="text" name="make" placeholder="make"><br>



MODEL:<input type="text" name="model" placeholder="model"><br><td>



<label><B>SRNO
<input type="text" name="srno" placeholder="srno"><br>

<label><B>DISPECTRION
<input type="text" name="descp" placeholder="descp"><br>

</div>
<div>
    <div>


<label><B>WARREXPDT
<input type="date" name="warrexpdt" placeholder="warrexpdt"><br>



</div>
<div>
    <div>



<label><B>EMPID:
<select id="empid" name="empid">
    <option value="1">1</option>
    <option  value="2">2</option>
    <option value ="3">3</option>
        </select><br><br>


<label><B>DEPTCD
<input type="text" name="deptcd" placeholder="deptcd"><br>

<label><B>LOCATION:
<select id="location" name="loc">
    <option value="pune">pune</option>
    <option  value="mumbai">mumbai</option>
    <option value ="ravet">ravet</option>
    <option value ="maharashtra">maharashtra</option>
        </select><br><br>


</div>
<div>




<label><B>SECTION:


<select id="section" name="section">
    <option value="a">a</option>
    <option  value="b">b</option>
    <option value ="c">c</option>
        </select><br><br>


<label><B>CREBY
<input type="text" name="creby" placeholder="creby"><br>


<label><B>STATUS
<input type="text" name="stat" placeholder="stat"><br>

</div>
        </div>

        <button type="submit" class="btn"name ="submit">submit</button> 
       <a href="opt.php";text-colour=black>back</a>
        

        <a href = "http://localhost/project2/asset1.php">cancel</a>
     </form>
