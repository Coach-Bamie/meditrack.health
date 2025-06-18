<?php 
      session_start();

      error_reporting(0);
      if($_SESSION["signupmessage"]){
        $message = $_SESSION["signupmessage"];

        echo "<script type='text/javascript'>alert('$message');</script>";
      } else {
        $message = "";
      }     
?>
<!-- index.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | Hospital Management</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #e8f5e9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-box {
      background: #fff;
      padding: 30px 40px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 320px;
    }
    .login-box h2 {
      margin-bottom: 20px;
      text-align: center;
      color: #1b5e20;
    }
    .login-box input {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
    }
    #but {
      width: 100%;
      padding: 10px;
      background-color: #388e3c;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    #but:hover {
      background-color: #1b5e20;
    }
    heado {
      text-align: center;
      color: #1b5e20;
      margin-bottom: 20px;
        font-size: 2em;
        display: flex;
    }
  </style>
</head>
<body>
    <div class="login-box">
    <h2>MeDiTrack- Login</h2>
    <form action="login.php" method="post">
      <input name="username" type="text" placeholder="username">
      <input name="password" type="password" placeholder="Password">
      <input id="but" type="submit" name="login" value="Login">

      <br>
      <p>Don't have an account yet?</h><a href="signup.php">Signup</a>
  
      <h4 style=" color: red;">
        <?php 
        

        error_reporting(0);

        session_start();
        session_destroy(); // Destroy the session to log out the user
          echo $_SESSION["loginMessage"];
        ?>
      </h4>
    </form>
  </div>
  
</body>
</html>

<?php 
        error_reporting(0);

       $host = "sql5.freesqldatabase.com";
       $user = "sql5785527";
       $password = "uKpayAenyd";  
        $db = "sql5785527";

        $conn = mysqli_connect($host, $user, $password, $db);


   
 if($_SERVER["REQUEST_METHOD"] == "POST"){
      $username = $_POST["username"];
      $password = $_POST["password"];

      
    
      $sql = "SELECT * FROM `user` WHERE `username` = '$username' AND `password` = '$password'";
      $result = mysqli_query($conn, $sql);
      $row =mysqli_fetch_array($result);

      if($row["usertype"] == "admin"){

        $_SESSION["username"] = $username;
        $_SESSION["usertype"] = "admin";
        header("Location: admin-dash.php");

      } elseif($row["usertype"] == "doctor"){
        $_SESSION["username"] = $username;
         $_SESSION["usertype"] = "doctor";
        header("Location: docdash.php");

      } elseif($row["usertype"] == "patient"){
        $_SESSION["username"] = $username;
         $_SESSION["usertype"] = "patient ";
        header("Location: patient-dash.php");

      }
      elseif($row["usertype"] == "nurse"){
        $_SESSION["username"] = $username;
         $_SESSION["usertype"] = "nurse ";
        header("Location: nurse-dash.php");

      } else {

        session_start();
       
        $message = "Invalid username or password!!!";

        $_SESSION["loginMessage"] = $message;
        header("Location: login.php");
      }

   }

?>
