<!DOCTYPE html>

<html>

<head>

    <title>LOGIN </title>
 //   include 'index.php';

    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

     <form action="index.php" method="post">

        <h2>select</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
 
        <p>
        <!-- <button type="submit">master_data</button> -->


    <a href = "http://localhost/project2/search1.php">view</a>
    <a href = "http://localhost/project2/asset1.php">create</a>

    

 


     </form>
     

    

</body>

</html>
