<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Doctor Dashboard | MeDiTrack</title>
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body { display: flex; font-family: Arial, sans-serif; background: #e8f5e9; }

    .sidebar {
      width: 220px;
      background-color: #1b5e20;
      color: white;
      height: 100vh;
      padding: 20px;
    }

    .sidebar h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .sidebar a {
      display: block;
      padding: 10px;
      margin-bottom: 10px;
      color: white;
      text-decoration: none;
      border-radius: 4px;
    }

    .sidebar a:hover {
      background-color: #388e3c;
    }

    .main {
      flex: 1;
      padding: 20px;
    }

    .main h1 {
      margin-bottom: 20px;
      color: #1b5e20;
    }

    .card {
      background: white;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      margin-bottom: 20px;
    }

    .brand {
      text-align: center;
      font-size: 22px;
      margin-bottom: 10px;
      color: #a5d6a7;
      font-weight: bold;
    }
  </style>
</head>
<body>

  <?php 
  include("docside.php");
  ?>
  <div class="main">
    <h1>Welcome, Dr. John</h1>

    <div class="card">
      <h3>Today's Appointments</h3>
      <p>You have 5 patients scheduled today.</p>
    </div>

    <div class="card">
      <h3>Recent Patient Activity</h3>
      <p>Latest consultations and prescribed medications.</p>
    </div>
  </div>

</body>
</html>
<script>
  function toggleSidebar() {
      document.getElementById("sidebar").classList.toggle("active");
    }
</script>
