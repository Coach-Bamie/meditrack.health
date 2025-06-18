<!--this page is for contact developer-->
<!-- contact.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Contact Us | Hospital</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #e8f5e9;
      padding: 40px;
    }
    .contact-box {
      max-width: 600px;
      background: white;
      margin: auto;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
    }
    .contact-box h2 {
      margin-bottom: 20px;
    }
    .contact-box input, .contact-box textarea {
      width: 100%;
      padding: 12px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 6px;
    }
    .contact-box button {
      padding: 10px 20px;
      background-color: #388e3c;
      color: white;
      border: none;
      border-radius: 6px;
      cursor: pointer;
    }
    .contact-box button:hover {
      background-color: #e65100;
    }
  </style>
</head>
<body>
  <div class="contact-box">
    <h2>Contact Developer</h2>
    <h4>
      <?php
      error_reporting(0);

        session_start();
        session_destroy(); // Destroy the session to log out the user
          
           echo $_SESSION["contactmessage"];
  

       ?>   
    </h4>
    <form action="contact.php" method="post">
      <input name="name" type="text" placeholder="Your Name" required>
      <input name="email" type="email" placeholder="Your Email" required>
      <textarea name="message" minlength="20" maxlength="100" rows="5" placeholder="Your Message" required></textarea>
      <input type="submit" name="send" value="Send">
    </form>
  </div>
</body>
</html>
<?php 
   
   $host ="localhost";
   $username ="root";
   $password ="";
   $db ="meditrack";

   $conn = mysqli_connect($host, $username, $password, $db);

   if(!$conn){
    die("Connection Failed");
   }

   if(isset($_POST["send"])){
      $name =$_POST["name"];
      $email =$_POST["email"];
      $message =$_POST["message"];
       
       $sql=("INSERT  INTO contact (name, email, message) VALUES ('$name', '$email', '$message')");
       $result =mysqli_query($conn,$sql);

      if($result){
         $_SESSION["contactmessage"] = " Your message has been sent successfully.";
         header("location: login.php");
         exit();

      }else{
        echo"Message not sent";
      }

   }
  
?>
