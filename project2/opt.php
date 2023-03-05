<!DOCTYPE html>

<html>

<head>

    <title>LOGIN </title>
 //   include 'index.php';

    <link rel="stylesheet" type="text/css" href="stylesheet.css">

</head>

<body>

     <form action="index.php" method="post">

        <h2>select</h2>

        <?php if (isset($_GET['error'])) { ?>

            <p class="error"><?php echo $_GET['error']; ?></p>

        <?php } ?>
 
        <p>
        <!-- <button type="submit">master_data</button> -->


    <a href = "http://localhost/project2/asset1.php">master_data</a>
    <a href = "http://localhost/project2/task.php">task</a>
    <a href = "http://localhost/project2/call.php">call_log</a>
    <a href = "http://localhost/project2/up.php">view</a>

    


        <!-- <button type="submit">call_log</button>
        header('Location: calllog.php');


        <button type="submit">task</button>
        header('Location: task.php');
 -->


     </form>
     

    

</body>

</html>
