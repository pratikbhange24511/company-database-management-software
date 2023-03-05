<?php      
    include('connection.php');  
    $username = $_POST['username'];  
    $password = $_POST['password'];  
      
      //  to prevent from mysqli injection  
        $username = stripcslashes($username);  
        $password = stripcslashes($password);  
        $username = mysqli_real_escape_string($con, $username);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
      // if($username =="admin"&& $password=="admin")
        if    ($count == 1)
         //  body>
         // echo "<h1><center> Login successful  </center></h1>";   
         //<div class = "ex">
      // <a href == "http://localhost/project2/authentication.php">login<li></a>
     //  </body>
        // 'Already  member?' <a href="opt.php?">login</a>
        //<a href="opt.php">Test</a>
       header('Location: opt.php');

           
//break();
          
        // </div>

        
//'Already  member?' <a href="opt.php">welcome in</a>
  	


       else{  
           //<h1> Login failed. Invalid username or password.</h1>""
           // <h1><center> task  </center></h1>


           // header('Location: index.php');
           header('Location: index.php');


        }     
?>  

       