<?php
include_once 'includes/taskser.php';
?>
<!DOCTYPE html>

<html>
<head>

    <title>LOGIN </title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    


</head>
<body>


        <h2>submit</h2>
        <form name="f1" action = "taskser.php" onsubmit = "return validation()" method = "POST">  

    

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

<h1><center> task  </center></h1>

<div class = "one">
    <div>


<label><B>EMPID:


<select id="empid" name="empid">
    <option value="111">111</option>
    <option  value="112">112</option>
    <option value ="113">113</option>
    <option value ="114">114</option>
        </select><br><br>

<label><B>ASSETID

<input type="text" name="assetid" placeholder="assetid"><br>

<label><B>ASSETDT

<input type="date" name="assetdt" placeholder="assetdt"><br>

<label><B>CATEGORY:

<select id="catg" name="catg">

    <option value="laptop">111</option>
    <option  value="computer">112</option>
    <option value ="printer">113</option>
        </select><br><br>

<label><B>SR.NO

<input type="text" name="srno" placeholder="srno"><br>
</div>
<div>

<div>

<label><B>MAKE

<input type="text" name="make" placeholder="make"><br>
<label><B>MODEL

<input type="text" name="model" placeholder="model"><br>

<label><B>LOCATION:
<select id="loc" name="loc">
    <option value="pune">pune</option>
    <option  value="mumbai">mumbai</option>
    <option value ="ravet">ravet</option>
        </select><br><br>


<label><B>STATUS
<input type="text" name="stat" placeholder="stat"><br>




<label><B>COMPDT

<input type="text" name="compdt" placeholder="compdt"><br>




</div>

        <button type="submit" class="btn"name ="submit">submit</button>
        <a href = "http://localhost/project2/task.php">cancel</a>
        <a href="opt.php";text-colour=black>back</a>


     </form>


    