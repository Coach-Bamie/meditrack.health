

!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title>Admin Dashboard | MeDiTrack</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
    body {
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #e8f5e9;
      display: flex;
    }

    .header {
      position: fixed;
      top: 0;
      left: 220px;
      right: 0;
      height: 60px;
      background-color: #2e7d32;
      color: white;
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 20px;
      z-index: 900;
      box-shadow: 0 2px 4px rgba(0,0,0,0.1);
      text-align: right;
    }

    .header h1 {
      margin: 0;
      font-size: 20px;
      text-align: right;
    }

    .sidebar {
      width: 220px;
      background-color: #1b5e20;
      color: white;
      height: 100vh;
      padding: 20px;
      position: fixed;
      top: 0;
      left: 0;
      transition: transform 0.3s ease;
      z-index: 1000;
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
      margin-left: 220px;
      padding: 90px 30px 30px;
      transition: margin-left 0.3s ease;
    }

    .main h1 {
      color: #1b5e20;
      margin-bottom: 30px;
      text-align: right;
    }

    .cards {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .card {
      background: white;
      border-radius: 8px;
      padding: 25px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      flex: 1 1 200px;
      text-align: center;
    }

    .card h2 {
      margin: 0;
      color: #1b5e20;
      font-size: 36px;
    }

    .card p {
      margin-top: 10px;
      font-weight: bold;
      color: #4caf50;
      font-size: 18px;
    }

    .menu-btn {
      display: none;
      position: fixed;
      top: 15px;
      left: 15px;
      z-index: 1100;
      background: #1b5e20;
      color: white;
      border: none;
      font-size: 24px;
      padding: 5px 10px;
      cursor: pointer;
    }

    .sidebar .close-btn {
      display: none;
      text-align: right;
      font-size: 22px;
      cursor: pointer;
    }

    @media (max-width: 768px) {
      .sidebar {
        transform: translateX(-100%);
      }

      .sidebar.active {
        transform: translateX(0);
      }

      .main {
        margin-left: 0;
        padding: 80px 20px 20px;
        width: 100%;
      }

      .header {
        left: 0;
      }

      .menu-btn {
        display: block;
      }

      .sidebar .close-btn {
        display: block;
        margin-bottom: 20px;
      }
    }
  </style>
</head>
<body>

  <button class="menu-btn" onclick="toggleSidebar()">☰</button>

  <div class="sidebar" id="sidebar">
    <div class="close-btn" onclick="toggleSidebar()">✖</div>
    <h2>MeDiTrack</h2>
    <a href="nurse-dash.php">Dashboard</a>
    <a href="">Manage Doctors</a>
    <a href="">Manage Patients</a>
    <a href="">Manage Appointments</a>
    <a href="">Billing</a>
    <a href="logout.php">Logout</a>
  </div>

  <div class="header">
    
  </div>

  <div class="main">
    <h1>Welcome, nurse</h1>
    <div class="cards">
      <h1>Welcome to the nursing section,we have nothing here for now</h1>
    </div>
  </div>

  <script>
    function toggleSidebar() {
      document.getElementById("sidebar").classList.toggle("active");
    }
  </script>

</body>
</html>
