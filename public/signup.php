<?php 
session_start();


    $host = "sql5.freesqldatabase.com";
       $user = "sql5785527";
       $password = "uKpayAenyd";  
        $db = "sql5785527";

    $conn = mysqli_connect($host, $user, $password, $db);
    if (!$conn) {
        die("Connection failed: ");
    }

    if(isset($_POST['signup'])) {
        $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $usertype = $_POST['role'];
        $passwordd = password_hash($password, PASSWORD_DEFAULT); // Hash the password for security
       // $password = password_hash($password, PASSWORD_BCRYPT); // Hash the password for security


        $sql=("INSERT INTO user (full_name, email, phone, address, username, password, usertype) VALUES ('$fullname', '$email', '$phone', '$address', '$username', '$password', '$usertype')");
        $result = mysqli_query($conn, $sql);

        if($result){
          $_SESSION["signupmessage"] = " Your account has been created successfully. You can now log in.";

          header("Location: login.php"); // Redirect to login page after successful registration
          exit();

        }else{
          echo "User Registration Failed: ";
        }
    }
    
    ?>

<!-- signup.html -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Signup | Hospital Management</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #e8f5e9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .signup-box {
      background: #fff;
      padding: 30px 40px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
      width: 100%;
      max-width: 400px;
    }
    .signup-box h2 {
      text-align: center;
      margin-bottom: 20px;
      
      text-align: center;
      color: #1b5e20;
    }
    .signup-box input, .signup-box select {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }
    #id{
      width: 100%;
      padding: 10px;
      background-color: #388e3c;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    .signup-box button:hover {
      background-color: #1b5e20;
    }
  </style>
</head>
<body>
  <div class="signup-box">
    <h2>Meditrack-Sign Up</h2>
    <form action="signup.php" method="post">
      <input type="text" name="fullname" placeholder="Full Name" >
      <input type="email" name="email" placeholder="Email" >
      <input type="text" name="phone" placeholder="Phone Number" required>
      <input type="text" name="address" placeholder="Address" >
      <input type="text" name="username" placeholder="Username" required>
      <input type="password" name="password" placeholder="Password" required>
      
      <select name="role" required>
        <option  value="">Select Role</option>
        <option value="doctor">Doctor</option>
        <option value="patient">Patient</option>
        <option value="admin">Admin</option>
        <option value="nurse">Nurse</option>
      </select>
      <input id="id" type="submit" name="signup" value="Sign Up">
      <p>Already Have An Account?</h><a href="login.php">Login</a>
    </form>
  </div>
</body>
</html>
